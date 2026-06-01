@extends("layouts.master")

@section('content')

<!-- =========================
MODERN HERO
========================= -->

<div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-box">
            <!-- BREADCRUMB -->
            <div class="breadcrumb-line">
                <a href="/">Home</a>
                <span>/</span>
                <span>Contact</span>
            </div>
            <!-- TITLE -->
            <h1 class="hero-title">
                Contact Us
            </h1>
        </div>
    </div>
</div>

<!-- =========================
MODERN CONTACT GRID
========================= -->

<section class="x-contact">

    <div class="container">

        <div class="x-grid">

            <!-- LEFT INFO PANEL -->
            <div class="x-info">

                <div class="x-card">

                    <div class="x-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>

                    <div>
                        <h4>Office Address</h4>
                        <p>{{ $global_setting->website_full_address }}</p>
                    </div>

                </div>

                <div class="x-card">

                    <div class="x-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>

                    <div>
                        <h4>Phone</h4>
                        <p>{{ $global_setting->phone }}</p>
                    </div>

                </div>

                <div class="x-card">

                    <div class="x-icon">
                        <i class="far fa-envelope"></i>
                    </div>

                    <div>
                        <h4>Email</h4>
                        <p>{{ $global_setting->site_email }}</p>
                    </div>

                </div>

                <div class="x-note">
                    We are available Sunday – Friday, 9AM to 6PM
                </div>

            </div>

            <!-- RIGHT FORM PANEL -->
            <div class="x-form">

                <h2>Send Message</h2>

                <form action="{{ route('contactstore') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="x-row">

                        <input type="text" name="first_name" placeholder="Full Name">

                        <input type="email" name="email" placeholder="Email Address">

                    </div>

                    <input type="text" name="subject" placeholder="Subject">

                    <textarea name="message" placeholder="Write your message..."></textarea>

                    <button type="submit">
                        Send Message
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>

<!-- =========================
MAP
========================= -->

<section class="x-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.7537180684208!2d87.68190137543066!3d26.656366776800954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e58f83e5b05c25%3A0x17df51262106fc70!2sSaptashree%20Academy!5e0!3m2!1sen!2snp!4v1778857420410!5m2!1sen!2snp"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


</section>

<!-- =========================
STYLE (MODERN 2026 UI)
========================= -->

<style>
/* GLOBAL */
body {
    background: #f8fafc;
    font-family: system-ui, -apple-system, Segoe UI;
    color: #0f172a;
}

/* HERO */
.x-hero {
    padding: 90px 0 60px;
}

.x-breadcrumb {
    font-size: 14px;
    color: #64748b;
    margin-bottom: 12px;
}

.x-breadcrumb a {
    color: #0f172a;
    text-decoration: none;
}

.x-title {
    font-size: 48px;
    font-weight: 900;
    letter-spacing: -1px;
}

.x-sub {
    color: #64748b;
    margin-top: 10px;
    max-width: 600px;
}

/* GRID */
.x-contact {
    padding: 40px 0 80px;
}

.x-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 30px;
}

/* LEFT INFO */
.x-info {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.x-card {
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(10px);
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 18px;
    display: flex;
    gap: 15px;
    align-items: center;
    transition: 0.3s;
}

.x-card:hover {
    transform: translateY(-4px);
}

.x-icon {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: #4f46e5;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* NOTE */
.x-note {
    margin-top: 10px;
    font-size: 13px;
    color: #64748b;
}

/* FORM */
.x-form {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-radius: 20px;
    padding: 30px;
}

.x-form h2 {
    font-size: 24px;
    margin-bottom: 20px;
    font-weight: 800;
}

.x-form input,
.x-form textarea {
    width: 100%;
    padding: 14px 15px;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    margin-bottom: 15px;
    outline: none;
    transition: 0.3s;
    font-size: 14px;
}

.x-form input:focus,
.x-form textarea:focus {
    border-color: #4f46e5;
}

.x-form textarea {
    height: 140px;
    resize: none;
}

.x-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
}

.x-form button {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 12px;
    background: #4f46e5;
    color: #fff;
    font-weight: 700;
    cursor: pointer;
    transition: 0.3s;
}

.x-form button:hover {
    background: #3730a3;
}

/* MAP */
.x-map iframe {
    width: 100%;
    height: 320px;
    border: 0;
}

/* RESPONSIVE */
@media(max-width:992px) {
    .x-grid {
        grid-template-columns: 1fr;
    }

    .x-title {
        font-size: 34px;
    }
}
</style>

@endsection