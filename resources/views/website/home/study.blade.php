<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<section class="modern-abroad-section">

    <!-- Floating Shapes -->
    <div class="floating-circle circle-one"></div>
    <div class="floating-circle circle-two"></div>

    <div class="container">

        <!-- HEADER -->
        <div class="section-header text-center">

            <span class="section-tag">
                Country Best Education Center
            </span>

            <h2 class="section-title">
                <span class="light-text">Learning</span>
                Opportunities
                <span class="gradient-text">and Programs</span>
            </h2>

            <p class="section-subtitle">
                Explore top countries offering quality education and global opportunities.
            </p>

        </div>

        <!-- GRID -->
        <div class="destination-layout">

            @foreach ($abroad as $sub)

                @php
                    $child = $sub->childs->first();

                    if ($child && !empty($child->nav_name)) {
                        $url = $sub->nav_name . '/' . $child->nav_name;
                    } else {
                        $url = url('/');
                    }
                @endphp

                <a href="{{ $url }}" class="destination-box">

                    <div class="destination-image">
                        <img src="{{ $sub->banner_image ?? '' }}" alt="{{ $sub->caption }}">
                    </div>

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
                            <h4>{{ $sub->caption }}</h4>
                            <p>Study • Explore • Grow</p>
                        </div>

                    </div>

                </a>

            @endforeach

        </div>

    </div>

</section>

<style>

/* =========================
SECTION WITH BACKGROUND IMAGE
========================= */
.modern-abroad-section{
    position:relative;
    overflow:hidden;
    padding:55px 0;

    /* BACKGROUND IMAGE ADDED */
    background:
        linear-gradient(rgba(6,18,38,0.92), rgba(6,18,38,0.92)),
        url("/website/img/depositphotos_.jpg"); /* 🔥 change image here */

    background-size:cover;
    background-position:center;
    background-attachment:fixed;
}

/* FLOATING SHAPES (SOFT ANIMATION) */
.floating-circle{
    position:absolute;
    border-radius:50%;
    filter:blur(60px);
    opacity:.08;
    animation: floatMove 6s ease-in-out infinite;
}

.circle-one{
    width:160px;
    height:160px;
    background:#2563eb;
    top:-60px;
    left:-60px;
}

.circle-two{
    width:140px;
    height:140px;
    background:#06b6d4;
    bottom:-60px;
    right:-60px;
    animation-delay:2s;
}

/* FLOAT ANIMATION */
@keyframes floatMove{
    0%,100%{ transform:translateY(0); }
    50%{ transform:translateY(15px); }
}

/* HEADER */
.section-header{
    max-width:680px;
    margin:0 auto 35px;
    animation: fadeUp 1s ease;
}

@keyframes fadeUp{
    from{ opacity:0; transform:translateY(20px); }
    to{ opacity:1; transform:translateY(0); }
}

.section-tag{
    display:inline-block;
    padding:6px 14px;
    border-radius:30px;
    background:rgba(255,255,255,.08);
    color:#7dd3fc;
    font-size:.75rem;
    margin-bottom:10px;
}

.section-title{
    font-size:1.9rem;
    font-weight:800;
    color:#fff;
}

.light-text{ color:#7dd3fc; }

.gradient-text{
    background:linear-gradient(90deg,#38bdf8,#14b8a6);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.section-subtitle{
    font-size:.9rem;
    color:rgba(255,255,255,.7);
}

/* GRID */
.destination-layout{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
    gap:14px;
}

/* CARD */
.destination-box{
    position:relative;
    overflow:hidden;
    border-radius:16px;
    min-height:270px;
    text-decoration:none;
    background:#111827;
    border:1px solid rgba(255,255,255,.06);

    /* SMOOTH ENTRY */
    animation: cardFade .8s ease both;
}

@keyframes cardFade{
    from{ opacity:0; transform:translateY(25px); }
    to{ opacity:1; transform:translateY(0); }
}

/* HOVER (CLEAN PREMIUM EFFECT) */
.destination-box:hover{
    transform:translateY(-6px) scale(1.01);
    border-color:rgba(56,189,248,.25);
    box-shadow:0 18px 35px rgba(0,0,0,.35);
    transition:.3s ease;
}

/* IMAGE */
.destination-image{
    position:absolute;
    inset:0;
}

.destination-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:0.6s ease;
}

.destination-box:hover img{
    transform:scale(1.06);
}

/* OVERLAY */
.destination-image::after{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(
        to top,
        rgba(2,6,23,.92) 25%,
        rgba(2,6,23,.2) 70%
    );
}

/* CONTENT */
.destination-info{
    position:relative;
    z-index:2;
    height:100%;
    padding:14px;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
}

/* ICONS */
.destination-top{
    display:flex;
    justify-content:space-between;
}

.destination-icon{
    width:40px;
    height:40px;
    border-radius:10px;
    background:rgba(255,255,255,.12);
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:.95rem;
    backdrop-filter:blur(10px);
}

.destination-arrow{
    width:34px;
    height:34px;
    border-radius:50%;
    background:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:.75rem;
    transition:.3s ease;
}

.destination-box:hover .destination-arrow{
    transform:rotate(15deg) scale(1.1);
}

/* TEXT */
.destination-bottom h4{
    font-size:1rem;
    color:#fff;
}

.destination-bottom p{
    font-size:.78rem;
    color:rgba(255,255,255,.7);
}

/* RESPONSIVE */
@media(max-width:768px){
    .section-title{
        font-size:1.6rem;
    }
}
</style>