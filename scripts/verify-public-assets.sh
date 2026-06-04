#!/usr/bin/env bash
# Verify Laravel public assets required for the marketing site.
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "$ROOT"

missing=0

check() {
  if [[ ! -e "$1" ]]; then
    echo "MISSING: $1"
    missing=$((missing + 1))
  fi
}

echo "Checking critical public assets..."

# CSS (served from /css/ on production)
for f in \
  css/custom-frontend.min.css \
  css/swiper.min.css \
  css/post-7.css \
  css/insul-style.css \
  css/cta-popup.css \
  css/whatsapp-float.css
do
  check "public/$f"
done

# Mirrored JS (served from /js/ on production)
for f in \
  js/insul/assets/js/frontend/main.js \
  js/elementor/assets/js/frontend.min.js \
  js/whatsapp-float.js \
  js/cta-popup.js
do
  check "public/$f"
done

# Homepage images mirrored under /images/home/
for f in \
  images/home/bg-sl1-min-scaled.jpeg \
  images/home/img-sl1-client-min.png \
  images/home/expert-guidance-finance.jpg
do
  check "public/$f"
done

if [[ "$missing" -gt 0 ]]; then
  echo ""
  echo "$missing required file(s) missing. Run: git pull && ensure public/ is deployed."
  exit 1
fi

echo "All checked assets present."
