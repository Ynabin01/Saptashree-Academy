<div class="modern-abroad-section">

    <!-- Decorative Elements -->
    <div class="floating-circle circle-one"></div>
    <div class="floating-circle circle-two"></div>

    <div class="container position-relative">
        <!-- HEADER -->
        <div class="section-header text-center" data-aos="fade-up" data-aos-duration="1200">
            <span class="section-tag">
                Country Best Education Center
            </span>
            <h2 class="section-title">
                <span class="light-text">
                    Learning
                </span>
                Opportunities
                <span class="gradient-text">
                    and Programs
                </span>
            </h2>
            <p class="section-subtitle">
                Explore top countries offering quality school education, cultural experiences, and future career
                opportunities.
            </p>
        </div>

        <!-- DESTINATION GRID -->
        <div class="destination-layout">

            @foreach ($abroad as $sub)

                @php
                    $child = $sub->childs->first();

                    if ($child && !empty($child->nav_name)) {
                        $url = $sub->nav_name . '/' . $child->nav_name;
                    } else {
                        $url = url('/'); // redirect to home page safely
                    }
                @endphp

                <a href="{{ $url }}" class="destination-box" data-aos="zoom-in" data-aos-duration="1000">

                    <!-- IMAGE -->
                    <div class="destination-image">

                        <img src="{{ $sub->banner_image ?? '' }}" alt="{{ $sub->caption }}">

                    </div>

                    <!-- CONTENT -->
                    <div class="destination-info">

                        <div class="destination-top">

                            <div class="destination-icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div class="destination-arrow">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </div>

                        </div>

                        <div class="destination-bottom">

                            <h4>
                                {{ $sub->caption }}
                            </h4>

                            <p>
                                Study • Explore • Grow
                            </p>

                        </div>

                    </div>

                </a>

            @endforeach

        </div>

    </div>

</div>

<style>
    /* =========================
SECTION
========================= */

    .modern-abroad-section {
        position: relative;
        overflow: hidden;
        padding: 85px 0;
        background:
            linear-gradient(135deg, #061326, #0f172ad6, #122f6d);
    }

    /* FLOATING BACKGROUND */

    .floating-circle {
        position: absolute;
        border-radius: 50%;
        filter: blur(90px);
        opacity: .16;
    }

    .circle-one {
        width: 280px;
        height: 280px;
        background: #2563eb;
        top: -120px;
        left: -120px;
    }

    .circle-two {
        width: 240px;
        height: 240px;
        background: #06b6d4;
        bottom: -100px;
        right: -100px;
    }

    /* =========================
HEADER
========================= */

    .section-header {
        max-width: 760px;
        margin: auto;
        margin-bottom: 55px;
    }

    .section-tag {
        display: inline-block;
        padding: 9px 18px;
        border-radius: 50px;
        background: rgba(255, 255, 255, .08);
        color: #7dd3fc;
        font-size: .78rem;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 18px;
        border: 1px solid rgba(255, 255, 255, .08);
    }

    .section-title {
        color: #fff;
        font-size: 2.9rem;
        font-weight: 800;
        line-height: 1.25;
    }

    .light-text {
        color: #7dd3fc;
    }

    .gradient-text {
        background: linear-gradient(90deg, #38bdf8, #14b8a6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .section-subtitle {
        margin-top: 18px;
        color: rgba(255, 255, 255, .7);
        font-size: 1rem;
        line-height: 1.8;
    }

    /* =========================
GRID
========================= */

    .destination-layout {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 24px;
    }

    /* =========================
CARD
========================= */

    .destination-box {
        position: relative;
        overflow: hidden;
        border-radius: 26px;
        min-height: 380px;
        text-decoration: none;
        background: #111827;
        transition: .45s ease;
        border: 1px solid rgba(255, 255, 255, .06);
    }

    .destination-box:hover {
        transform: translateY(-12px);
        border-color: rgba(56, 189, 248, .25);
        box-shadow: 0 25px 50px rgba(0, 0, 0, .35);
    }

    /* IMAGE */

    .destination-image {
        position: absolute;
        inset: 0;
    }

    .destination-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 1s ease;
    }

    .destination-box:hover img {
        transform: scale(1.1);
    }

    .destination-image::after {
        content: '';
        position: absolute;
        inset: 0;
        background:
            linear-gradient(to top,
                rgba(2, 6, 23, .95) 10%,
                rgba(2, 6, 23, .25) 55%,
                rgba(2, 6, 23, .15));
    }

    /* CONTENT */

    .destination-info {
        position: relative;
        z-index: 2;
        height: 100%;
        padding: 24px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    /* TOP */

    .destination-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .destination-icon {
        width: 56px;
        height: 56px;
        border-radius: 18px;
        background: rgba(255, 255, 255, .12);
        backdrop-filter: blur(12px);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.2rem;
        border: 1px solid rgba(255, 255, 255, .12);
    }

    .destination-arrow {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: #fff;
        color: #111827;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: .9rem;
        transition: .35s ease;
    }

    .destination-box:hover .destination-arrow {
        transform: rotate(45deg);
    }

    /* BOTTOM */

    .destination-bottom h4 {
        color: #fff;
        font-size: 1.45rem;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .destination-bottom p {
        color: rgba(255, 255, 255, .72);
        font-size: .9rem;
        margin: 0;
        letter-spacing: .5px;
    }

    /* =========================
RESPONSIVE
========================= */

    @media(max-width:991px) {

        .modern-abroad-section {
            padding: 70px 0;
        }

        .section-title {
            font-size: 2.3rem;
        }

    }

    @media(max-width:767px) {

        .modern-abroad-section {
            padding: 55px 0;
        }

        .section-header {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 1.9rem;
        }

        .section-subtitle {
            font-size: .92rem;
            line-height: 1.7;
        }

        .destination-layout {
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .destination-box {
            min-height: 280px;
            border-radius: 20px;
        }

        .destination-info {
            padding: 18px;
        }

        .destination-icon {
            width: 46px;
            height: 46px;
            border-radius: 14px;
            font-size: 1rem;
        }

        .destination-arrow {
            width: 38px;
            height: 38px;
            font-size: .8rem;
        }

        .destination-bottom h4 {
            font-size: 1.05rem;
        }

        .destination-bottom p {
            font-size: .75rem;
        }

    }

    @media(max-width:575px) {

        .destination-layout {
            grid-template-columns: 1fr;
        }

        .destination-box {
            min-height: 320px;
        }

    }
</style>