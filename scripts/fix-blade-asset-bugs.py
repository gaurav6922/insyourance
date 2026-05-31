#!/usr/bin/env python3
"""Fix migration bugs in Blade views."""
from __future__ import annotations

import re
from pathlib import Path

VIEWS = Path("resources/views")

PATTERNS = [
    # path + width inside quotes, next call already fixed: ...jpg') }} 300w
    re.compile(
        r"public_asset\('([^']+?)\s+(\d+w),\s*\{\{\s*public_asset\('([^']+?)'\)\s*\}\}\s*(\d+w)",
    ),
    # path + width inside quotes, next call still broken: ...jpg 300w')
    re.compile(
        r"public_asset\('([^']+?)\s+(\d+w),\s*\{\{\s*public_asset\('([^']+?)\s+(\d+w)'\)",
    ),
]

REPLACEMENT = r"public_asset('\1') }} \2, {{ public_asset('\3') }} \4"


def fix_srcset(content: str) -> str:
    for _ in range(30):
        changed = False
        for pattern in PATTERNS:
            new_content, n = pattern.subn(REPLACEMENT, content)
            if n:
                content = new_content
                changed = True
        if not changed:
            break
    # Stray closing brace left from old ') }}" endings
    content = re.sub(r"(\d+w) \}\}\}\"", r"\1\"", content)
    return content


def fix_file(path: Path) -> bool:
    text = path.read_text(encoding="utf-8")
    original = text
    text = text.replace("public_public_asset", "public_asset")
    text = text.replace("jquery-ui.13.3", "jquery-ui@1.13.3")
    text = fix_srcset(text)
    if text == original:
        return False
    path.write_text(text, encoding="utf-8")
    print(f"fixed {path}")
    return True


def main() -> None:
    count = 0
    for blade in VIEWS.rglob("*.blade.php"):
        if fix_file(blade):
            count += 1
    print(f"done ({count} files)")


if __name__ == "__main__":
    main()
