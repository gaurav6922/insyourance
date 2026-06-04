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
     * On production hosts, serves from jsDelivr unless ASSET_PREFER_LOCAL=true
     * (set that only when public/ is the web document root and files are HTTP-accessible).
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
        $preferLocal = filter_var(env('ASSET_PREFER_LOCAL', false), FILTER_VALIDATE_BOOLEAN);

        if ($preferLocal && is_file(public_path($path))) {
            return asset($path).$query;
        }

        if ($cdn !== '') {
            $version = (string) config('app.asset_cdn_version', '');
            if ($version !== '' && ! str_contains($query, 'cdn-v=')) {
                $query .= ($query === '' ? '?' : '&').'cdn-v='.$version;
            }

            return $cdn.'/'.$path.$query;
        }

        if (is_file(public_path($path))) {
            return asset($path).$query;
        }

        $fallback = rtrim((string) config('app.asset_cdn'), '/');
        if ($fallback !== '') {
            $version = (string) config('app.asset_cdn_version', '');
            if ($version !== '' && ! str_contains($query, 'cdn-v=')) {
                $query .= ($query === '' ? '?' : '&').'cdn-v='.$version;
            }

            return $fallback.'/'.$path.$query;
        }

        return asset($path).$query;
    }
}

if (! function_exists('elementor_assets_base_url')) {
    /**
     * Base URL for Elementor lazy-loaded widget chunks (must end with /).
     * Derived from webpack.runtime so chunk URLs match script tags (no ?cdn-v on base).
     */
    function elementor_assets_base_url(): string
    {
        $reference = public_asset('js/elementor/assets/js/webpack.runtime.min.js?ver=3.25.11');
        $parsed = parse_url($reference);
        $path = preg_replace('#/js/webpack\.runtime\.min\.js$#', '/', $parsed['path'] ?? '');

        $origin = '';
        if (isset($parsed['scheme'], $parsed['host'])) {
            $origin = $parsed['scheme'].'://'.$parsed['host'];
            if (isset($parsed['port'])) {
                $origin .= ':'.$parsed['port'];
            }
        }

        return $origin.$path;
    }
}

if (! function_exists('local_public_asset')) {
    /**
     * @deprecated Use public_asset(); kept as an alias for existing templates.
     */
    function local_public_asset(string $path): string
    {
        return public_asset($path);
    }
}
