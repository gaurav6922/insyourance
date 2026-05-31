<?php

if (! function_exists('public_asset_prefix')) {
    /**
     * Base URL prefix for static files under public/ (empty = same-origin /public).
     */
    function public_asset_prefix(): string
    {
        static $prefix = null;

        if ($prefix !== null) {
            return $prefix;
        }

        $forcedCdn = env('ASSET_CDN_BASE');
        if (is_string($forcedCdn) && $forcedCdn !== '') {
            $prefix = rtrim($forcedCdn, '/');

            return $prefix;
        }

        $appUrl = (string) config('app.url');
        $onProductionHost = str_contains($appUrl, 'witanfinsure.com');

        if (app()->environment('production') || $onProductionHost) {
            $prefix = rtrim((string) config('app.asset_cdn'), '/');

            return $prefix;
        }

        $prefix = '';

        return $prefix;
    }
}

if (! function_exists('public_asset')) {
    /**
     * URL for a file in public/.
     * Production uses GitHub/jsDelivr CDN until public/ is fully deployed on the server.
     */
    function public_asset(string $path): string
    {
        $query = '';
        if (str_contains($path, '?')) {
            [$path, $query] = explode('?', $path, 2);
            $query = '?'.$query;
        }

        $path = ltrim($path, '/');
        $cdn = public_asset_prefix();

        if ($cdn !== '') {
            $version = (string) config('app.asset_cdn_version', '');
            if ($version !== '' && ! str_contains($query, 'cdn-v=')) {
                $query .= ($query === '' ? '?' : '&').'cdn-v='.$version;
            }

            return $cdn.'/'.$path.$query;
        }

        $local = public_path($path);
        if (is_file($local)) {
            return asset($path).$query;
        }

        $fallback = rtrim((string) config('app.asset_cdn'), '/');
        if ($fallback !== '') {
            return $fallback.'/'.$path.$query;
        }

        return asset($path).$query;
    }
}
