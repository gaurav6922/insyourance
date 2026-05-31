<!doctype html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="profile" href="//gmpg.org/xfn/11">
    <title>Witan Finsure</title>
    <link rel="icon" type="image/png" href="{{ asset('images/witantitle.png') }}">
    <meta name='robots' content='max-image-preview:large' />
    <style>
    img:is([sizes="auto" i], [sizes^="auto," i]) {
        contain-intrinsic-size: 3000px 1500px
    }
    </style>
	    <style>
	        /* Hide search function on mobile devices */
	        @media screen and (max-width: 1024px) {
	            .elementor-element[data-id="e4a16ef"],
	            .elementor-widget-insul-search,
	            .site-header-search,
	            .button-search-popup,
	            .site-search-popup,
	            .site-search-popup-overlay {
	                display: none !important;
	            }
	        }
	    </style>
	    <style>
	        /* Minimal home hero */
	        .home-hero-minimal {
	            position: relative;
	            background: url('{{ public_asset('images/home/bg-sl1-min-scaled.jpeg') }}') center center / cover no-repeat;
	            padding: 180px 24px 80px;
	            text-align: center;
	            overflow: hidden;
	        }
	        .home-hero-minimal::before {
	            content: '';
	            position: absolute;
	            inset: 0;
	            background: rgba(255, 255, 255, 0.85);
	            z-index: 0;
	        }
	        .home-hero-minimal::after {
	            content: '';
	            position: absolute;
	            inset: 0;
	            background:
	                radial-gradient(ellipse at 15% 25%, rgba(156, 235, 252, 0.25) 0%, transparent 70%),
	                radial-gradient(ellipse at 85% 15%, rgba(255, 144, 244, 0.35) 0%, transparent 55%),
	                radial-gradient(ellipse at 25% 85%, rgba(69, 38, 255, 0.2) 0%, transparent 70%);
	            z-index: 0;
	        }
	        .home-hero-minimal__inner {
	            position: relative;
	            z-index: 1;
	            max-width: 720px;
	            margin: 0 auto;
	        }
	        .home-hero-minimal__title {
	            font-family: 'Sora', sans-serif;
	            font-size: clamp(2.25rem, 5vw, 3.75rem);
	            font-weight: 600;
	            line-height: 1.15;
	            color: #212121;
	            margin: 0 0 24px;
	            letter-spacing: -0.02em;
	        }
	        .home-hero-minimal__subtitle {
	            font-family: 'DM Sans', sans-serif;
	            font-size: clamp(1rem, 2vw, 1.25rem);
	            line-height: 1.65;
	            color: #444;
	            margin: 0 auto 40px;
	            max-width: 580px;
	        }
	        .home-hero-minimal__actions {
	            display: flex;
	            flex-wrap: wrap;
	            align-items: center;
	            justify-content: center;
	            gap: 16px;
	            margin-bottom: 36px;
	        }
	        .home-hero-minimal__btn {
	            display: inline-flex;
	            align-items: center;
	            justify-content: center;
	            gap: 8px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 14px;
	            font-weight: 700;
	            letter-spacing: 0.05em;
	            text-transform: uppercase;
	            text-decoration: none;
	            border-radius: 30px;
	            padding: 16px 32px;
	            transition: background-color 0.2s, color 0.2s, border-color 0.2s;
	        }
	        .home-hero-minimal__btn--primary {
	            background-color: #1351D8;
	            color: #fff;
	            border: 2px solid #1351D8;
	        }
	        .home-hero-minimal__btn--primary:hover {
	            background-color: #0f42b0;
	            border-color: #0f42b0;
	            color: #fff;
	        }
	        .home-hero-minimal__btn--secondary {
	            background-color: transparent;
	            color: #1351D8;
	            border: 2px solid #1351D8;
	        }
	        .home-hero-minimal__btn--secondary:hover {
	            background-color: #1351D8;
	            color: #fff;
	        }
	        .home-hero-minimal__proof {
	            display: inline-flex;
	            align-items: center;
	            gap: 12px;
	        }
	        .home-hero-minimal__proof img {
	            height: 40px;
	            width: auto;
	        }
	        .home-hero-minimal__proof span {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 15px;
	            font-weight: 500;
	            color: #212121;
	        }
	        @media (max-width: 767px) {
	            .home-hero-minimal {
	                padding: 130px 20px 56px;
	            }
	            .home-hero-minimal__actions {
	                flex-direction: column;
	                width: 100%;
	            }
	            .home-hero-minimal__btn {
	                width: 100%;
	                max-width: 280px;
	            }
	        }
	    </style>
	    <style>
	        /* Home services section */
	        .home-services {
	            position: relative;
	            padding: 80px 24px 100px;
	            background: #fff;
	            overflow: hidden;
	        }
	        .home-services::before {
	            content: '';
	            position: absolute;
	            top: -120px;
	            right: -80px;
	            width: 420px;
	            height: 420px;
	            background: radial-gradient(circle, rgba(156, 235, 252, 0.35) 0%, transparent 70%);
	            pointer-events: none;
	        }
	        .home-services__inner {
	            position: relative;
	            z-index: 1;
	            max-width: 1100px;
	            margin: 0 auto;
	        }
	        .home-services__header {
	            margin-bottom: 48px;
	            max-width: 720px;
	        }
	        .home-services__eyebrow {
	            display: inline-flex;
	            align-items: center;
	            gap: 8px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 13px;
	            font-weight: 700;
	            letter-spacing: 0.12em;
	            text-transform: uppercase;
	            color: #1351D8;
	            margin: 0 0 16px;
	        }
	        .home-services__eyebrow::before {
	            content: '';
	            width: 6px;
	            height: 6px;
	            border-radius: 50%;
	            background: #1351D8;
	        }
	        .home-services__title {
	            font-family: 'Sora', sans-serif;
	            font-size: clamp(1.75rem, 4vw, 2.75rem);
	            font-weight: 600;
	            line-height: 1.2;
	            color: #212121;
	            margin: 0;
	            letter-spacing: -0.02em;
	        }
	        .home-services__highlight {
	            position: relative;
	            display: inline;
	        }
	        .home-services__highlight::after {
	            content: '';
	            position: absolute;
	            left: 0;
	            right: 0;
	            bottom: 2px;
	            height: 10px;
	            background: linear-gradient(90deg, rgba(19, 81, 216, 0.25), rgba(19, 81, 216, 0.5));
	            border-radius: 4px;
	            z-index: -1;
	        }
	        .home-services__grid {
	            display: grid;
	            grid-template-columns: repeat(3, 1fr);
	            gap: 24px;
	            list-style: none;
	            margin: 0;
	            padding: 0;
	        }
	        .home-services__box {
	            display: flex;
	            flex-direction: column;
	            min-height: 320px;
	            padding: 32px 28px 28px;
	            border: 1px solid #e8e8e8;
	            border-radius: 16px;
	            background: #fff;
	            text-decoration: none;
	            color: inherit;
	            transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
	        }
	        .home-services__box:hover {
	            border-color: #1351D8;
	            box-shadow: 0 12px 40px rgba(19, 81, 216, 0.12);
	            transform: translateY(-4px);
	        }
	        .home-services__num {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 0.875rem;
	            font-weight: 700;
	            letter-spacing: 0.08em;
	            color: #1351D8;
	            margin: 0 0 20px;
	        }
	        .home-services__name {
	            font-family: 'Sora', sans-serif;
	            font-size: 1.375rem;
	            font-weight: 600;
	            line-height: 1.3;
	            color: #212121;
	            margin: 0 0 16px;
	        }
	        .home-services__desc {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 0.9375rem;
	            line-height: 1.65;
	            color: #666;
	            margin: 0;
	            flex: 1;
	        }
	        .home-services__footer {
	            display: flex;
	            align-items: center;
	            justify-content: space-between;
	            margin-top: 28px;
	            padding-top: 24px;
	            border-top: 1px solid #eee;
	        }
	        .home-services__cta-text {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 14px;
	            font-weight: 700;
	            letter-spacing: 0.04em;
	            text-transform: uppercase;
	            color: #1351D8;
	        }
	        .home-services__icon {
	            display: inline-flex;
	            align-items: center;
	            justify-content: center;
	            width: 44px;
	            height: 44px;
	            border-radius: 999px;
	            background: #1351D8;
	            color: #fff;
	            transition: transform 0.2s;
	        }
	        .home-services__box:hover .home-services__icon {
	            transform: translate(2px, -2px);
	        }
	        .home-services__icon svg {
	            width: 18px;
	            height: 18px;
	        }
	        @media (max-width: 991px) {
	            .home-services__grid {
	                grid-template-columns: 1fr;
	                gap: 20px;
	            }
	            .home-services__box {
	                min-height: 0;
	            }
	        }
	        @media (max-width: 767px) {
	            .home-services {
	                padding: 56px 20px 72px;
	            }
	            .home-services__header {
	                margin-bottom: 32px;
	            }
	        }
	    </style>
	    <style>
	        /* Home about / who we are */
	        .home-about {
	            padding: 80px 24px 100px;
	            background: #fff;
	        }
	        .home-about__inner {
	            max-width: 1100px;
	            margin: 0 auto;
	        }
	        .home-about__top {
	            display: grid;
	            grid-template-columns: 1fr 1fr;
	            gap: 48px 64px;
	            align-items: start;
	            margin-bottom: 64px;
	        }
	        .home-about__eyebrow {
	            display: inline-flex;
	            align-items: center;
	            gap: 8px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 13px;
	            font-weight: 700;
	            letter-spacing: 0.12em;
	            text-transform: uppercase;
	            color: #1351D8;
	            margin: 0 0 16px;
	        }
	        .home-about__eyebrow::before {
	            content: '';
	            width: 6px;
	            height: 6px;
	            border-radius: 50%;
	            background: #1351D8;
	        }
	        .home-about__title {
	            font-family: 'Sora', sans-serif;
	            font-size: clamp(1.75rem, 4vw, 2.75rem);
	            font-weight: 600;
	            line-height: 1.2;
	            color: #212121;
	            margin: 0;
	            letter-spacing: -0.02em;
	        }
	        .home-about__highlight {
	            position: relative;
	            display: inline;
	        }
	        .home-about__highlight::after {
	            content: '';
	            position: absolute;
	            left: 0;
	            right: 0;
	            bottom: 2px;
	            height: 10px;
	            background: linear-gradient(90deg, rgba(19, 81, 216, 0.25), rgba(19, 81, 216, 0.5));
	            border-radius: 4px;
	            z-index: -1;
	        }
	        .home-about__intro {
	            display: flex;
	            flex-direction: column;
	            justify-content: center;
	            gap: 24px;
	            padding-top: 32px;
	        }
	        .home-about__intro p {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 1.0625rem;
	            line-height: 1.7;
	            color: #666;
	            margin: 0;
	        }
	        .home-about__link {
	            display: inline-flex;
	            align-items: center;
	            gap: 8px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 14px;
	            font-weight: 700;
	            letter-spacing: 0.04em;
	            text-transform: uppercase;
	            color: #1351D8;
	            text-decoration: none;
	            transition: gap 0.2s;
	        }
	        .home-about__link:hover {
	            gap: 12px;
	        }
	        .home-about__link svg {
	            width: 16px;
	            height: 16px;
	        }
	        .home-about__stats {
	            display: grid;
	            grid-template-columns: repeat(3, 1fr);
	            gap: 0;
	            border-top: 1px solid #eee;
	        }
	        .home-about__stat {
	            padding: 40px 32px 0 0;
	        }
	        .home-about__stat + .home-about__stat {
	            padding-left: 32px;
	            border-left: 1px solid #eee;
	        }
	        .home-about__stat-label {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 13px;
	            font-weight: 700;
	            letter-spacing: 0.06em;
	            text-transform: uppercase;
	            color: #212121;
	            margin: 0 0 12px;
	        }
	        .home-about__stat-value {
	            font-family: 'Sora', sans-serif;
	            font-size: clamp(2rem, 4vw, 2.75rem);
	            font-weight: 600;
	            line-height: 1;
	            color: #1351D8;
	            margin: 0 0 16px;
	            letter-spacing: -0.02em;
	        }
	        .home-about__stat-desc {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 0.9375rem;
	            line-height: 1.65;
	            color: #666;
	            margin: 0;
	        }
	        @media (max-width: 991px) {
	            .home-about__top {
	                grid-template-columns: 1fr;
	                gap: 24px;
	                margin-bottom: 48px;
	            }
	            .home-about__intro {
	                padding-top: 0;
	            }
	            .home-about__stats {
	                grid-template-columns: 1fr;
	                gap: 32px;
	            }
	            .home-about__stat {
	                padding: 32px 0 0;
	                border-top: 1px solid #eee;
	            }
	            .home-about__stat:first-child {
	                border-top: none;
	                padding-top: 0;
	            }
	            .home-about__stat + .home-about__stat {
	                padding-left: 0;
	                border-left: none;
	            }
	        }
	        @media (max-width: 767px) {
	            .home-about {
	                padding: 56px 20px 72px;
	            }
	        }
	    </style>
	    <style>
	        /* Home expert guidance */
	        .home-guidance {
	            padding: 80px 24px 100px;
	            background: #fafafa;
	        }
	        .home-guidance__inner {
	            max-width: 1100px;
	            margin: 0 auto;
	            display: grid;
	            grid-template-columns: 1fr 1fr;
	            gap: 64px;
	            align-items: center;
	        }
	        .home-guidance__eyebrow {
	            display: inline-flex;
	            align-items: center;
	            gap: 8px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 13px;
	            font-weight: 700;
	            letter-spacing: 0.12em;
	            text-transform: uppercase;
	            color: #1351D8;
	            margin: 0 0 16px;
	        }
	        .home-guidance__eyebrow::before {
	            content: '';
	            width: 6px;
	            height: 6px;
	            border-radius: 50%;
	            background: #1351D8;
	        }
	        .home-guidance__title {
	            font-family: 'Sora', sans-serif;
	            font-size: clamp(1.75rem, 4vw, 2.75rem);
	            font-weight: 600;
	            line-height: 1.2;
	            color: #212121;
	            margin: 0 0 24px;
	            letter-spacing: -0.02em;
	        }
	        .home-guidance__highlight {
	            position: relative;
	            display: inline;
	        }
	        .home-guidance__highlight::after {
	            content: '';
	            position: absolute;
	            left: 0;
	            right: 0;
	            bottom: 2px;
	            height: 10px;
	            background: linear-gradient(90deg, rgba(19, 81, 216, 0.25), rgba(19, 81, 216, 0.5));
	            border-radius: 4px;
	            z-index: -1;
	        }
	        .home-guidance__text {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 1.0625rem;
	            line-height: 1.7;
	            color: #666;
	            margin: 0 0 32px;
	        }
	        .home-guidance__btn {
	            display: inline-flex;
	            align-items: center;
	            justify-content: center;
	            gap: 8px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 14px;
	            font-weight: 700;
	            letter-spacing: 0.05em;
	            text-transform: uppercase;
	            text-decoration: none;
	            border-radius: 30px;
	            padding: 16px 32px;
	            background-color: #1351D8;
	            color: #fff;
	            border: 2px solid #1351D8;
	            transition: background-color 0.2s, border-color 0.2s;
	        }
	        .home-guidance__btn:hover {
	            background-color: #0f42b0;
	            border-color: #0f42b0;
	            color: #fff;
	        }
	        .home-guidance__btn svg {
	            width: 16px;
	            height: 16px;
	        }
	        .home-guidance__visual {
	            display: flex;
	            flex-direction: column;
	            gap: 24px;
	        }
	        .home-guidance__image-wrap {
	            position: relative;
	            border-radius: 16px;
	            overflow: hidden;
	            aspect-ratio: 4 / 3;
	        }
	        .home-guidance__image-wrap img {
	            width: 100%;
	            height: 100%;
	            object-fit: cover;
	            display: block;
	        }
	        .home-guidance__points {
	            list-style: none;
	            margin: 0;
	            padding: 0;
	            display: flex;
	            flex-direction: column;
	            gap: 12px;
	        }
	        .home-guidance__point {
	            display: flex;
	            align-items: flex-start;
	            gap: 12px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 0.9375rem;
	            line-height: 1.5;
	            color: #444;
	            padding: 14px 16px;
	            background: #fff;
	            border: 1px solid #eee;
	            border-radius: 10px;
	        }
	        .home-guidance__point-icon {
	            flex-shrink: 0;
	            display: inline-flex;
	            align-items: center;
	            justify-content: center;
	            width: 22px;
	            height: 22px;
	            border-radius: 50%;
	            background: #1351D8;
	            color: #fff;
	            margin-top: 1px;
	        }
	        .home-guidance__point-icon svg {
	            width: 12px;
	            height: 12px;
	        }
	        @media (max-width: 991px) {
	            .home-guidance__inner {
	                grid-template-columns: 1fr;
	                gap: 40px;
	            }
	            .home-guidance__visual {
	                order: -1;
	            }
	        }
	        @media (max-width: 767px) {
	            .home-guidance {
	                padding: 56px 20px 72px;
	            }
	        }
	    </style>
	    <style>
	        /* Home why choose us */
	        .home-why {
	            position: relative;
	            padding: 80px 24px 100px;
	            background: #fff;
	            overflow: hidden;
	        }
	        .home-why::before {
	            content: '';
	            position: absolute;
	            top: -120px;
	            right: -80px;
	            width: 420px;
	            height: 420px;
	            background: radial-gradient(circle, rgba(156, 235, 252, 0.35) 0%, transparent 70%);
	            pointer-events: none;
	        }
	        .home-why__inner {
	            position: relative;
	            z-index: 1;
	            max-width: 1100px;
	            margin: 0 auto;
	        }
	        .home-why__header {
	            max-width: 720px;
	            margin-bottom: 48px;
	        }
	        .home-why__eyebrow {
	            display: inline-flex;
	            align-items: center;
	            gap: 8px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 13px;
	            font-weight: 700;
	            letter-spacing: 0.12em;
	            text-transform: uppercase;
	            color: #1351D8;
	            margin: 0 0 16px;
	        }
	        .home-why__eyebrow::before {
	            content: '';
	            width: 6px;
	            height: 6px;
	            border-radius: 50%;
	            background: #1351D8;
	        }
	        .home-why__title {
	            font-family: 'Sora', sans-serif;
	            font-size: clamp(1.75rem, 4vw, 2.75rem);
	            font-weight: 600;
	            line-height: 1.2;
	            color: #212121;
	            margin: 0 0 20px;
	            letter-spacing: -0.02em;
	        }
	        .home-why__highlight {
	            position: relative;
	            display: inline;
	        }
	        .home-why__highlight::after {
	            content: '';
	            position: absolute;
	            left: 0;
	            right: 0;
	            bottom: 2px;
	            height: 10px;
	            background: linear-gradient(90deg, rgba(19, 81, 216, 0.25), rgba(19, 81, 216, 0.5));
	            border-radius: 4px;
	            z-index: -1;
	        }
	        .home-why__intro {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 1.0625rem;
	            line-height: 1.7;
	            color: #666;
	            margin: 0;
	        }
	        .home-why__pillars {
	            display: grid;
	            grid-template-columns: repeat(4, 1fr);
	            gap: 20px;
	            list-style: none;
	            margin: 0 0 48px;
	            padding: 0;
	        }
	        .home-why__pillar {
	            display: flex;
	            flex-direction: column;
	            gap: 14px;
	            padding: 24px 20px;
	            background: #fff;
	            border: 1px solid #e8e8e8;
	            border-radius: 16px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 0.9375rem;
	            font-weight: 600;
	            line-height: 1.45;
	            color: #212121;
	            transition: border-color 0.2s, box-shadow 0.2s;
	        }
	        .home-why__pillar:hover {
	            border-color: #1351D8;
	            box-shadow: 0 8px 32px rgba(19, 81, 216, 0.08);
	        }
	        .home-why__pillar-icon {
	            display: inline-flex;
	            align-items: center;
	            justify-content: center;
	            width: 44px;
	            height: 44px;
	            border-radius: 999px;
	            background: #1351D8;
	            color: #fff;
	            flex-shrink: 0;
	        }
	        .home-why__pillar-icon svg {
	            width: 18px;
	            height: 18px;
	        }
	        .home-why__grid {
	            display: grid;
	            grid-template-columns: 1fr 1fr;
	            gap: 24px;
	            margin-bottom: 48px;
	        }
	        .home-why__panel {
	            padding: 32px 28px;
	            border: 1px solid #e8e8e8;
	            border-radius: 16px;
	            background: #fff;
	            transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
	        }
	        .home-why__panel:hover {
	            border-color: #1351D8;
	            box-shadow: 0 12px 40px rgba(19, 81, 216, 0.12);
	            transform: translateY(-4px);
	        }
	        .home-why__panel-head {
	            display: flex;
	            align-items: center;
	            gap: 14px;
	            margin-bottom: 24px;
	        }
	        .home-why__panel-icon {
	            display: inline-flex;
	            align-items: center;
	            justify-content: center;
	            width: 44px;
	            height: 44px;
	            border-radius: 999px;
	            background: #1351D8;
	            color: #fff;
	            flex-shrink: 0;
	        }
	        .home-why__panel-icon svg {
	            width: 18px;
	            height: 18px;
	        }
	        .home-why__panel-title {
	            font-family: 'Sora', sans-serif;
	            font-size: 1.25rem;
	            font-weight: 600;
	            color: #212121;
	            margin: 0;
	        }
	        .home-why__quote {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 1rem;
	            font-weight: 600;
	            font-style: italic;
	            line-height: 1.6;
	            color: #212121;
	            margin: 0 0 20px;
	            padding-left: 16px;
	            border-left: 3px solid #1351D8;
	        }
	        .home-why__panel p {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 0.9375rem;
	            line-height: 1.65;
	            color: #666;
	            margin: 0 0 16px;
	        }
	        .home-why__panel p:last-child {
	            margin-bottom: 0;
	        }
	        .home-why__tags {
	            display: flex;
	            flex-wrap: wrap;
	            gap: 8px;
	            list-style: none;
	            margin: 24px 0 0;
	            padding: 0;
	        }
	        .home-why__tag {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 0.75rem;
	            font-weight: 700;
	            letter-spacing: 0.06em;
	            text-transform: uppercase;
	            color: #1351D8;
	            padding: 6px 12px;
	            background: #fff;
	            border: 1px solid #e8e8e8;
	            border-radius: 6px;
	        }
	        .home-why__mv {
	            display: flex;
	            flex-direction: column;
	            gap: 24px;
	        }
	        .home-why__mv-block {
	            padding-top: 24px;
	            border-top: 1px solid #eee;
	        }
	        .home-why__mv-block:first-child {
	            padding-top: 0;
	            border-top: none;
	        }
	        .home-why__mv-heading {
	            font-family: 'Sora', sans-serif;
	            font-size: 1rem;
	            font-weight: 600;
	            color: #212121;
	            margin: 0 0 10px;
	        }
	        .home-why__mv-block p {
	            margin: 0;
	        }
	        .home-why__cta-wrap {
	            display: flex;
	            align-items: center;
	            justify-content: space-between;
	            gap: 24px;
	            padding-top: 48px;
	            border-top: 1px solid #eee;
	        }
	        .home-why__cta-text {
	            font-family: 'DM Sans', sans-serif;
	            font-size: 1rem;
	            line-height: 1.65;
	            color: #666;
	            margin: 0;
	            max-width: 560px;
	        }
	        .home-why__cta-text strong {
	            display: block;
	            font-family: 'Sora', sans-serif;
	            font-size: 1.125rem;
	            font-weight: 600;
	            color: #212121;
	            margin-bottom: 6px;
	        }
	        .home-why__btn {
	            display: inline-flex;
	            align-items: center;
	            justify-content: center;
	            gap: 8px;
	            font-family: 'DM Sans', sans-serif;
	            font-size: 14px;
	            font-weight: 700;
	            letter-spacing: 0.05em;
	            text-transform: uppercase;
	            text-decoration: none;
	            border-radius: 30px;
	            padding: 16px 32px;
	            background-color: #1351D8;
	            color: #fff;
	            border: 2px solid #1351D8;
	            white-space: nowrap;
	            flex-shrink: 0;
	            transition: background-color 0.2s, border-color 0.2s;
	        }
	        .home-why__btn:hover {
	            background-color: #0f42b0;
	            border-color: #0f42b0;
	            color: #fff;
	        }
	        .home-why__btn svg {
	            width: 16px;
	            height: 16px;
	        }
	        @media (max-width: 991px) {
	            .home-why__pillars {
	                grid-template-columns: repeat(2, 1fr);
	            }
	            .home-why__grid {
	                grid-template-columns: 1fr;
	            }
	            .home-why__cta-wrap {
	                flex-direction: column;
	                align-items: flex-start;
	            }
	        }
	        @media (max-width: 767px) {
	            .home-why {
	                padding: 56px 20px 72px;
	            }
	            .home-why__header {
	                margin-bottom: 32px;
	            }
	            .home-why__pillars {
	                grid-template-columns: 1fr;
	                margin-bottom: 32px;
	            }
	        }
	    </style>
	    <style>
	        /* Home testimonial carousel — edge arrows outside full-bleed track */
	        .home-testimonials-outer {
	            display: flex;
	            align-items: center;
	            gap: 12px;
	            width: 100%;
	            padding: 0 24px;
	            box-sizing: border-box;
	        }
	        .home-testimonials-outer > .elementor-element-c449d47 {
	            flex: 1;
	            min-width: 0;
	        }
	        .home-testimonials-nav__btn {
	            flex-shrink: 0;
	            display: inline-flex;
	            align-items: center;
	            justify-content: center;
	            width: 48px;
	            height: 48px;
	            border: none;
	            border-radius: 50%;
	            background: #1351D8;
	            color: #fff;
	            box-shadow: 0 4px 20px rgba(19, 81, 216, 0.25);
	            cursor: pointer;
	            z-index: 10;
	            transition: background 0.2s ease, color 0.2s ease, box-shadow 0.2s ease;
	        }
	        .home-testimonials-nav__btn:hover {
	            background: #0f42b0;
	            color: #fff;
	            box-shadow: 0 6px 24px rgba(19, 81, 216, 0.35);
	        }
	        .home-testimonials-nav__btn i {
	            font-size: 20px;
	            line-height: 1;
	            color: inherit;
	        }
	        .elementor-element.elementor-element-a840e06,
	        .elementor-element.elementor-element-c449d47,
	        .elementor-element.elementor-element-c449d47 > .elementor-widget-container {
	            overflow: visible !important;
	        }
	        .elementor-element.elementor-element-c449d47 > .elementor-widget-container {
	            margin: 0 !important;
	        }
	        @media (max-width: 1199px) {
	            .home-testimonials-outer {
	                display: block;
	                padding: 0 20px;
	            }
	            .home-testimonials-outer > .elementor-element-c449d47 {
	                width: 100%;
	            }
	            .home-testimonials-nav__btn {
	                display: none !important;
	            }
	            .elementor-element.elementor-element-c449d47 {
	                --e-global-column-to-show: 2;
	                --grid-column-gap: 20px;
	            }
	        }
	        @media (max-width: 880px) {
	            .elementor-element.elementor-element-c449d47 {
	                --e-global-column-to-show: 1;
	                --grid-column-gap: 16px;
	            }
	        }
	        @media (max-width: 767px) {
	            .elementor-element.elementor-element-a840e06 {
	                padding-left: 15px !important;
	                padding-right: 15px !important;
	                padding-bottom: 60px !important;
	            }
	            .elementor-element.elementor-element-85e6ba9 .elementor-headline {
	                font-size: 28px !important;
	                line-height: 1.25 !important;
	                margin-bottom: 32px !important;
	            }
	            .home-testimonials-outer {
	                padding: 0 12px;
	            }
	            .elementor-element.elementor-element-c449d47 .layout-1 .inner {
	                padding: 22px 20px 28px;
	            }
	            .elementor-element.elementor-element-c449d47 .layout-1 .testimonial-caption {
	                padding-bottom: 20px;
	            }
	            .elementor-element.elementor-element-c449d47 .layout-1 .title {
	                font-size: 16px;
	                line-height: 1.4;
	            }
	            .elementor-element.elementor-element-c449d47 .layout-1 .content {
	                font-size: 15px;
	                line-height: 1.55;
	                margin-bottom: 18px;
	            }
	            .elementor-element.elementor-element-c449d47 .layout-1 .icon {
	                font-size: 32px;
	            }
	            .elementor-element.elementor-element-c449d47 .layout-1 .elementor-testimonial-image img {
	                width: 48px;
	                height: 48px;
	            }
	            .elementor-element.elementor-element-c449d47 .swiper-pagination-c449d47 {
	                margin-top: 20px;
	            }
	            .elementor-element.elementor-element-c449d47 .swiper-pagination-bullet {
	                width: 8px;
	                height: 8px;
	            }
	        }
	        @media (max-width: 480px) {
	            .elementor-element.elementor-element-85e6ba9 .elementor-headline {
	                font-size: 24px !important;
	            }
	            .elementor-element.elementor-element-c449d47 .layout-1 .inner {
	                padding: 20px 16px 24px;
	            }
	        }
	    </style>
	    <style>
        /* Home page: increase header logo size (scoped so footer logo is unchanged) */
        .site-header .hfe-site-logo-img {
            height: 83px !important;
            width: auto !important;
        }

        /* Home page: service excerpt should use full available width (avoid fixed 570px) */
        .service-layout-1 .service-content .excerpt-content {
            width: 100% !important;
            max-width: 100% !important;
            box-sizing: border-box;
        }

        /* Fix wide gaps between sections */
        .elementor-element.e-con {
            margin-bottom: 0 !important;
        }
        
        .elementor-element.e-con-boxed {
            margin-bottom: 0 !important;
        }
        
        .elementor-section {
            margin-bottom: 0 !important;
            padding-top: 40px !important;
            padding-bottom: 40px !important;
        }

        @media (max-width: 767px) {
            .site-header .hfe-site-logo-img {
                height: 62px !important;
            }
            
            .elementor-section {
                padding-top: 30px !important;
                padding-bottom: 30px !important;
            }
        }
    </style>
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <script>
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
        "svgExt": ".svg",
        "source": {
            "concatemoji": "\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1"
        }
    };
    /*! This file is auto-generated */
        !function (i, n) {
        var o,
            s,
            e;
        function c(e) {
            try {
                var t = {
                    supportTests: e,
                    timestamp: (new Date).valueOf()
                };
                sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) { }
        }
        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height),
            e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function (e, t) {
                return e === r[t]
            })
        }
        function u(e, t, n) {
            switch (t) {
            case "flag":
                return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
            case "emoji":
                return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
            }
            return !1
        }
        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {
                    willReadFrequently: !0
                }),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function (e) {
                o[e] = t(a, e, n)
            }), o
        }
        function t(e) {
            var t = i.createElement("script");
            t.src = e,
            t.defer = !0,
            i.head.appendChild(t)
        }
        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
            }, e = new Promise(function (e) {
            i.addEventListener("DOMContentLoaded", e, {
                once: !0
            })
            }), new Promise(function (t) {
                var n = function () {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests)
                        return e.supportTests
                    } catch (e) { }
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                    try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                            return void (a.onmessage = function (e) {
                            c(n = e.data),
                            a.terminate(),
                            t(n)
                        })
                        } catch (e) { }
                c(n = f(s, u, p))
            }
            t(n)
            }).then(function (e) {
            for (var t in e)
                n.supports[t] = e[t],
                n.supports.everything = n.supports.everything && n.supports[t],
                "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag,
            n.DOMReady = !1,
                    n.readyCallback = function () {
                n.DOMReady = !0
            }
            }).then(function () {
            return e
            }).then(function () {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='hfe-widgets-style-css'
        href="{{ public_asset('css/frontend.css?ver=2.0.3') }}"
        media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
    </style>
    <link rel='stylesheet' id='insul-gutenberg-blocks-css'
        href="{{ public_asset('css/gutenberg-blocks.css?ver=1.0.4') }}"
        media='all' />
    <style id='classic-theme-styles-inline-css'>
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
    </style>
    <style id='global-styles-inline-css'>
    :root {
        --wp--preset--aspect-ratio--square: 1;
        --wp--preset--aspect-ratio--4-3: 4/3;
        --wp--preset--aspect-ratio--3-4: 3/4;
        --wp--preset--aspect-ratio--3-2: 3/2;
        --wp--preset--aspect-ratio--2-3: 2/3;
        --wp--preset--aspect-ratio--16-9: 16/9;
        --wp--preset--aspect-ratio--9-16: 9/16;
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 14px;
        --wp--preset--font-size--medium: 23px;
        --wp--preset--font-size--large: 26px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--font-size--normal: 16px;
        --wp--preset--font-size--huge: 37px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }

    body .is-layout-flex {
        display: flex;
    }

    .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

        .is-layout-flex> :is(*, div) {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

        .is-layout-grid> :is(*, div) {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :root :where(.wp-block-pullquote) {
        font-size: 1.5em;
        line-height: 1.6;
    }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href="{{ public_asset('css/contact-form-7.css?ver=6.0.1') }}"
        media='all' />
    <link rel='stylesheet' id='-css'
        href="{{ public_asset('css/pavo-demo.css?ver=6.7.1') }}" media='all' />
    <link rel='stylesheet' id='hfe-style-css'
        href="{{ public_asset('css/header-footer-elementor.css?ver=2.0.3') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href="{{ public_asset('css/elementor-icons.min.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href="{{ public_asset('css/custom-frontend.min.css?ver=1733908100') }}"
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href="{{ public_asset('css/swiper.min.css?ver=8.4.5') }}"
        media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href="{{ public_asset('css/e-swiper.min.css?ver=3.25.11') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-7-css'
        href="{{ public_asset('css/post-7.css?ver=1733908100') }}"
        media='all' />
    <link rel='stylesheet' id='widget-text-path-css'
        href="{{ public_asset('css/widget-text-path.min.css?ver=3.25.11') }}"
        media='all' />
    <link rel='stylesheet' id='widget-text-editor-css'
        href="{{ public_asset('css/widget-text-editor.min.css?ver=3.25.11') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-slideInUp-css'
        href="{{ public_asset('css/slideInUp.min.css?ver=3.25.11') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-slideInRight-css'
        href="{{ public_asset('css/slideInRight.min.css?ver=3.25.11') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-slideInLeft-css'
        href="{{ public_asset('css/slideInLeft.min.css?ver=3.25.11') }}"
        media='all' />
    <link rel='stylesheet' id='widget-image-css'
        href="{{ public_asset('css/widget-image.min.css?ver=3.25.11') }}"
        media='all' />
    <link rel='stylesheet' id='widget-nested-tabs-css'
        href="{{ public_asset('css/custom-widget-nested-tabs.min.css?ver=1733908100') }}"
        media='all' />
    <link rel='stylesheet' id='widget-accordion-css'
        href="{{ public_asset('css/custom-widget-accordion.min.css?ver=1733908100') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-98-css'
        href="{{ public_asset('css/post-98.css?ver=1733908101') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-141-css'
        href="{{ public_asset('css/post-141.css?ver=1733908101') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-144-css'
        href="{{ public_asset('css/post-144.css?ver=1733908101') }}"
        media='all' />
    <link rel='stylesheet' id='elementor-post-3494-css'
        href="{{ public_asset('css/post-3494.css?ver=1733908101') }}"
        media='all' />
    <link rel='stylesheet' id='insul-fonts-css'
        href='//fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&#038;family=Sora:wght@100..800&#038;subset=latin%2Clatin-ext&#038;display=swap'
        media='all' />
    <link rel='stylesheet' id='insul-icon-css' href="{{ public_asset('css/icons.css') }}" media='all' />
    <link rel='stylesheet' id='insul-style-css'
        href="{{ public_asset('css/insul-style.css?ver=1.0.4') }}" media='all' />
    <style id='insul-style-inline-css'>
    .col-full {
        max-width: 1410px
    }

    body {
        --e-global-container-width: 1410px
    }

    .e-con {
        --container-max-width: 1410px
    }
    </style>
    <link rel='stylesheet' id='insul-elementor-css'
        href="{{ public_asset('css/insul-elementor.css?ver=1.0.4') }}"
        media='all' />
    <link rel='stylesheet' id='hfe-icons-list-css'
        href="{{ public_asset('css/widget-icon-list.min.css?ver=3.24.3') }}"
        media='all' />
    <link rel='stylesheet' id='hfe-social-icons-css'
        href="{{ public_asset('css/widget-social-icons.min.css?ver=3.24.0') }}"
        media='all' />
    <link rel='stylesheet' id='hfe-social-share-icons-brands-css' href="{{ public_asset('css/font-awesome-brands.min.css') }}" media='all' />
    <link rel='stylesheet' id='hfe-social-share-icons-fontawesome-css' href="{{ public_asset('css/font-awesome.min.css') }}" media='all' />
    <link rel='stylesheet' id='hfe-nav-menu-icons-css' href="{{ public_asset('css/font-awesome-solid.min.css') }}" media='all' />
    <link rel='stylesheet' id='insul-child-style-css'
        href="{{ public_asset('css/demo-child.css?ver=1.0.0') }}" media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=DM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CSora%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.7.1'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css' href="{{ public_asset('css/font-awesome.min.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css' href="{{ public_asset('css/font-awesome-solid.min.css') }}" media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-brands-css' href="{{ public_asset('css/font-awesome-brands.min.css') }}" media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"
        id="jquery-core-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-migrate@3.4.1/dist/jquery-migrate.min.js"
        id="jquery-migrate-js"></script>
    <script id="jquery-js-after">
        !function ($) {
        "use strict";
            $(document).ready(function () {
            $(this).scrollTop() > 100 && $(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"),
                    $(window).scroll(function () {
                $(this).scrollTop() < 100 ? $(".hfe-scroll-to-top-wrap").fadeOut(300) : $(".hfe-scroll-to-top-wrap").fadeIn(300)
            }),
                    $(".hfe-scroll-to-top-wrap").on("click", function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 300);
                return !1
            })
        })
    }(jQuery);
    </script>
    <script src="{{ public_asset('js/insul/assets/js/libs/jarallax.js') }}?ver=6.7.1"
        id="jarallax-js"></script>
    <meta name="generator"
        content="Elementor 3.25.11; features: additional_custom_breakpoints, e_optimized_control_loading; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n + 4):not(.e-lazyloaded):not(.e-no-lazyload) * {
        background-image: none !important;
    }

    @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n + 3):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }

    @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n + 2):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }
    }
    </style>
    <meta name="generator"
        content="Powered by Slider Revolution 6.7.23 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script>
    function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl)
                    if (e.gw[i] === undefined || e.gw[i] === 0)
                        e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl)
                    if (e.gh[i] === undefined || e.gh[i] === 0)
                        e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl)
                    nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl)
                    if (sl > nl[i] && nl[i] > 0) {
                        sl = nl[i];
                        ix = i;
                    }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el)
                el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
                el.style.height = newh + "px";
                el.style.display = "block";
            }
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }

    }
    //});
    ;
    </script>
    <noscript>
        <style id="rocket-lazyload-nojs-css">
            .rll-youtube-player,
            [data-lazy-src] {
            display: none !important;
        }
        </style>
    </noscript>
</head>

<body
    class="home page-template page-template-template-homepage page-template-template-homepage-php page page-id-98 wp-custom-logo wp-embed-responsive ehf-header ehf-footer ehf-template-insul ehf-stylesheet-demo-child safari no-wc-breadcrumb elementor-default elementor-template-full-width elementor-kit-7 elementor-page elementor-page-98">

    <div id="page" class="hfeed site">
        <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
            <p class="main-title bhf-hidden" itemprop="headline">
                <a href="/" title="Witan Finsure" rel="home">Witan Finsure</a>
            </p>
            <div data-elementor-type="wp-post" data-elementor-id="141" class="elementor elementor-141">
                <div class="elementor-element elementor-element-b081b12 e-flex e-con-boxed e-con e-parent"
                    data-id="b081b12" data-element_type="container"
                    data-settings="{&quot;position&quot;:&quot;absolute&quot;}">
                    <div class="e-con-inner">
                        <div class="elementor-element elementor-element-728ccbc e-con-full e-flex e-con e-child"
                            data-id="728ccbc" data-element_type="container">
                            <div class="elementor-element elementor-element-bf810e7 elementor-hidden-tablet elementor-hidden-mobile_extra elementor-hidden-mobile insul-nav-menu-sm-divider-yes menu-style-layout-1 insul-style-menu-special-divider-no elementor-widget elementor-widget-insul-nav-menu"
                                data-id="bf810e7" data-element_type="widget"
                                data-settings="{&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300,&quot;sizes&quot;:[]},&quot;width_dropdown_item_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="insul-nav-menu.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-nav-menu-wrapper">
                                        <nav class="main-navigation" role="navigation" aria-label="Primary Navigation">
                                            <div class="primary-navigation">
                                                <ul id="menu-1-bf810e7" class="menu">
                                                    <li id="menu-item-179"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-98 current_page_item menu-item-179">
                                                        <a href="/">
                                                            <span class="menu-title">Home</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item-180"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-180">
                                                        <a href="/about-us">
                                                            <span class="menu-title">About us</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item-181"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-181">
                                                        <a href="#">
                                                            <span class="menu-title">Service</span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-186"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-186">
                                                                <a href="/services/general-insurance/">
                                                                    <span class="menu-title">General Insurance</span>
                                                                </a>
                                                            </li>
                                                            <li id="menu-item-187"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187">
                                                                <a href="/services/life-insurance/">
                                                                    <span class="menu-title">Life Insurance</span>
                                                                </a>
                                                            </li>
                                                            <li id="menu-item-185"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-185">
                                                                <a href="/services/mutual-funds/">
                                                                    <span class="menu-title">Mutual Funds</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e9a7e54 elementor-hidden-desktop elementor-hidden-laptop elementor-hidden-tablet_extra insul-canvas-menu-layout-2 elementor-widget elementor-widget-insul-menu-canvas"
                                data-id="e9a7e54" data-element_type="widget"
                                data-widget_type="insul-menu-canvas.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-canvas-menu-wrapper">
                                        <a href="#" class="menu-mobile-nav-button">
                                            <span class="toggle-text screen-reader-text">Menu</span>
                                            <div class="insul-icon">
                                                <span class="icon-1"></span>
                                                <span class="icon-2"></span>
                                                <span class="icon-3"></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-8e2a102 e-con-full e-flex e-con e-child"
                            data-id="8e2a102" data-element_type="container">
                            <div class="elementor-element elementor-element-5e87535 elementor-widget elementor-widget-site-logo"
                                data-id="5e87535" data-element_type="widget" data-widget_type="site-logo.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-site-logo">
                                        <a data-elementor-open-lightbox="" class='elementor-clickable' href="/">
                                            <div class="hfe-site-logo-set">
                                                <div class="hfe-site-logo-container">
                                                    <img class="hfe-site-logo-img elementor-animation-"
                                                        src="{{ asset('images/mainlogo.png') }}" alt="Witan Fincare" />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-20f722a e-con-full elementor-hidden-mobile e-flex e-con e-child"
                            data-id="20f722a" data-element_type="container">
                            <div class="elementor-element elementor-element-fc5a7d5 insul-nav-menu-sm-divider-yes menu-style-layout-1 insul-style-menu-special-divider-no elementor-widget elementor-widget-insul-nav-menu"
                                data-id="fc5a7d5" data-element_type="widget"
                                data-settings="{&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300,&quot;sizes&quot;:[]},&quot;width_dropdown_item_laptop&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile_extra&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="insul-nav-menu.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-nav-menu-wrapper">
                                        <nav class="main-navigation" role="navigation" aria-label="Primary Navigation">
                                            <div class="primary-navigation">
                                                <ul id="menu-1-fc5a7d5" class="menu">
                                                    <li id="menu-item-191"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-191">
                                                        <a href="/blog">
                                                            <span class="menu-title">Blog</span>
                                                        </a>
                                                    </li>
                                                    <li id="menu-item-192"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-192">
                                                        <a href="#">
                                                            <span class="menu-title">Utilities</span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-202"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202">
                                                                <a href="/testimonial">
                                                                    <span class="menu-title">Testimonial</span>
                                                                </a>
                                                            </li>
                                                            <li id="menu-item-204"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-204">
                                                                <a href="/our-team">
                                                                    <span class="menu-title">Our Team</span>
                                                                </a>
                                                            </li>
                                                            <li id="menu-item-205"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205">
                                                                <a href="/faqs-page">
                                                                    <span class="menu-title">FAQ</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-calculators"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-calculators">
                                                        <a href="#">
                                                            <span class="menu-title">Calculators</span>
                                                        </a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-sip-planner"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-sip">
                                                                <a href="/sip-planner">
                                                                    <span class="menu-title">SIP Planner</span>
                                                                </a>
                                                            </li>
                                                            <li id="menu-item-sip-delay-cost"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-sip-delay">
                                                                <a href="/sip-delay-cost-calculator">
                                                                    <span class="menu-title">SIP Delay Cost</span>
                                                                </a>
                                                            </li>
                                                            <li id="menu-item-swp-calculator"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-swp">
                                                                <a href="/swp-calculator">
                                                                    <span class="menu-title">SWP Calculator</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-196"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-196">
                                                        <a href="/contact-01">
                                                            <span class="menu-title">Contact</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="elementor-element elementor-element-818d01d elementor-hidden-mobile elementor-button-default elementor-widget elementor-widget-button"
                                data-id="818d01d" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-md"
                                            href="/our-pricing/">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-icon">
                                                    <i aria-hidden="true"
                                                        class="insul-icon- insul-icon-arrow-up-right-1"></i>
                                                </span>
                                                <span class="elementor-button-text">TRY FOR FREE</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="breadcrumb-wrap"></div>

        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">

                <div data-elementor-type="wp-page" data-elementor-id="98" class="elementor elementor-98">
                    <div class="elementor-element elementor-element-aad0ebc e-con-full e-flex e-con e-parent"
                        data-id="aad0ebc" data-element_type="container">
                        <div class="elementor-element elementor-element-8da8c64 elementor-widget elementor-widget-slider_revolution"
                            data-id="8da8c64" data-element_type="widget" data-widget_type="slider_revolution.default">
                            <div class="elementor-widget-container">

                                <section class="home-hero-minimal" aria-label="Hero">
                                    <div class="home-hero-minimal__inner">
                                        <h1 class="home-hero-minimal__title">Your Trusted Finance Advisor</h1>
                                        <p class="home-hero-minimal__subtitle">By understanding your goals and risk profile, we help you choose the right mix of insurance and investments, so your money stays protected and growing.</p>
                                        <div class="home-hero-minimal__actions">
                                            <a href="#our-services" class="home-hero-minimal__btn home-hero-minimal__btn--primary">
                                                Explore Now
                                                                    <i class="insul-icon-arrow-up-right-1"></i>
                                                                </a>
                                            <a href="{{ url('/contact-01') }}" class="home-hero-minimal__btn home-hero-minimal__btn--secondary">
                                                Contact Us
                                            </a>
                                </div>
                                        <div class="home-hero-minimal__proof">
                                            <img src="{{ public_asset('images/home/img-sl1-client-min.png') }}" alt="Happy clients" width="120" height="40" loading="eager">
                                            <span>+1000 Clients</span>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-682d027 e-con-full e-flex e-con e-parent"
                        data-id="682d027" data-element_type="container">
                        <div class="elementor-element elementor-element-2f6bed4 scrolling-effects-yes scroll-style-1 elementor-widget elementor-widget-insul-slider-scrolling"
                            data-id="2f6bed4" data-element_type="widget"
                            data-widget_type="insul-slider-scrolling.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-slider-scrolling-item-wrapper">
                                    <div class="elementor-slider-scrolling-inner">
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Protection .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Planning .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Grow Wealth .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Secure Future .</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-slider-scrolling-inner">
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Protection .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Planning .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Grow Wealth .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Secure Future .</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-slider-scrolling-inner">
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Protection .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Planning .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Grow Wealth .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Secure Future .</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-slider-scrolling-inner">
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Development .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Management .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Grow up .</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-slider-scrolling-item">
                                            <div class="elementor-scrolling-item-inner">
                                                <div class="scrolling-title">
                                                    <span class="title-scrolling">Increase customer .</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="home-about" aria-labelledby="home-about-title">
                        <div class="home-about__inner">
                            <div class="home-about__top">
                                <header>
                                    <p class="home-about__eyebrow">Who We Are</p>
                                    <h2 id="home-about-title" class="home-about__title">
                                        How <span class="home-about__highlight">we work</span> for solving all your financial needs
                                    </h2>
                                </header>
                                <div class="home-about__intro">
                                    <p>By doing a detailed financial review, you can see whether your protection and investments are truly aligned.</p>
                                    <a href="{{ url('/contact-01') }}" class="home-about__link">
                                        Get in touch
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="home-about__stats">
                                <div class="home-about__stat">
                                    <p class="home-about__stat-label">Industry Experience</p>
                                    <p class="home-about__stat-value">20+ Years</p>
                                    <p class="home-about__stat-desc">Strong expertise across insurance, investments, and long-term financial planning for evolving needs.</p>
                                </div>
                                <div class="home-about__stat">
                                    <p class="home-about__stat-label">Client Relationship</p>
                                    <p class="home-about__stat-value">1,000+</p>
                                    <p class="home-about__stat-desc">Built on transparent advice, zero mis-selling, and disciplined six-month portfolio review processes.</p>
                                </div>
                                <div class="home-about__stat">
                                    <p class="home-about__stat-label">Claim Assistance</p>
                                    <p class="home-about__stat-value">500+</p>
                                    <p class="home-about__stat-desc">Handled end-to-end with clarity, efficiency, and complete client support throughout every claim.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="home-guidance" aria-labelledby="home-guidance-title">
                        <div class="home-guidance__inner">
                            <div class="home-guidance__content">
                                <p class="home-guidance__eyebrow">Expert Guidance</p>
                                <h2 id="home-guidance-title" class="home-guidance__title">
                                    <span class="home-guidance__highlight">Expert Perspectives</span> on Personal Finance
                                </h2>
                                <p class="home-guidance__text">People face mis-selling, weak claim support, and confusing advice. Witan Finsure solves this with transparent guidance, six-month reviews, strong insurer ties, and end-to-end claim assistance so decisions stay clear, protected, and long-term.</p>
                                <a href="{{ url('/contact-01') }}" class="home-guidance__btn">
                                    Explore more
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg>
                                </a>
                            </div>
                            <div class="home-guidance__visual">
                                <figure class="home-guidance__image-wrap">
                                    <img src="{{ public_asset('images/home/expert-guidance-finance.jpg') }}"
                                         alt="Financial advisor reviewing charts and investment data on a tablet"
                                         loading="lazy"
                                         decoding="async"
                                         width="1200"
                                         height="801">
                                </figure>
                                <ul class="home-guidance__points">
                                    <li class="home-guidance__point">
                                        <span class="home-guidance__point-icon" aria-hidden="true">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                        </span>
                                        Direct discussion on clarity, priorities.
                                    </li>
                                    <li class="home-guidance__point">
                                        <span class="home-guidance__point-icon" aria-hidden="true">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                        </span>
                                        Understand risks, goals, gaps clearly today.
                                    </li>
                                    <li class="home-guidance__point">
                                        <span class="home-guidance__point-icon" aria-hidden="true">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                        </span>
                                        Clear direction, honest advice, next-steps.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="home-why" aria-labelledby="home-why-title">
                        <div class="home-why__inner">
                            <header class="home-why__header">
                                <p class="home-why__eyebrow">Why Choose Us</p>
                                <h2 id="home-why-title" class="home-why__title">
                                    Solutions Today for Tomorrow's <span class="home-why__highlight">Success</span>
                                </h2>
                                <p class="home-why__intro">Witan Finsure combines experience, honest advice, strong claim support, and regular reviews, ensuring insurance and investments work together, adapt over time, and protect your financial future with confidence.</p>
                            </header>
                            <ul class="home-why__pillars" aria-label="Key differentiators">
                                <li class="home-why__pillar">
                                    <span class="home-why__pillar-icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                                    </span>
                                    Zero mis-selling
                                </li>
                                <li class="home-why__pillar">
                                    <span class="home-why__pillar-icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                    </span>
                                    Six-month reviews
                                </li>
                                <li class="home-why__pillar">
                                    <span class="home-why__pillar-icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                    </span>
                                    End-to-end claims
                                </li>
                                <li class="home-why__pillar">
                                    <span class="home-why__pillar-icon" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                    </span>
                                    20+ years experience
                                </li>
                            </ul>
                            <div class="home-why__grid">
                                <article class="home-why__panel">
                                    <div class="home-why__panel-head">
                                        <span class="home-why__panel-icon" aria-hidden="true">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                        </span>
                                        <h3 class="home-why__panel-title">Founder Insight</h3>
                                    </div>
                                    <blockquote class="home-why__quote">"Clients deserve honest guidance, not sales pressure."</blockquote>
                                    <p>Witan Finsure was built by Rishabh, who believes financial advice should be clear, ethical, and grounded in long-term thinking. As an active BNI member with deep experience across insurance and investments, the firm was shaped by a simple conviction that still guides every decision today.</p>
                                    <p>Every recommendation reflects calm judgment and disciplined processes, balancing protection, growth, and accountability so decisions hold up over years, not just at the point of sale.</p>
                                    <p>Behind that approach is a highly efficient team dedicated to end-to-end claim settlement, regular portfolio reviews, and responsible client guidance, protecting wealth, enabling growth, and avoiding the confusion common across the industry.</p>
                                    <ul class="home-why__tags">
                                        <li class="home-why__tag">BNI Member</li>
                                        <li class="home-why__tag">Founder-led</li>
                                        <li class="home-why__tag">Client-first</li>
                                    </ul>
                                </article>
                                <article class="home-why__panel">
                                    <div class="home-why__panel-head">
                                        <span class="home-why__panel-icon" aria-hidden="true">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                                        </span>
                                        <h3 class="home-why__panel-title">Mission &amp; Vision</h3>
                                    </div>
                                    <div class="home-why__mv">
                                        <div class="home-why__mv-block">
                                            <h4 class="home-why__mv-heading">Our Mission</h4>
                                            <p>Deliver honest, transparent financial guidance across insurance and investments, simplifying complex decisions, building lasting trust, and ensuring every client feels protected, informed, and confident through clear communication and disciplined six-month reviews.</p>
                                        </div>
                                        <div class="home-why__mv-block">
                                            <h4 class="home-why__mv-heading">Our Vision</h4>
                                            <p>Become the most trusted financial partner for families and businesses, known for integrity, consistency, and clarity, helping clients make confident, informed decisions across generations as life, markets, and priorities evolve.</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="home-why__cta-wrap">
                                <p class="home-why__cta-text">
                                    <strong>Ready to plan with clarity?</strong>
                                    Speak with our team for honest advice on insurance and investments.
                                </p>
                                <a href="{{ url('/contact-01') }}" class="home-why__btn">
                                    Get in touch
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg>
                                </a>
                            </div>
                        </div>
                    </section>
                    <section id="our-services" class="home-services" aria-labelledby="home-services-title">
                        <div class="home-services__inner">
                            <header class="home-services__header">
                                <p class="home-services__eyebrow">Our Services</p>
                                <h2 id="home-services-title" class="home-services__title">
                                    We provide complete insurance and investment
                                    <span class="home-services__highlight">solutions</span>
                                </h2>
                            </header>
                            <ul class="home-services__grid">
                                <li>
                                    <a class="home-services__box" href="{{ url('/services/general-insurance') }}">
                                        <p class="home-services__num">01</p>
                                        <h3 class="home-services__name">General Insurance</h3>
                                        <p class="home-services__desc">We provide motor, health, property, travel, marine, and business insurance solutions for individuals and corporates, offering tailored coverage, compliance, and dependable claims support across risk needs.</p>
                                        <div class="home-services__footer">
                                            <span class="home-services__cta-text">Learn more</span>
                                            <span class="home-services__icon" aria-hidden="true">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="home-services__box" href="{{ url('/services/life-insurance') }}">
                                        <p class="home-services__num">02</p>
                                        <h3 class="home-services__name">Life Insurance</h3>
                                        <p class="home-services__desc">We provide life insurance planning covering term, savings, retirement, and protection needs for individuals and families, ensuring financial security, continuity, and long-term confidence across life stages.</p>
                                        <div class="home-services__footer">
                                            <span class="home-services__cta-text">Learn more</span>
                                            <span class="home-services__icon" aria-hidden="true">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="home-services__box" href="{{ url('/services/mutual-funds') }}">
                                        <p class="home-services__num">03</p>
                                        <h3 class="home-services__name">Mutual Funds</h3>
                                        <p class="home-services__desc">We determine suitable mutual fund allocation based on risk appetite, time horizon, and goals, constructing diversified portfolios that balance growth, stability, liquidity, and long-term wealth creation.</p>
                                        <div class="home-services__footer">
                                            <span class="home-services__cta-text">Learn more</span>
                                            <span class="home-services__icon" aria-hidden="true">
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7"/><path d="M7 7h10v10"/></svg>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="elementor-element elementor-element-a840e06 e-con-full e-flex e-con e-parent"
                        data-id="a840e06" data-element_type="container">
                        <div class="elementor-element elementor-element-290fc88 heading-effects-yes elementor-align-center subtitle-position-above elementor-widget elementor-widget-heading"
                            data-id="290fc88" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-heading-wrapper-inner">
                                    <div class="elementor-sub-title">
                                        <span class="sub-title">OUR TESTIMONIAL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-85e6ba9 elementor-widget__width-initial insul-elementor-headline--style-highlight elementor-widget elementor-widget-insul-animated-headline"
                            data-id="85e6ba9" data-element_type="widget"
                            data-settings="{&quot;marker&quot;:&quot;underline&quot;,&quot;highlighted_text&quot;:&quot;case study &quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                            data-widget_type="insul-animated-headline.default">
                            <div class="elementor-widget-container">
                                <h3 class="elementor-headline">
                                    <span
                                        class="insul-elementor-headline-plain-text insul-elementor-headline-text-wrapper">Company
                                    </span>
                                    <span
                                        class="insul-elementor-headline-dynamic-wrapper insul-elementor-headline-text-wrapper">
                                        <span
                                            class="insul-elementor-headline-dynamic-text insul-elementor-headline-text-active">case
                                            study </span>
                                    </span>
                                    <span
                                        class="insul-elementor-headline-after-text insul-elementor-headline-text-wrapper">that
                                        inspire you</span>
                                </h3>
                            </div>
                        </div>
                        <div class="home-testimonials-outer">
                        <button type="button" class="home-testimonials-nav__btn home-testimonials-nav__prev" aria-label="Previous review">
                            <i aria-hidden="true" class="insul-icon- insul-icon-angle-left"></i>
                        </button>
                        <div class="elementor-element elementor-element-c449d47 elementor-grid-5 elementor-pagination-style-2 elementor-grid-laptop-4 elementor-grid-tablet_extra-2 elementor-view-default overflow-to-none elementor-pagination-position-outside elementor-widget elementor-widget-insul-testimonials"
                            data-id="c449d47" data-element_type="widget"
                            data-settings="{&quot;column&quot;:&quot;5&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;no&quot;,&quot;column_laptop&quot;:&quot;4&quot;,&quot;column_tablet_extra&quot;:&quot;2&quot;,&quot;column_spacing&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;swiper_overflow&quot;:&quot;none&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
                            data-widget_type="insul-testimonials.default">
                            <div class="elementor-widget-container">
                                <div
                                    class="elementor-testimonial-item-wrapper insul-wrapper insul-swiper-wrapper swiper">
                                    <div class="insul-con swiper insul-swiper  elementor-testimonials-swiper"
                                        data-center="false" data-count="5">
                                        <div class="insul-con-inner swiper-wrapper layout-1" aria-live="polite">
                                            <div
                                                class="swiper-slide elementor-item elementor-grid-item elementor-testimonial-item">
                                                <div class="item-inner inner">
                                                    <div class="testimonial-content-text">
                                                        <div class="testimonial-caption">
                                                            <div class="caption-top">
                                                                <div class="elementor-testimonial-image">
                                                                    <img loading="lazy" decoding="async" width="768"
                                                                        height="816"
                                                                        src="{{ public_asset('images/home/testimonials/h1-testi01.png') }}"
                                                                        class="attachment-full size-full wp-image-464"
                                                                        alt=""
                                                                        srcset="{{ public_asset('images/home/testimonials/h1-testi01.png') }} 768w, {{ public_asset('images/home/testimonials/h1-testi01-282x300.png') }} 282w"
                                                                        sizes="(max-width: 768px) 100vw, 768px" />
                                                                </div>
                                                                <div class="details">
                                                                    <span class="name">Mayank</span>
                                                                    <span class="job">IT Professional</span>
                                                                </div>
                                                            </div>
                                                            <div class="icon">
                                                                <i aria-hidden="true"
                                                                    class="insul-icon- insul-icon-quotes-1"></i>
                                                            </div>
                                                        </div>

                                                        <h3 class="title">Clear advice on health and term insurance</h3>
                                                        <div class="content">"I had three policies from different agents and no clear picture of what I actually needed. Rishabh walked me through each one patiently and helped me trim overlap without losing cover. No pressure to buy something new on the spot, which was refreshing."</div>
                                                        <div class="elementor-testimonial-rating">
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="swiper-slide elementor-item elementor-grid-item elementor-testimonial-item">
                                                <div class="item-inner inner">
                                                    <div class="testimonial-content-text">
                                                        <div class="testimonial-caption">
                                                            <div class="caption-top">
                                                                <div class="elementor-testimonial-image">
                                                                    <img loading="lazy" decoding="async" width="752"
                                                                        height="800"
                                                                        src="{{ public_asset('images/home/testimonials/h1-testi02.jpg') }}"
                                                                        class="attachment-full size-full wp-image-465"
                                                                        alt=""
                                                                        srcset="{{ public_asset('images/home/testimonials/h1-testi02.jpg') }} 752w, {{ public_asset('images/home/testimonials/h1-testi02-282x300.jpg') }} 282w"
                                                                        sizes="(max-width: 752px) 100vw, 752px" />
                                                                </div>
                                                                <div class="details">
                                                                    <span class="name">Sarthak</span>
                                                                    <span class="job">Chartered Accountant</span>
                                                                </div>
                                                            </div>
                                                            <div class="icon">
                                                                <i aria-hidden="true"
                                                                    class="insul-icon- insul-icon-quotes-1"></i>
                                                            </div>
                                                        </div>

                                                        <h3 class="title">Honest portfolio review every six months</h3>
                                                        <div class="content">"As a CA I am cautious about who I trust with investments. Witan Finsure's six-month review process is structured and documented. Rishabh explains the why behind every allocation change, which is rare in this industry."</div>
                                                        <div class="elementor-testimonial-rating">
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="swiper-slide elementor-item elementor-grid-item elementor-testimonial-item">
                                                <div class="item-inner inner">
                                                    <div class="testimonial-content-text">
                                                        <div class="testimonial-caption">
                                                            <div class="caption-top">
                                                                <div class="elementor-testimonial-image">
                                                                    <img loading="lazy" decoding="async" width="752"
                                                                        height="800"
                                                                        src="{{ public_asset('images/home/testimonials/h1-testi03.jpg') }}"
                                                                        class="attachment-full size-full wp-image-466"
                                                                        alt=""
                                                                        srcset="{{ public_asset('images/home/testimonials/h1-testi03.jpg') }} 752w, {{ public_asset('images/home/testimonials/h1-testi03-282x300.jpg') }} 282w"
                                                                        sizes="(max-width: 752px) 100vw, 752px" />
                                                                </div>
                                                                <div class="details">
                                                                    <span class="name">Aditya</span>
                                                                    <span class="job">Doctor</span>
                                                                </div>
                                                            </div>
                                                            <div class="icon">
                                                                <i aria-hidden="true"
                                                                    class="insul-icon- insul-icon-quotes-1"></i>
                                                            </div>
                                                        </div>

                                                        <h3 class="title">Claim support when it mattered</h3>
                                                        <div class="content">"When my mother was hospitalised, the last thing I wanted was chasing paperwork. Rishabh's team handled the health claim end to end and kept us updated at each stage. The settlement came through without the usual back-and-forth."</div>
                                                        <div class="elementor-testimonial-rating">
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="swiper-slide elementor-item elementor-grid-item elementor-testimonial-item">
                                                <div class="item-inner inner">
                                                    <div class="testimonial-content-text">
                                                        <div class="testimonial-caption">
                                                            <div class="caption-top">
                                                                <div class="elementor-testimonial-image">
                                                                    <img loading="lazy" decoding="async" width="1707"
                                                                        height="2560"
                                                                        src="{{ public_asset('images/home/testimonials/h1-testi04-scaled.jpeg') }}"
                                                                        class="attachment-full size-full wp-image-467"
                                                                        alt=""
                                                                        srcset="{{ public_asset('images/home/testimonials/h1-testi04-scaled.jpeg') }} 1707w, {{ public_asset('images/home/testimonials/h1-testi04-200x300.jpeg') }} 200w, {{ public_asset('images/home/testimonials/h1-testi04-683x1024.jpeg') }} 683w, {{ public_asset('images/home/testimonials/h1-testi04-768x1152.jpeg') }} 768w, {{ public_asset('images/home/testimonials/h1-testi04-1024x1536.jpeg') }} 1024w, {{ public_asset('images/home/testimonials/h1-testi04-1365x2048.jpeg') }} 1365w"
                                                                        sizes="(max-width: 1707px) 100vw, 1707px" />
                                                                </div>
                                                                <div class="details">
                                                                    <span class="name">Udit</span>
                                                                    <span class="job">Civil Engineer</span>
                                                                </div>
                                                            </div>
                                                            <div class="icon">
                                                                <i aria-hidden="true"
                                                                    class="insul-icon- insul-icon-quotes-1"></i>
                                                            </div>
                                                        </div>

                                                        <h3 class="title">Motor and home insurance sorted properly</h3>
                                                        <div class="content">"I run a small contracting firm and needed fleet cover plus personal policies. Rishabh mapped our business exposure clearly and did not upsell products we did not need. Premiums are fair and I know exactly what is covered."</div>
                                                        <div class="elementor-testimonial-rating">
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="swiper-slide elementor-item elementor-grid-item elementor-testimonial-item">
                                                <div class="item-inner inner">
                                                    <div class="testimonial-content-text">
                                                        <div class="testimonial-caption">
                                                            <div class="caption-top">
                                                                <div class="elementor-testimonial-image">
                                                                    <img loading="lazy" decoding="async" width="2560"
                                                                        height="1707"
                                                                        src="{{ public_asset('images/home/testimonials/h1-testi05-scaled.jpeg') }}"
                                                                        class="attachment-full size-full wp-image-468"
                                                                        alt=""
                                                                        srcset="{{ public_asset('images/home/testimonials/h1-testi05-scaled.jpeg') }} 2560w, {{ public_asset('images/home/testimonials/h1-testi05-300x200.jpeg') }} 300w, {{ public_asset('images/home/testimonials/h1-testi05-1024x683.jpeg') }} 1024w, {{ public_asset('images/home/testimonials/h1-testi05-768x512.jpeg') }} 768w, {{ public_asset('images/home/testimonials/h1-testi05-1536x1024.jpeg') }} 1536w, {{ public_asset('images/home/testimonials/h1-testi05-2048x1366.jpeg') }} 2048w"
                                                                        sizes="(max-width: 2560px) 100vw, 2560px" />
                                                                </div>
                                                                <div class="details">
                                                                    <span class="name">Akshat</span>
                                                                    <span class="job">Business Owner</span>
                                                                </div>
                                                            </div>
                                                            <div class="icon">
                                                                <i aria-hidden="true"
                                                                    class="insul-icon- insul-icon-quotes-1"></i>
                                                            </div>
                                                        </div>

                                                        <h3 class="title">Long-term thinking, not quick sales</h3>
                                                        <div class="content">"I switched to Witan Finsure after a bad experience with mis-selling elsewhere. Rishabh took time to understand my family's goals before recommending anything. Two years in, our insurance and SIP plan still feel aligned."</div>
                                                        <div class="elementor-testimonial-rating">
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                            <i class="insul-icon-star-o active" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="swiper-pagination swiper-pagination-c449d47"></div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="home-testimonials-nav__btn home-testimonials-nav__next" aria-label="Next review">
                            <i aria-hidden="true" class="insul-icon- insul-icon-angle-right"></i>
                        </button>
                        </div>
                        <div class="elementor-element elementor-element-5088cfd elementor-absolute elementor-widget elementor-widget-image"
                            data-id="5088cfd" data-element_type="widget"
                            data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="397" height="507"
                                    src="{{ public_asset('images/home/misc/h2-ready01.png') }}"
                                    class="attachment-large size-large wp-image-3329" alt=""
                                    srcset="{{ public_asset('images/home/misc/h2-ready01.png') }} 397w, {{ public_asset('images/home/misc/h2-ready01-235x300.png') }} 235w"
                                    sizes="(max-width: 397px) 100vw, 397px" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- .col-full -->
        </div>
        <!-- #content -->

        @include('partials.site-footer')

    </div>
    <!-- #page -->

    <div class="account-wrap d-none">
        <div class="account-inner ">
            <div class="login-form-head">
                <span class="login-form-title">Sign in</span>
                <span class="pull-right">
                    <a class="register-link" href="/wp-login.php?action=register"
                        title="Register">Create an Account</a>
                </span>
            </div>
            <form class="insul-login-form-ajax" data-toggle="validator">
                <p>
                    <label>
                        Username or email 
                        <span class="required">*</span>
                    </label>
                    <input name="username" type="text" required placeholder="Username">
                </p>
                <p>
                    <label>
                        Password 
                        <span class="required">*</span>
                    </label>
                    <input name="password" type="password" required placeholder="Password">
                </p>
                <button type="submit" data-button-action class="btn btn-primary btn-block w-100 mt-1">Login</button>
                <input type="hidden" name="action" value="insul_login">
                <input type="hidden" id="security-login" name="security-login" value="4f22cab03e" />
                <input type="hidden" name="_wp_http_referer" value="/insul/" />
            </form>
            <div class="login-form-bottom">
                
            </div>
        </div>
    </div>
    <div class="insul-mobile-nav">
        <div class="menu-scroll-mobile">
            <a href="#" class="mobile-nav-close">
                <i class="insul-icon-times"></i>
            </a>
            <div class="mobile-nav-tabs">
                <ul>
                    <li class="mobile-tab-title mobile-pages-title active" data-menu="pages">
                        <span>Main Menu</span>
                    </li>
                </ul>
            </div>
            <nav class="mobile-menu-tab mobile-navigation mobile-pages-menu active" aria-label="Mobile Navigation">
                <div class="handheld-navigation">
                    <ul id="menu-main-menu" class="menu">
                        <li id="menu-item-97"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-97">
                            <a href="/">Home</a>
                        </li>
                        <li id="menu-item-105"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-105">
                            <a href="/about-us">About us</a>
                        </li>
                        <li id="menu-item-106"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-106">
                            <a href="#">Service</a>
                            <ul class="sub-menu">
                                <li id="menu-item-110"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110">
                                    <a href="/services/general-insurance/">
                                        <span class="menu-title">General Insurance</span>
                                    </a>
                                </li>
                                <li id="menu-item-111"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-111">
                                    <a href="/services/life-insurance/">
                                        <span class="menu-title">Life Insurance</span>
                                    </a>
                                </li>
                                <li id="menu-item-108"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                                    <a href="/services/mutual-funds/">
                                        <span class="menu-title">Mutual Funds</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-113"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113">
                            <a href="/blog">Blog</a>
                        </li>
                        <li id="menu-item-117"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-117">
                            <a href="#">Utilities</a>
                            <ul class="sub-menu">
                                <li id="menu-item-202"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202">
                                    <a href="/testimonial">
                                        <span class="menu-title">Testimonial</span>
                                    </a>
                                </li>
                                <li id="menu-item-204"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-204">
                                    <a href="/our-team">
                                        <span class="menu-title">Our Team</span>
                                    </a>
                                </li>
                                <li id="menu-item-205"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205">
                                    <a href="/faqs-page">
                                        <span class="menu-title">FAQ</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-calculators-2"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-calculators">
                            <a href="#">Calculators</a>
                            <ul class="sub-menu">
                                <li id="menu-item-sip-planner-2"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-sip">
                                    <a href="/sip-planner">
                                        <span class="menu-title">SIP Planner</span>
                                    </a>
                                </li>
                                <li id="menu-item-sip-delay-cost-2"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-sip-delay">
                                    <a href="/sip-delay-cost-calculator">
                                        <span class="menu-title">SIP Delay Cost</span>
                                    </a>
                                </li>
                                <li id="menu-item-swp-calculator-2"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-swp">
                                    <a href="/swp-calculator">
                                        <span class="menu-title">SWP Calculator</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-133"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133">
                            <a href="/contact-01">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="mobile-menu-tab mobile-navigation-categories mobile-categories-menu"
                aria-label="Mobile Navigation">
                <div class="menu">
                    <ul>
                        <li class="current_page_item">
                            <a href="/">Home</a>
                        </li>
                        <li class="page_item page-item-104">
                            <a href="/about-us">About us</a>
                        </li>
                        <li class="page_item page-item-112">
                            <a href="/blog">Blog</a>
                        </li>
                        <li class="page_item page-item-134">
                            <a href="/contact-01/">Contact 01</a>
                        </li>
                        <li class="page_item page-item-136">
                            <a href="/contact-02/">Contact 02</a>
                        </li>
                        <li class="page_item page-item-127">
                            <a href="/faqs-page/">FAQs Page</a>
                        </li>
                        <li class="page_item page-item-100">
                            <a href="/home-2/">Home 2</a>
                        </li>
                        <li class="page_item page-item-102">
                            <a href="/home-3/">Home 3</a>
                        </li>
                        <li class="page_item page-item-131">
                            <a href="/icons/">Icons</a>
                        </li>
                        <li class="page_item page-item-123">
                            <a href="/our-pricing/">Our Pricing</a>
                        </li>
                        <li class="page_item page-item-118">
                            <a href="/our-projects/">Our Projects</a>
                        </li>
                        <li class="page_item page-item-107">
                            <a href="/services/mutual-funds/">Mutual Funds</a>
                        </li>
                        <li class="page_item page-item-109">
                            <a href="/services/general-insurance/">General Insurance</a>
                        </li>
                        <li class="page_item page-item-125">
                            <a href="/our-team/">Our Team</a>
                        </li>
                        <li class="page_item page-item-2">
                            <a href="/sample-page/">Sample Page</a>
                        </li>
                        <li class="page_item page-item-121">
                            <a href="/testimonial/">Testimonial</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="insul-language-switcher-mobile">
            <ul class="menu">
                <li class="item">
                    <div class="language-switcher-head">
                        <img src="/wp-content/themes/insul/assets/images/language-switcher/en.jpg"
                            alt="WPML">
                    </div>
                </li>
                <li class="item">
                    <div class="language-switcher-img">
                        <a href="#">
                            <img src="/wp-content/themes/insul/assets/images/language-switcher/de.jpg"
                                alt="WPML">
                        </a>
                    </div>
                </li>
                <li class="item">
                    <div class="language-switcher-img">
                        <a href="#">
                            <img src="/wp-content/themes/insul/assets/images/language-switcher/it.jpg"
                                alt="WPML">
                        </a>
                    </div>
                </li>
                <li class="item">
                    <div class="language-switcher-img">
                        <a href="#">
                            <img src="/wp-content/themes/insul/assets/images/language-switcher/hi.jpg"
                                alt="WPML">
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="insul-overlay"></div>

    <script>
    window.RS_MODULES = window.RS_MODULES || {};
    window.RS_MODULES.modules = window.RS_MODULES.modules || {};
    window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
    window.RS_MODULES.defered = true;
    window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
    window.RS_MODULES.type = 'compiled';
    </script>
    <script>
        (function () {
        function maybePrefixUrlField() {
            const value = this.value.trim()
            if (value !== '' && value.indexOf('http') !== 0) {
                this.value = 'http://' + value
            }
        }

        const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
        for (let j = 0; j < urlFields.length; j++) {
            urlFields[j].addEventListener('blur', maybePrefixUrlField)
        }
    })();
    </script>
    <a href="#" class="scrollup">
        <span class="scrollup-icon insul-icon-long-arrow-up"></span>
        <span class="scrollup-label">Top</span>
    </a>
    <script type='text/javascript'>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
    'DOMContentLoaded',
    'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto:400%7CSora:600%7CDM+Sans:400%2C700%2C500&display=swap"
        rel="stylesheet" property="stylesheet" media="all" type="text/css">

    <link rel='stylesheet' id='magnific-popup-css'
        href="{{ public_asset('css/magnific-popup.css?ver=1.0.4') }}"
        media='all' />
    <link rel='stylesheet' id='widget-icon-list-css'
        href="{{ public_asset('css/custom-widget-icon-list.min.css?ver=1733908100') }}"
        media='all' />
    <link rel='stylesheet' id='e-animation-shrink-css'
        href="{{ public_asset('css/e-animation-shrink.min.css?ver=3.25.11') }}"
        media='all' />
    <link rel='stylesheet' id='widget-social-icons-css'
        href="{{ public_asset('css/widget-social-icons.min.css?ver=3.25.11') }}"
        media='all' />
    <link rel='stylesheet' id='e-apple-webkit-css'
        href="{{ public_asset('css/custom-apple-webkit.min.css?ver=1733908100') }}"
        media='all' />
    <script src="https://cdn.jsdelivr.net/gh/wordpress/wordpress@6.7/wp-includes/js/dist/hooks.min.js"
        id="wp-hooks-js"></script>
    <script src="https://cdn.jsdelivr.net/gh/wordpress/wordpress@6.7/wp-includes/js/dist/i18n.min.js"
        id="wp-i18n-js"></script>
    <script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
    </script>
    <script
        src="{{ public_asset('js/contact-form-7/includes/swv/js/index.js?ver=6.0.1') }}"
        id="swv-js"></script>
    <script id="contact-form-7-js-before">
    var wpcf7 = {
        "api": {
            "root": "\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };
    </script>
    <script src="{{ public_asset('js/contact-form-7/includes/js/index.js?ver=6.0.1') }}"
        id="contact-form-7-js"></script>
    <script
        src="{{ public_asset('js/elementor/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1') }}"
        id="jquery-numerator-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/libs/isotope.pkgd.min.js?ver=1.0.4') }}"
        id="isotope-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"
        id="imagesloaded-js"></script>
    <script id="rocket-browser-checker-js-after">
    "use strict";
        var _createClass = function () {
        function defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || !1,
                descriptor.configurable = !0,
                "value" in descriptor && (descriptor.writable = !0),
                Object.defineProperty(target, descriptor.key, descriptor)
            }
        }
            return function (Constructor, protoProps, staticProps) {
            return protoProps && defineProperties(Constructor.prototype, protoProps), staticProps && defineProperties(Constructor, staticProps), Constructor
        }
    }();
    function _classCallCheck(instance, Constructor) {
        if (!(instance instanceof Constructor))
            throw new TypeError("Cannot call a class as a function")
    }
        var RocketBrowserCompatibilityChecker = function () {
        function RocketBrowserCompatibilityChecker(options) {
            _classCallCheck(this, RocketBrowserCompatibilityChecker),
            this.passiveSupported = !1,
            this._checkPassiveOption(this),
            this.options = !!this.passiveSupported && options
        }
        return _createClass(RocketBrowserCompatibilityChecker, [{
            key: "_checkPassiveOption",
                value: function (self) {
                try {
                    var options = {
                        get passive() {
                            return !(self.passiveSupported = !0)
                        }
                    };
                    window.addEventListener("test", null, options),
                    window.removeEventListener("test", null, options)
                } catch (err) {
                    self.passiveSupported = !1
                }
            }
        }, {
            key: "initRequestIdleCallback",
                value: function () {
                    !1 in window && (window.requestIdleCallback = function (cb) {
                    var start = Date.now();
                        return setTimeout(function () {
                        cb({
                            didTimeout: !1,
                                timeRemaining: function () {
                                return Math.max(0, 50 - (Date.now() - start))
                            }
                        })
                    }, 1)
                }),
                        !1 in window && (window.cancelIdleCallback = function (id) {
                    return clearTimeout(id)
                })
            }
        }, {
            key: "isDataSaverModeOn",
                value: function () {
                return "connection" in navigator && !0 === navigator.connection.saveData
            }
        }, {
            key: "supportsLinkPrefetch",
                value: function () {
                var elem = document.createElement("link");
                return elem.relList && elem.relList.supports && elem.relList.supports("prefetch") && window.IntersectionObserver && "isIntersecting" in IntersectionObserverEntry.prototype
            }
        }, {
            key: "isSlowConnection",
                value: function () {
                return "connection" in navigator && "effectiveType" in navigator.connection && ("2g" === navigator.connection.effectiveType || "slow-2g" === navigator.connection.effectiveType)
            }
        }]), RocketBrowserCompatibilityChecker
    }();
    </script>
    <script id="rocket-preload-links-js-after">
        (function () {
        "use strict";
            var r = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
                return typeof e
            } : function (e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
            },
                e = function () {
                function i(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var i = t[n];
                        i.enumerable = i.enumerable || !1,
                        i.configurable = !0,
                        "value" in i && (i.writable = !0),
                        Object.defineProperty(e, i.key, i)
                    }
                }
                    return function (e, t, n) {
                    return t && i(e.prototype, t), n && i(e, n), e
                }
            }();
        function i(e, t) {
            if (!(e instanceof t))
                throw new TypeError("Cannot call a class as a function")
        }
            var t = function () {
            function n(e, t) {
                i(this, n),
                this.browser = e,
                this.config = t,
                this.options = this.browser.options,
                this.prefetched = new Set,
                this.eventTime = null,
                this.threshold = 1111,
                this.numOnHover = 0
            }
            return e(n, [{
                key: "init",
                    value: function () {
                    !this.browser.supportsLinkPrefetch() || this.browser.isDataSaverModeOn() || this.browser.isSlowConnection() || (this.regex = {
                        excludeUris: RegExp(this.config.excludeUris, "i"),
                        images: RegExp(".(" + this.config.imageExt + ")$", "i"),
                        fileExt: RegExp(".(" + this.config.fileExt + ")$", "i")
                    }, this._initListeners(this))
                }
            }, {
                key: "_initListeners",
                    value: function (e) {
                    -1 < this.config.onHoverDelay && document.addEventListener("mouseover", e.listener.bind(e), e.listenerOptions),
                    document.addEventListener("mousedown", e.listener.bind(e), e.listenerOptions),
                    document.addEventListener("touchstart", e.listener.bind(e), e.listenerOptions)
                }
            }, {
                key: "listener",
                    value: function (e) {
                    var t = e.target.closest("a"),
                        n = this._prepareUrl(t);
                    if (null !== n)
                        switch (e.type) {
                        case "mousedown":
                        case "touchstart":
                            this._addPrefetchLink(n);
                            break;
                        case "mouseover":
                            this._earlyPrefetch(t, n, "mouseout")
                        }
                }
            }, {
                key: "_earlyPrefetch",
                    value: function (t, e, n) {
                    var i = this,
                            r = setTimeout(function () {
                            if (r = null, 0 === i.numOnHover)
                                    setTimeout(function () {
                                    return i.numOnHover = 0
                                }, 1e3);
                            else if (i.numOnHover > i.config.rateThrottle)
                                return;
                            i.numOnHover++,
                            i._addPrefetchLink(e)
                        }, this.config.onHoverDelay);
                    t.addEventListener(n, function e() {
                        t.removeEventListener(n, e, {
                            passive: !0
                        }),
                        null !== r && (clearTimeout(r), r = null)
                    }, {
                        passive: !0
                    })
                }
            }, {
                key: "_addPrefetchLink",
                    value: function (i) {
                        return this.prefetched.add(i.href), new Promise(function (e, t) {
                        var n = document.createElement("link");
                        n.rel = "prefetch",
                        n.href = i.href,
                        n.onload = e,
                        n.onerror = t,
                        document.head.appendChild(n)
                        }).catch(function () { })
                }
            }, {
                key: "_prepareUrl",
                    value: function (e) {
                    if (null === e || "object" !== (void 0 === e ? "undefined" : r(e)) || !1 in e || -1 === ["http:", "https:"].indexOf(e.protocol))
                        return null;
                    var t = e.href.substring(0, this.config.siteUrl.length),
                        n = this._getPathname(e.href, t),
                        i = {
                            original: e.href,
                            protocol: e.protocol,
                            origin: t,
                            pathname: n,
                            href: t + n
                        };
                    return this._isLinkOk(i) ? i : null
                }
            }, {
                key: "_getPathname",
                    value: function (e, t) {
                    var n = t ? e.substring(this.config.siteUrl.length) : e;
                    return n.startsWith("/") || (n = "/" + n), this._shouldAddTrailingSlash(n) ? n + "/" : n
                }
            }, {
                key: "_shouldAddTrailingSlash",
                    value: function (e) {
                    return this.config.usesTrailingSlash && !e.endsWith("/") && !this.regex.fileExt.test(e)
                }
            }, {
                key: "_isLinkOk",
                    value: function (e) {
                    return null !== e && "object" === (void 0 === e ? "undefined" : r(e)) && (!this.prefetched.has(e.href) && e.origin === this.config.siteUrl && -1 === e.href.indexOf("?") && -1 === e.href.indexOf("#") && !this.regex.excludeUris.test(e.href) && !this.regex.images.test(e.href))
                }
            }], [{
                key: "run",
                    value: function () {
                    "undefined" != typeof RocketPreloadLinksConfig && new n(new RocketBrowserCompatibilityChecker({
                        capture: !0,
                        passive: !0
                    }), RocketPreloadLinksConfig).init()
                }
            }]), n
        }();
        t.run();
    }());
    </script>
    <script
        src="{{ public_asset('js/insul/assets/js/libs/jquery.sticky-kit.min.js?ver=1.0.4') }}"
        id="sticky-kit-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.7/underscore-min.js"
        id="underscore-js"></script>
    <script id="wp-util-js-extra">
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/insul\/wp-admin\/admin-ajax.php"
        }
    };
    </script>
    <script src="https://cdn.jsdelivr.net/gh/wordpress/wordpress@6.7/wp-includes/js/wp-util.min.js" id="wp-util-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/libs/swiper.js?ver=1.0.4') }}"
        id="swiper-js"></script>
    <script id="insul-theme-js-extra">
    var insulAjax = {
        "ajaxurl": "\/wp-admin\/admin-ajax.php"
    };
    </script>
    <script src="{{ public_asset('js/insul/assets/js/frontend/main.js?ver=1.0.4') }}"
        id="insul-theme-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/skip-link-focus-fix.min.js?ver=1.0.4') }}"
        id="insul-skip-link-focus-fix-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/frontend/search-popup.js?ver=1.0.4') }}"
        id="insul-search-popup-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/frontend/text-editor.js?ver=1.0.4') }}"
        id="insul-text-editor-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/frontend/nav-mobile.js?ver=1.0.4') }}"
        id="insul-nav-mobile-js"></script>
    <script
        src="{{ public_asset('js/insul/inc/megamenu/assets/js/frontend.js?ver=1.0.4') }}"
        id="insul-megamenu-frontend-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/frontend/login.js?ver=1.0.4') }}"
        id="insul-ajax-login-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/libs/TweenMax.min.js?ver=1.11.1') }}"
        id="tweenmax-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/libs/jquery-parallax.js?ver=1.0.4') }}"
        id="parallaxmouse-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/libs/jquery.magnific-popup.min.js?ver=1.0.4') }}"
        id="magnific-popup-js"></script>
    <script defer
        src="{{ public_asset('js/mailchimp/assets/js/forms.js?ver=4.9.19') }}"
        id="mc4wp-forms-api-js"></script>
    <script
        src="{{ public_asset('js/elementor/assets/js/webpack.runtime.min.js?ver=3.25.11') }}"
        id="elementor-webpack-runtime-js"></script>
    <script
        src="{{ public_asset('js/elementor/assets/js/frontend-modules.min.js?ver=3.25.11') }}"
        id="elementor-frontend-modules-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-ui@1.13.3/dist/jquery-ui.min.js"
        id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": true
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1440,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": true
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            },
            "hasCustomBreakpoints": true
        },
        "version": "3.25.11",
        "is_static": false,
        "experimentalFeatures": {
            "additional_custom_breakpoints": true,
            "container": true,
            "e_swiper_latest": true,
            "e_nested_atomic_repeaters": true,
            "e_optimized_control_loading": true,
            "e_onboarding": true,
            "e_css_smooth_scroll": true,
            "home_screen": true,
            "landing-pages": true,
            "nested-elements": true,
            "editor_v2": true,
            "link-in-bio": true,
            "floating-buttons": true
        },
        "urls": {
            "assets": {!! json_encode(public_asset('js/elementor/assets/')) !!},
            "ajaxurl": "\/wp-admin\/admin-ajax.php",
            "uploadUrl": {!! json_encode(public_asset('images/home')) !!}
        },
        "nonces": {
            "floatingButtonsClickTracking": "e44bf9c3ae"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_mobile_extra", "viewport_tablet", "viewport_tablet_extra", "viewport_laptop"],
            "body_background_background": "classic",
            "viewport_laptop": 1440,
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 98,
            "title": "Insul%20%E2%80%93%20Business%20Consulting%20Company%20WordPress%20Theme",
            "excerpt": "",
            "featuredImage": false
        }
    };
    </script>
    <script src="{{ public_asset('js/insul/assets/js/elementor-frontend.js?ver=1.0.4') }}"
        id="insul-elementor-frontend-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/elementor/testimonial.js?ver=1.0.4') }}"
        id="insul-elementor-testimonial-js"></script>
    <script src="{{ public_asset('js/elementor/assets/js/frontend.min.js?ver=3.25.11') }}"
        id="elementor-frontend-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/elementor/accordion.js?ver=1.0.4') }}"
        id="insul-elementor-accordion-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/elementor/animated-headline.js?ver=1.0.4') }}"
        id="insul-elementor-animated-headline-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/elementor/brand.js?ver=1.0.4') }}"
        id="insul-elementor-brand-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/elementor/our-project.js?ver=1.0.4') }}"
        id="insul-elementor-our-project-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/elementor/our-service.js?ver=1.0.4') }}"
        id="insul-elementor-our-service-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/elementor/posts-grid.js?ver=1.0.4') }}"
        id="insul-elementor-posts-grid-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/elementor/slider-scrolling.js?ver=1.0.4') }}"
        id="insul-elementor-slider-scrolling-js"></script>
    <script
        src="{{ public_asset('js/insul/assets/js/frontend/jquery-sticky.js?ver=1.0.4') }}"
        id="elementor-sticky-js"></script>
    <script src="{{ public_asset('js/insul/assets/js/libs/sticky.js?ver=1.0.4') }}"
        id="insul-elementor-sticky-js"></script>
    <script>
    (function ($) {
        function runCounters() {
            if (!$.fn.numerator) return;
            $('.elementor-counter-number[data-to-value]').each(function () {
                var $el = $(this);
                if ($el.data('plugin_numerator') || $el.data('counter-started')) return;
                if (!$el.is(':visible')) return;
                $el.data('counter-started', true);
                var settings = $.extend({}, $el.data());
                var match = String(settings.toValue).match(/\.(.*)/);
                if (match) settings.rounding = match[1].length;
                $el.numerator(settings);
            });
        }
        if ('IntersectionObserver' in window) {
            var observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    var $el = $(entry.target);
                    if ($el.data('plugin_numerator') || $el.data('counter-started')) return;
                    $el.data('counter-started', true);
                    var settings = $.extend({}, $el.data());
                    var match = String(settings.toValue).match(/\.(.*)/);
                    if (match) settings.rounding = match[1].length;
                    if ($.fn.numerator) $el.numerator(settings);
                    observer.unobserve(entry.target);
                });
            }, { threshold: 0.2 });
            $('.elementor-counter-number[data-to-value]').each(function () {
                observer.observe(this);
            });
        } else {
            runCounters();
        }
        $(window).on('load', runCounters);
    })(jQuery);
    </script>
    <script>
    (function ($) {
        function ensureTestimonialSwiper() {
            var $widget = $('.elementor-element-c449d47');
            var $swiperEl = $widget.find('.insul-swiper');
            if (!$swiperEl.length || $swiperEl[0].swiper || $swiperEl.data('swiper')) {
                return;
            }

            if (typeof insulSwiperBase !== 'undefined' && typeof elementorFrontend !== 'undefined' && elementorFrontend.elementsHandler) {
                try {
                    elementorFrontend.elementsHandler.addHandler(insulSwiperBase, { $element: $widget });
                } catch (e) {
                    /* fall through to direct Swiper init */
                }
                if ($swiperEl[0].swiper || $swiperEl.data('swiper')) {
                    var inst = $swiperEl[0].swiper || $swiperEl.data('swiper');
                    if (inst.params && inst.params.navigation && inst.navigation) {
                        inst.params.navigation.prevEl = '.home-testimonials-nav__prev';
                        inst.params.navigation.nextEl = '.home-testimonials-nav__next';
                        inst.navigation.destroy();
                        inst.navigation.init();
                        inst.navigation.update();
                    }
                    return;
                }
            }

            if (typeof Swiper === 'undefined') {
                return;
            }

            var swiper = new Swiper($swiperEl[0], {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 16,
                loop: true,
                speed: 500,
                allowTouchMove: true,
                grabCursor: true,
                simulateTouch: true,
                navigation: {
                    prevEl: '.home-testimonials-nav__prev',
                    nextEl: '.home-testimonials-nav__next'
                },
                pagination: {
                    el: '.swiper-pagination-c449d47',
                    clickable: true
                },
                breakpoints: {
                    881: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    1441: {
                        slidesPerView: 4,
                        spaceBetween: 30
                    },
                    1601: {
                        slidesPerView: 5,
                        spaceBetween: 30
                    }
                }
            });
            $swiperEl.data('swiper', swiper);
        }

        $(window).on('load', ensureTestimonialSwiper);
    })(jQuery);
    </script>
@include('partials.whatsapp-float')
</body>

</html>
