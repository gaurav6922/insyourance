@php
    $base = public_asset('wp-content/uploads/2024/04/' . $member['image']);
    $slug = pathinfo($member['image'], PATHINFO_FILENAME);
    $wrapperClass = ($layout ?? 'grid') === 'swiper'
        ? 'swiper-slide elementor-item elementor-teambox-item'
        : 'elementor-teambox-item';
    $loading = $loop->first ? 'fetchpriority="high"' : 'loading="lazy"';
@endphp
<div class="{{ $wrapperClass }}">
    <div class="team-items">
        <div class="team-top">
            <div class="team-image">
                <img {!! $loading !!} decoding="async" width="330" height="330" src="{{ $base }}" class="attachment-full size-full wp-image-{{ $member['image_id'] }}" alt="{{ $member['name'] }}" srcset="{{ $base }} 330w, {{ public_asset('wp-content/uploads/2024/04/' . $slug . '-300x300.jpg') }} 300w, {{ public_asset('wp-content/uploads/2024/04/' . $slug . '-150x150.jpg') }} 150w" sizes="(max-width: 330px) 100vw, 330px" />
            </div>
        </div>
        <div class="team-caption">
            <div class="team-name">{{ $member['name'] }}</div>
            <div class="job-socical">
                <div class="team-job">{{ $member['role'] }}</div>
            </div>
        </div>
    </div>
</div>
