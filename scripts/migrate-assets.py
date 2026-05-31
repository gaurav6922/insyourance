#!/usr/bin/env python3
"""Download demo assets locally and fix Blade templates."""

import glob
import os
import re
import urllib.request
import ssl

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
VIEWS = os.path.join(ROOT, "resources", "views")
PUBLIC = os.path.join(ROOT, "public")
BASE_URL = "https://demo2.pavothemes.com/insul/"

ctx = ssl.create_default_context()


def extract_asset_paths():
    pattern = re.compile(r"(?:https?:)?//demo2\.pavothemes\.com/insul/([^\"'\s?<>]+)")
    paths = set()
    for fpath in glob.glob(os.path.join(VIEWS, "**/*.blade.php"), recursive=True):
        with open(fpath, encoding="utf-8") as f:
            content = f.read()
        for m in pattern.finditer(content):
            path = m.group(1).split("?")[0]
            if path.startswith(("wp-content/", "wp-includes/")):
                paths.add(path)
    return sorted(paths)


def download_assets(paths):
    downloaded = skipped = failed = 0
    for path in paths:
        dest = os.path.join(PUBLIC, path)
        if os.path.isfile(dest) and os.path.getsize(dest) > 0:
            skipped += 1
            continue
        os.makedirs(os.path.dirname(dest), exist_ok=True)
        url = BASE_URL + path
        try:
            req = urllib.request.Request(url, headers={"User-Agent": "Mozilla/5.0"})
            with urllib.request.urlopen(req, context=ctx, timeout=30) as resp:
                data = resp.read()
            if len(data) < 10:
                print(f"  SKIP (empty): {path}")
                failed += 1
                continue
            with open(dest, "wb") as f:
                f.write(data)
            downloaded += 1
            print(f"  OK: {path}")
        except Exception as e:
            print(f"  FAIL: {path} ({e})")
            failed += 1
    print(f"\nAssets: {downloaded} downloaded, {skipped} skipped, {failed} failed")


def fix_blade_file(content):
    # Localize demo URLs
    content = content.replace("https://demo2.pavothemes.com/insul/", "/")
    content = content.replace("//demo2.pavothemes.com/insul/", "/")
    content = content.replace("https:\\/\\/demo2.pavothemes.com\\/insul\\/", "\\/")

    # Remove dns-prefetch for demo server
    content = re.sub(
        r"<link rel='dns-prefetch' href='//demo2\.pavothemes\.com' />\s*\n?", "", content
    )

    # Remove Cloudflare Web Analytics beacon
    content = re.sub(
        r"<script defer src=\"https://static\.cloudflareinsights\.com/beacon\.min\.js/[^\"]+\"[^>]*></script>\s*",
        "",
        content,
        flags=re.DOTALL,
    )
    content = re.sub(
        r"<script defer src='https://static\.cloudflareinsights\.com/beacon\.min\.js/[^']+'[^>]*></script>\s*",
        "",
        content,
        flags=re.DOTALL,
    )

    # Remove Cloudflare challenge-platform iframe injector
    content = re.sub(
        r"<script>\(function\(\)\{function c\(\)\{var b=a\.contentDocument.*?'\}\)\(\);\s*</script>\s*</body>",
        "</body>",
        content,
        flags=re.DOTALL,
    )

    # Remove cdn-cgi email-decode scripts
    content = re.sub(
        r'<script data-cfasync="false" src="/cdn-cgi/scripts/[^"]+"></script>',
        "",
        content,
    )

    # Remove WP Rocket lazyload script tag
    content = re.sub(
        r'<script data-no-minify="1" async src="/wp-content/plugins/wp-rocket/assets/js/lazyload/[^"]+"></script>\s*',
        "",
        content,
    )

    # Remove WP Rocket lazyload inline config (before lazyload script)
    content = re.sub(
        r"<script>window\.lazyLoadOptions=\{.*?\},!1\)</script>\s*",
        "",
        content,
        flags=re.DOTALL,
    )

    # Remove rocket-browser-checker inline script
    content = re.sub(
        r'<script id="rocket-browser-checker-js-after">\s*"use strict";var _createClass.*?</script>\s*',
        "",
        content,
        flags=re.DOTALL,
    )

    # Remove rocket-preload-links config and inline script
    content = re.sub(
        r'<script id="rocket-preload-links-js-extra">\s*var RocketPreloadLinksConfig = \{.*?\};\s*</script>\s*',
        "",
        content,
        flags=re.DOTALL,
    )
    content = re.sub(
        r'<script id="rocket-preload-links-js-after">\s*\(function\(\) \{.*?\}\)\(\);\s*</script>\s*',
        "",
        content,
        flags=re.DOTALL,
    )

    # Fix insul-style.css reference in CSS (was loading from demo)
    content = content.replace(
        "href='/css/insul-style.css'",
        "href='/wp-content/themes/insul/style.css'",
    )

    # Fix elementor CSS that maps to public/css where files exist
    css_map = {
        "/wp-content/plugins/contact-form-7/includes/css/styles.css": "/css/contact-form-7.css",
        "/wp-content/plugins/pavo-demo/style.css": "/css/pavo-demo.css",
        "/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css": "/css/header-footer-elementor.css",
        "/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css": "/css/frontend.css",
        "/wp-content/themes/insul/assets/css/gutenberg-blocks.css": "/css/gutenberg-blocks.css",
        "/wp-content/themes/demo-child/style.css": "/css/demo-child.css",
        "/wp-content/themes/insul/assets/css/elementor.css": "/css/insul-elementor.css",
        "/wp-content/themes/insul/assets/css/libs/magnific-popup.css": "/css/magnific-popup.css",
        "/wp-content/plugins/revslider/sr6/assets/css/rs6.css": "/css/rs6.css",
        "/wp-content/plugins/elementor/assets/css/widget-text-path.min.css": "/css/widget-text-path.min.css",
        "/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css": "/css/widget-text-editor.min.css",
        "/wp-content/plugins/elementor/assets/css/widget-image.min.css": "/css/widget-image.min.css",
        "/wp-content/plugins/elementor/assets/lib/animations/styles/slideInUp.min.css": "/css/slideInUp.min.css",
        "/wp-content/plugins/elementor/assets/lib/animations/styles/slideInRight.min.css": "/css/slideInRight.min.css",
        "/wp-content/plugins/elementor/assets/lib/animations/styles/slideInLeft.min.css": "/css/slideInLeft.min.css",
        "/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-shrink.min.css": "/css/e-animation-shrink.min.css",
    }
    for wp_path, css_path in css_map.items():
        content = content.replace(f"href='{wp_path}", f"href='{css_path}")
        content = content.replace(f'href="{wp_path}', f'href="{css_path}')

    return content


def fix_blade_files():
    count = 0
    for fpath in glob.glob(os.path.join(VIEWS, "**/*.blade.php"), recursive=True):
        with open(fpath, encoding="utf-8") as f:
            original = f.read()
        fixed = fix_blade_file(original)
        if fixed != original:
            with open(fpath, "w", encoding="utf-8") as f:
                f.write(fixed)
            count += 1
            print(f"  Fixed: {os.path.relpath(fpath, ROOT)}")
    print(f"\nBlade files updated: {count}")


def fix_css_file():
    css_path = os.path.join(PUBLIC, "css", "insul-style.css")
    if os.path.isfile(css_path):
        with open(css_path, encoding="utf-8") as f:
            content = f.read()
        fixed = content.replace("https://demo2.pavothemes.com/insul/", "/")
        if fixed != content:
            with open(css_path, "w", encoding="utf-8") as f:
                f.write(fixed)
            print("Fixed: public/css/insul-style.css")


if __name__ == "__main__":
    print("=== Extracting asset paths ===")
    paths = extract_asset_paths()
    print(f"Found {len(paths)} unique asset paths\n")

    print("=== Downloading assets ===")
    download_assets(paths)

    print("\n=== Fixing Blade templates ===")
    fix_blade_files()

    print("\n=== Fixing CSS ===")
    fix_css_file()

    print("\n=== Done ===")
