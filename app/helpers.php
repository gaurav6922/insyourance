<?php

if (! function_exists('public_asset_prefix')) {
    /**
     * Base URL prefix for static files under public/.
     * Empty string when files exist locally; CDN base when they do not (e.g. incomplete deploy).
     */
    function public_asset_prefix(): string
    {
        static $prefix = null;

        if ($prefix !== null) {
            return $prefix;
        }

        // When ASSET_CDN_BASE is set, always use CDN (e.g. production with incomplete public/ deploy).
        $forcedCdn = env('ASSET_CDN_BASE');
        if (is_string($forcedCdn) && $forcedCdn !== '') {
            $prefix = rtrim($forcedCdn, '/');

            return $prefix;
        }

        $marker = public_path('js/insul/assets/js/frontend/main.js');

        if (is_file($marker)) {
            $prefix = '';

            return $prefix;
        }

        $prefix = rtrim((string) config('app.asset_cdn'), '/');

        return $prefix;
    }
}

if (! function_exists('public_asset')) {
    /**
     * URL for a file in public/ (local asset() or CDN when missing on disk).
     */
    function public_asset(string $path): string
    {
        $query = '';
        if (str_contains($path, '?')) {
            [$path, $query] = explode('?', $path, 2);
            $query = '?'.$query;
        }

        $path = ltrim($path, '/');
        $prefix = public_asset_prefix();

        if ($prefix === '') {
            return asset($path).$query;
        }

        return $prefix.'/'.$path.$query;
    }
}
