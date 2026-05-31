#!/usr/bin/env bash
# Purge jsDelivr cache after pushing public/ asset or CSS fixes.
# Usage: ./scripts/purge-jsdelivr-cache.sh [path]
# Example: ./scripts/purge-jsdelivr-cache.sh public/css/post-104.css

set -euo pipefail

REPO="${GITHUB_REPO:-gaurav6922/insyourance}"
BRANCH="${GITHUB_BRANCH:-main}"
PATHS="${1:-public/css/post-*.css}"

for file in $PATHS; do
  url="https://purge.jsdelivr.net/gh/${REPO}@${BRANCH}/${file}"
  echo "Purging ${file}..."
  curl -fsS "$url" || echo "  (purge request sent; check response above)"
done

echo "Done. Verify: https://cdn.jsdelivr.net/gh/${REPO}@${BRANCH}/public/css/post-104.css"
