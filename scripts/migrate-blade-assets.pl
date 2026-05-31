#!/usr/bin/env perl
use strict;
use warnings;
use File::Find;

my @files;
find(sub {
    return unless -f && /\.blade\.php$/;
    push @files, $File::Find::name;
}, 'resources/views');

for my $file (@files) {
    open my $fh, '<', $file or next;
    my $c = do { local $/; <$fh> };
    close $fh;
    my $o = $c;

    # CSS: elementor uploads -> /css/
    $o =~ s|href='/wp-content/uploads/elementor/css/([^']+)'|href="{{ public_asset('css/$1') }}"|g;
    $o =~ s|href="/wp-content/uploads/elementor/css/([^"]+)"|href="{{ public_asset('css/$1') }}"|g;

    # CSS: elementor plugins -> /css/
    $o =~ s|href='/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper\.min\.css([^']*)'|href="{{ public_asset('css/swiper.min.css$1') }}"|g;
    $o =~ s|href='/wp-content/plugins/elementor/assets/css/conditionals/e-swiper\.min\.css([^']*)'|href="{{ public_asset('css/e-swiper.min.css$1') }}"|g;
    $o =~ s|href='/wp-content/plugins/elementor/assets/css/widget-nested-accordion\.min\.css([^']*)'|href="{{ public_asset('css/widget-nested-accordion.min.css$1') }}"|g;
    $o =~ s|href='/wp-content/plugins/elementor/assets/css/([^']+)'|href="{{ public_asset('css/$1') }}"|g;
    $o =~ s|href='/wp-content/uploads/elementor/css/custom-widget-icon-list\.min\.css([^']*)'|href="{{ public_asset('css/custom-widget-icon-list.min.css$1') }}"|g;

    # Theme style
    $o =~ s|href='/wp-content/themes/insul/style\.css([^']*)'|href="{{ public_asset('css/insul-style.css$1') }}"|g;
    $o =~ s|href="/wp-content/themes/insul/style\.css([^"]*)"|href="{{ public_asset('css/insul-style.css$1') }}"|g;

    # Local /css/ without public_asset
    $o =~ s|href='/css/([^']+)'|href="{{ public_asset('css/$1') }}"|g;
    $o =~ s|href="/css/([^"]+)"|href="{{ public_asset('css/$1') }}"|g;

    # jQuery CDN
    $o =~ s|<script src="/wp-includes/js/jquery/jquery\.min\.js[^"]*"\s*\n?\s*id="jquery-core-js"></script>|<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" id="jquery-core-js"></script>|g;
    $o =~ s|<script src="/wp-includes/js/jquery/jquery\.min\.js[^"]*"[^>]*></script>|<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" id="jquery-core-js"></script>|g;
    $o =~ s|<script src="/wp-includes/js/jquery/jquery-migrate\.min\.js[^"]*"\s*\n?\s*id="jquery-migrate-js"></script>|<script src="https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.1/dist/jquery-migrate.min.js" id="jquery-migrate-js"></script>|g;
    $o =~ s|<script src="/wp-includes/js/jquery/jquery-migrate\.min\.js[^"]*"[^>]*></script>|<script src="https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.1/dist/jquery-migrate.min.js" id="jquery-migrate-js"></script>|g;

    # WP core JS -> CDN
    $o =~ s|<script src="/wp-includes/js/dist/hooks\.min\.js[^"]*"[^>]*></script>|<script src="https://cdn.jsdelivr.net/gh/wordpress/wordpress@6.7/wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></script>|g;
    $o =~ s|<script src="/wp-includes/js/dist/i18n\.min\.js[^"]*"[^>]*></script>|<script src="https://cdn.jsdelivr.net/gh/wordpress/wordpress@6.7/wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>|g;
    $o =~ s|<script src="/wp-includes/js/imagesloaded\.min\.js[^"]*"[^>]*></script>|<script src="https://cdn.jsdelivr.net/npm/imagesloaded@5.0.0/imagesloaded.pkgd.min.js" id="imagesloaded-js"></script>|g;
    $o =~ s|<script src="/wp-includes/js/underscore\.min\.js[^"]*"[^>]*></script>|<script src="https://cdn.jsdelivr.net/npm/underscore@1.13.7/underscore-min.js" id="underscore-js"></script>|g;
    $o =~ s|<script src="/wp-includes/js/wp-util\.min\.js[^"]*"[^>]*></script>|<script src="https://cdn.jsdelivr.net/gh/wordpress/wordpress@6.7/wp-includes/js/wp-util.min.js" id="wp-util-js"></script>|g;
    $o =~ s|<script src="/wp-includes/js/jquery/ui/core\.min\.js[^"]*"[^>]*></script>|<script src="https://cdn.jsdelivr.net/npm/jquery-ui@1.13.3/dist/jquery-ui.min.js" id="jquery-ui-core-js"></script>|g;

    # Theme/plugin JS -> /js/ mirror
    $o =~ s|src="/wp-content/themes/insul/([^"]+)"|src="{{ public_asset('js/insul/$1') }}"|g;
    $o =~ s|src="/wp-content/plugins/contact-form-7/([^"]+)"|src="{{ public_asset('js/contact-form-7/$1') }}"|g;
    $o =~ s|src="/wp-content/plugins/elementor/assets/js/([^"]+)"|src="{{ public_asset('js/elementor/assets/js/$1') }}"|g;
    $o =~ s|src="/wp-content/plugins/elementor/assets/lib/jquery-numerator/([^"]+)"|src="{{ public_asset('js/elementor/lib/jquery-numerator/$1') }}"|g;
    $o =~ s|src="/wp-content/plugins/mailchimp-for-wp/assets/js/([^"]+)"|src="{{ public_asset('js/mailchimp/assets/js/$1') }}"|g;
    $o =~ s|src="/wp-content/plugins/revslider/([^"]+)"|src="{{ public_asset('js/revslider/$1') }}"|g;

    # Uploads images (CDN in production)
    $o =~ s|src="/wp-content/uploads/([^"]+)"|src="{{ public_asset('wp-content/uploads/$1') }}"|g;
    $o =~ s|srcset="/wp-content/uploads/([^"]+)"|srcset="{{ public_asset('wp-content/uploads/$1') }}"|g;
    $o =~ s|, /wp-content/uploads/|, {{ public_asset('wp-content/uploads/|g;  # fix srcset commas - may need manual fix

    # asset('wp-content/uploads -> public_asset
    $o =~ s|asset\('wp-content/uploads/|public_asset('wp-content/uploads/|g;

    next if $o eq $c;
    open my $out, '>', $file or die $!;
    print $out $o;
    close $out;
    print "Updated: $file\n";
}
