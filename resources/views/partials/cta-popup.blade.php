@php
    $formspreeId = config('services.formspree.form_id');
    $ctaConfig = config('cta-popups');
    if (! is_array($ctaConfig) || $ctaConfig === []) {
        $ctaConfigPath = config_path('cta-popups.php');
        $ctaConfig = is_file($ctaConfigPath) ? require $ctaConfigPath : [];
    }
    $smallVariants = $ctaConfig['small_variants'] ?? [];
    $bigVariants = $ctaConfig['big_variants'] ?? [];
    $waNumber = $ctaConfig['whatsapp']['number'] ?? '919711043285';
    $waDefault = $ctaConfig['whatsapp']['default_message'] ?? 'Hi, I would like to know more about your insurance services.';
    $popupData = [
        'smallVariants' => $smallVariants,
        'bigVariants' => $bigVariants,
        'whatsapp' => ['number' => $waNumber, 'default' => $waDefault],
        'scheduler' => [
            'initial' => $ctaConfig['initial_delay_ms'] ?? 0,
            'intervalMin' => $ctaConfig['interval_min_ms'] ?? 20000,
            'intervalMax' => $ctaConfig['interval_max_ms'] ?? 45000,
        ],
    ];
@endphp
<link rel="stylesheet" href="{{ public_asset('css/cta-popup.css') }}">

<script type="application/json" id="cta-popup-data">{!! json_encode($popupData, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT) !!}</script>

<div
    id="cta-popup-small"
    class="cta-popup cta-popup--small"
    role="dialog"
    aria-modal="false"
    aria-labelledby="cta-popup-small-title"
    aria-hidden="true"
>
    <div class="cta-popup__panel cta-popup__panel--small">
        <button type="button" class="cta-popup__close" aria-label="Close" data-cta-close>&times;</button>
        <p class="cta-popup__fomo" id="cta-popup-small-fomo" hidden></p>
        <h3 id="cta-popup-small-title" class="cta-popup__title cta-popup__title--small">Chat with us on WhatsApp</h3>
        <p class="cta-popup__text cta-popup__text--small" id="cta-popup-small-text"></p>
        <div class="cta-popup__actions cta-popup__actions--small">
            <a
                href="#"
                id="cta-popup-small-wa"
                class="cta-popup__btn cta-popup__btn--whatsapp"
                target="_blank"
                rel="noopener noreferrer"
            >Chat on WhatsApp</a>
            <button type="button" class="cta-popup__btn cta-popup__btn--ghost cta-popup__btn--compact" data-cta-close>Not now</button>
        </div>
    </div>
</div>

<div
    id="cta-popup-big"
    class="cta-popup cta-popup--big"
    role="dialog"
    aria-modal="true"
    aria-labelledby="cta-popup-big-title"
    aria-hidden="true"
>
    <div class="cta-popup__overlay" data-cta-close></div>
    <div class="cta-popup__panel cta-popup__panel--big">
        <button type="button" class="cta-popup__close" aria-label="Close" data-cta-close>&times;</button>

        <div class="cta-popup__content" id="cta-popup-big-content">
            <p class="cta-popup__fomo" id="cta-popup-big-fomo" hidden></p>
            <p class="cta-popup__eyebrow" id="cta-popup-big-eyebrow">Free consultation</p>
            <h2 id="cta-popup-big-title" class="cta-popup__title">Ready to plan your financial future?</h2>
            <p class="cta-popup__text" id="cta-popup-big-text">
                Share your details and our advisors will reach out with guidance tailored to your goals.
            </p>

            @if ($formspreeId)
                <form
                    id="cta-popup-form"
                    class="cta-popup__form"
                    action="https://formspree.io/f/{{ $formspreeId }}"
                    method="POST"
                >
                    <input type="hidden" name="_subject" id="cta-popup-subject" value="CTA Popup – Lead Request">
                    <input type="hidden" name="popup_variant" id="cta-popup-variant" value="">
                    <input type="text" name="_gotcha" class="cta-popup__honeypot" tabindex="-1" autocomplete="off">

                    <div class="cta-popup__field">
                        <label class="cta-popup__label" for="cta-popup-name">Name</label>
                        <input
                            id="cta-popup-name"
                            class="cta-popup__input"
                            type="text"
                            name="name"
                            placeholder="Your name"
                            required
                            autocomplete="name"
                        >
                    </div>

                    <div class="cta-popup__field">
                        <label class="cta-popup__label" for="cta-popup-phone">Phone</label>
                        <input
                            id="cta-popup-phone"
                            class="cta-popup__input"
                            type="tel"
                            name="phone"
                            placeholder="Your phone number"
                            required
                            autocomplete="tel"
                        >
                    </div>

                    <div class="cta-popup__field">
                        <label class="cta-popup__label" for="cta-popup-email">Email</label>
                        <input
                            id="cta-popup-email"
                            class="cta-popup__input"
                            type="email"
                            name="email"
                            placeholder="Your email address"
                            required
                            autocomplete="email"
                        >
                    </div>

                    <div class="cta-popup__field">
                        <label class="cta-popup__label" for="cta-popup-message">Message <span>(optional)</span></label>
                        <textarea
                            id="cta-popup-message"
                            class="cta-popup__textarea"
                            name="message"
                            rows="3"
                            placeholder="What would you like help with?"
                        ></textarea>
                    </div>

                    <p class="cta-popup__status" id="cta-popup-status" role="status" aria-live="polite" hidden></p>

                    <div class="cta-popup__actions">
                        <button type="submit" class="cta-popup__btn cta-popup__btn--primary" id="cta-popup-submit">
                            Request Callback
                        </button>
                        <button type="button" class="cta-popup__btn cta-popup__btn--ghost" data-cta-close>Maybe later</button>
                    </div>
                </form>
            @else
                <p class="cta-popup__notice">
                    Form is not configured yet. Add <code>FORMSPREE_FORM_ID</code> to your <code>.env</code> file.
                </p>
                <div class="cta-popup__actions">
                    <a href="{{ url('/contact-01') }}" class="cta-popup__btn cta-popup__btn--primary">Contact Us</a>
                    <button type="button" class="cta-popup__btn cta-popup__btn--ghost" data-cta-close>Maybe later</button>
                </div>
            @endif
        </div>

        <div class="cta-popup__success" id="cta-popup-success" hidden>
            <div class="cta-popup__success-icon" aria-hidden="true">&#10003;</div>
            <h2 class="cta-popup__title">Thank you!</h2>
            <p class="cta-popup__text">We received your request and will get back to you shortly.</p>
            <button type="button" class="cta-popup__btn cta-popup__btn--primary" data-cta-close>Close</button>
        </div>
    </div>
</div>

<div
    id="cta-popup-scheduler"
    hidden
    data-cta-initial-delay="{{ $ctaConfig['initial_delay_ms'] ?? 0 }}"
    data-cta-interval-min="{{ $ctaConfig['interval_min_ms'] ?? 20000 }}"
    data-cta-interval-max="{{ $ctaConfig['interval_max_ms'] ?? 45000 }}"
></div>

<script src="{{ public_asset('js/cta-popup.js') }}" defer></script>
