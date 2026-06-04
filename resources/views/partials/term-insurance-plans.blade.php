@php
    $whatsappNumber = '919711043285';
    $whatsappUrl = fn (string $message) => 'https://wa.me/' . $whatsappNumber . '?text=' . rawurlencode($message);
    $plans = [
        [
            'badge' => 'Most Popular',
            'badge_class' => 'popular',
            'title' => 'Best Term Plan',
            'amount' => '₹1 Cr',
            'desc' => 'Pure protection — maximum cover at minimum premium.',
            'whatsapp_message' => 'Hi, I\'m interested in the Best Term Plan (₹1 Cr cover).',
            'features' => [
                'Critical illness rider available',
                'Tax benefit under 80C',
                'Claim settlement >95%',
            ],
        ],
        [
            'badge' => 'High Cover',
            'badge_class' => 'cover',
            'title' => 'Premium Term Plan',
            'amount' => '₹2 Cr',
            'desc' => 'For high-income earners with significant liabilities.',
            'whatsapp_message' => 'Hi, I\'m interested in the Premium Term Plan (₹2 Cr cover).',
            'features' => [
                'Accidental death benefit',
                'Income payout option',
                'Return of premium add-on',
            ],
        ],
        [
            'badge' => 'Combo',
            'badge_class' => 'combo',
            'title' => 'Term + Health Combo',
            'amount' => '₹50 L + ₹10 L',
            'desc' => 'Bundled life and health cover for complete protection.',
            'whatsapp_message' => 'Hi, I\'m interested in the Term + Health Combo (₹50 L life + ₹10 L health cover).',
            'features' => [
                'Single premium payment',
                'Family floater health included',
                'Waiver of premium on disability',
            ],
        ],
    ];
@endphp
<link rel="stylesheet" href="{{ public_asset('css/term-insurance-plans.css') }}">

<section class="term-plans" aria-labelledby="term-plans-heading">
    <div class="term-plans__intro">
        <div class="term-plans__intro-text">
            <div class="term-plans__intro-title">
                <span class="term-plans__shield" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </span>
                <h3>Term Insurance</h3>
            </div>
            <p>Pure life cover at low premiums. Protect your family's income for decades. Use our <a href="{{ url('/term-insurance-calculator') }}">Term Insurance Calculator</a> to find your exact requirement.</p>
        </div>
        <a class="term-plans__btn" href="{{ $whatsappUrl('Hi, I would like to know more about term insurance plans.') }}" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            Get Term Plan
        </a>
    </div>

    <h2 class="term-plans__heading" id="term-plans-heading">Recommended Term Plans</h2>

    <div class="term-plans__grid">
        @foreach ($plans as $plan)
            <article class="term-plans__card">
                <span class="term-plans__badge term-plans__badge--{{ $plan['badge_class'] }}">{{ $plan['badge'] }}</span>
                <h3 class="term-plans__card-title">{{ $plan['title'] }}</h3>
                <p class="term-plans__amount">{{ $plan['amount'] }}</p>
                <p class="term-plans__desc">{{ $plan['desc'] }}</p>
                <ul class="term-plans__features">
                    @foreach ($plan['features'] as $feature)
                        <li>
                            <span class="term-plans__check" aria-hidden="true">&#10003;</span>
                            {{ $feature }}
                        </li>
                    @endforeach
                </ul>
                <a class="term-plans__btn" href="{{ $whatsappUrl($plan['whatsapp_message']) }}" target="_blank" rel="noopener noreferrer">Get This Plan</a>
            </article>
        @endforeach
    </div>

    <div class="term-plans__trust">
        <span><span class="term-plans__check" aria-hidden="true">&#10003;</span> IRDAI compliant partners</span>
        <span><span class="term-plans__check" aria-hidden="true">&#10003;</span> Claim support included</span>
        <span><span class="term-plans__check" aria-hidden="true">&#10003;</span> No spam guarantee</span>
    </div>

    <div class="term-plans__cta-wrap">
        <a class="term-plans__btn term-plans__btn--main" href="{{ $whatsappUrl('Hi, I\'d like to get a term insurance plan. Please help me choose the right cover.') }}" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
            </svg>
            Get Your Plan Now in 30 Seconds
        </a>
    </div>

    <div id="hlv-calculator" aria-hidden="true"></div>
</section>
