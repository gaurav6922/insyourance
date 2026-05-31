<style>
    .home-footer {
        background: #1351D8;
        color: rgba(255, 255, 255, 0.85);
        padding: 64px 24px 36px;
        border-radius: 24px 24px 0 0;
    }
    .home-footer__inner {
        max-width: 1100px;
        margin: 0 auto;
    }
    .home-footer__grid {
        display: grid;
        grid-template-columns: 1.35fr 1fr 1fr 1fr;
        gap: 40px;
        align-items: start;
    }
    .home-footer__logo {
        display: inline-block;
        margin-bottom: 20px;
    }
    .home-footer__logo img {
        height: 44px;
        width: auto;
        display: block;
    }
    .home-footer__newsletter-text {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.9375rem;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.8);
        margin: 0 0 16px;
    }
    .home-footer__form .mc4wp-form-fields {
        display: flex;
        align-items: stretch;
        margin: 0;
    }
    .home-footer__form .mc4wp-form-fields p {
        margin: 0;
    }
    .home-footer__form .mc4wp-form-fields p:first-child {
        flex: 1;
    }
    .home-footer__form input[type="email"] {
        width: 100%;
        font-family: 'DM Sans', sans-serif;
        font-size: 0.875rem;
        color: #212121;
        background: #fff;
        border: none;
        border-radius: 999px 0 0 999px;
        padding: 14px 20px;
        outline: none;
        box-sizing: border-box;
    }
    .home-footer__form input[type="email"]::placeholder {
        color: #999;
    }
    .home-footer__form button[type="submit"] {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        background: #fff;
        border: none;
        border-radius: 0 999px 999px 0;
        color: #1351D8;
        cursor: pointer;
        font-size: 1rem;
        transition: background 0.2s, color 0.2s;
    }
    .home-footer__form button[type="submit"]:hover {
        background: #f0f4ff;
    }
    .home-footer__copyright {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.8125rem;
        line-height: 1.5;
        color: rgba(255, 255, 255, 0.55);
        margin: 28px 0 0;
    }
    .home-footer__copyright a {
        color: #fff;
        text-decoration: underline;
        text-underline-offset: 2px;
    }
    .home-footer__col {
        padding-left: 32px;
        border-left: 1px solid rgba(255, 255, 255, 0.15);
    }
    .home-footer__heading {
        font-family: 'Sora', sans-serif;
        font-size: 1.0625rem;
        font-weight: 600;
        color: #fff;
        margin: 0 0 20px;
        line-height: 1.2;
    }
    .home-footer__links {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .home-footer__links li {
        margin-bottom: 12px;
    }
    .home-footer__links li:last-child {
        margin-bottom: 0;
    }
    .home-footer__links a {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.9375rem;
        color: rgba(255, 255, 255, 0.75);
        text-decoration: none;
        transition: color 0.2s;
    }
    .home-footer__links a:hover {
        color: #fff;
    }
    .home-footer__connect-text {
        font-family: 'DM Sans', sans-serif;
        font-size: 0.9375rem;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.75);
        margin: 0 0 20px;
    }
    .home-footer__social {
        display: flex;
        gap: 10px;
    }
    .home-footer__social a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        color: #fff;
        font-size: 1rem;
        text-decoration: none;
        transition: background 0.2s, border-color 0.2s;
    }
    .home-footer__social a:hover {
        background: rgba(255, 255, 255, 0.12);
        border-color: rgba(255, 255, 255, 0.5);
    }
    @media (max-width: 991px) {
        .home-footer__grid {
            grid-template-columns: 1fr 1fr;
            gap: 36px 32px;
        }
        .home-footer__brand {
            grid-column: 1 / -1;
        }
        .home-footer__col {
            padding-left: 0;
            border-left: none;
        }
    }
    @media (max-width: 575px) {
        .home-footer {
            padding: 48px 20px 28px;
            border-radius: 16px 16px 0 0;
        }
        .home-footer__grid {
            grid-template-columns: 1fr;
            gap: 32px;
        }
    }
</style>

<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" class="home-footer" role="contentinfo">
    <div class="home-footer__inner">
        <div class="home-footer__grid">
            <div class="home-footer__brand">
                <a href="/" class="home-footer__logo">
                    <img src="{{ asset('images/whitelogo.png') }}" alt="Witan Finsure" loading="lazy" decoding="async">
                </a>
                <p class="home-footer__newsletter-text">Subscribe to our newsletter for the latest news and updates.</p>
                <div class="home-footer__form">
                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-521" method="post" data-id="521" data-name="">
                        <div class="mc4wp-form-fields">
                            <p>
                                <input type="email" name="EMAIL" placeholder="Your email address" required>
                            </p>
                            <p>
                                <button type="submit" aria-label="Subscribe">
                                    <i class="insul-icon-mail-plane" aria-hidden="true"></i>
                                </button>
                            </p>
                        </div>
                        <label style="display: none !important;">
                            Leave this field empty if you're human:
                            <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
                        </label>
                        <input type="hidden" name="_mc4wp_timestamp" value="1766778524">
                        <input type="hidden" name="_mc4wp_form_id" value="521">
                        <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                        <div class="mc4wp-response"></div>
                    </form>
                </div>
                <p class="home-footer__copyright">Copyright &copy; 2026 Witan Finsure. Developed by <a href="https://www.flipswitch.in" target="_blank" rel="noopener">FlipSwitch</a>. All rights reserved.</p>
            </div>
            <div class="home-footer__col">
                <h2 class="home-footer__heading">Contact Info</h2>
                <ul class="home-footer__links">
                    <li><a href="{{ url('/contact-01') }}">Contact us</a></li>
                    <li><a href="{{ url('/about-us') }}">About us</a></li>
                    <li><a href="{{ url('/our-team') }}">Our team</a></li>
                    <li><a href="{{ url('/testimonial') }}">Testimonials</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/faqs-page') }}">FAQs</a></li>
                </ul>
            </div>
            <div class="home-footer__col">
                <h2 class="home-footer__heading">Useful Links</h2>
                <ul class="home-footer__links">
                    <li><a href="{{ url('/services/general-insurance') }}">General Insurance</a></li>
                    <li><a href="{{ url('/services/life-insurance') }}">Life Insurance</a></li>
                    <li><a href="{{ url('/services/mutual-funds') }}">Mutual Funds</a></li>
                    <li><a href="{{ url('/sip-planner') }}">SIP Planner</a></li>
                    <li><a href="{{ url('/swp-calculator') }}">SWP Calculator</a></li>
                    <li><a href="{{ url('/sip-delay-cost-calculator') }}">SIP Delay Calculator</a></li>
                </ul>
            </div>
            <div class="home-footer__col">
                <h2 class="home-footer__heading">Connect</h2>
                <p class="home-footer__connect-text">Follow us for updates on insurance, investments, and financial planning tips.</p>
                <div class="home-footer__social">
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" rel="noopener" aria-label="X (Twitter)">
                        <i class="fab fa-x-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
