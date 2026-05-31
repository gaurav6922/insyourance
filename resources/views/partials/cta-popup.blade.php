@php
    $formspreeId = config('services.formspree.form_id');
@endphp
<link rel="stylesheet" href="{{ public_asset('css/cta-popup.css') }}">

<div
    id="cta-popup"
    class="cta-popup"
    role="dialog"
    aria-modal="true"
    aria-labelledby="cta-popup-title"
    aria-hidden="true"
>
    <div class="cta-popup__overlay" data-cta-close></div>
    <div class="cta-popup__panel">
        <button type="button" class="cta-popup__close" aria-label="Close" data-cta-close>&times;</button>

        <div class="cta-popup__content">
            <p class="cta-popup__eyebrow">Free consultation</p>
            <h2 id="cta-popup-title" class="cta-popup__title">Ready to plan your financial future?</h2>
            <p class="cta-popup__text">
                Share your details and our advisors will reach out with guidance tailored to your goals.
            </p>

            @if ($formspreeId)
                <form
                    id="cta-popup-form"
                    class="cta-popup__form"
                    action="https://formspree.io/f/{{ $formspreeId }}"
                    method="POST"
                >
                    <input type="hidden" name="_subject" value="CTA Popup – Free Consultation Request">
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

<script src="{{ public_asset('js/cta-popup.js') }}" defer></script>
