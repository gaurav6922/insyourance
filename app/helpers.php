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

        // Prefer files deployed on the server so new assets work before CDN sync.
        $local = public_path($path);
        if (is_file($local)) {
            return asset($path).$query;
        }

        $cdn = public_asset_prefix();

        if ($cdn !== '') {
            $version = (string) config('app.asset_cdn_version', '');
            if ($version !== '' && ! str_contains($query, 'cdn-v=')) {
                $query .= ($query === '' ? '?' : '&').'cdn-v='.$version;
            }

            return $cdn.'/'.$path.$query;
        }

        $fallback = rtrim((string) config('app.asset_cdn'), '/');
        if ($fallback !== '') {
            return $fallback.'/'.$path.$query;
        }

        return asset($path).$query;
    }
}

if (! function_exists('local_public_asset')) {
    /**
     * Same-origin URL for a public/ file (never uses jsDelivr).
     * Use for features that must match the deployed HTML (e.g. CTA popups).
     */
    function local_public_asset(string $path): string
    {
        $extraQuery = '';
        if (str_contains($path, '?')) {
            [$path, $extraQuery] = explode('?', $path, 2);
            $extraQuery = '?'.$extraQuery;
        }

        $path = ltrim($path, '/');
        $url = asset($path);
        $file = public_path($path);

        if (is_file($file) && ! str_contains($url, 'v=')) {
            $url .= (str_contains($url, '?') ? '&' : '?').'v='.filemtime($file);
        }

        return $url.$extraQuery;
    }
}
