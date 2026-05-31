#!/usr/bin/env perl
use strict;
use warnings;
use File::Find;

sub fix_file {
    my ($path) = @_;
    open my $fh, '<', $path or return;
    my $content = do { local $/; <$fh> };
    close $fh;
    my $orig = $content;

    $content =~ s/public_public_asset/public_asset/g;
    $content =~ s/jquery-ui\.13\.3/jquery-ui\@1.13.3/g;

    for (1 .. 20) {
        last unless $content =~ /srcset="\{\{ public_asset\('[^']+\s+\d+w,\s*\{\{ public_asset/;
        $content =~ s{
            public_asset\('([^']+?)\s+(\d+w),\s*\{\{\s*public_asset\('([^']+?)\s+(\d+w)'\)
        }{
            'public_asset(\'' . $1 . '\') }} ' . $2 . ', {{ public_asset(\'' . $3 . '\') }} ' . $4
        }gex;
    }

    return if $content eq $orig;
    open my $out, '>', $path or die $!;
    print $out $content;
    close $out;
    print "fixed $path\n";
}

find(
    {
        wanted => sub {
            return unless -f $_ && /\.blade\.php\z/;
            fix_file($File::Find::name);
        },
        no_chdir => 1,
    },
    'resources/views',
);
