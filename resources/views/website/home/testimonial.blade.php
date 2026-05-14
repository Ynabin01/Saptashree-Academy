<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<div class="marquee-testimonial">

    <div class="container">

        <!-- HEADER -->
        <div class="text-center mb-5"
             data-aos="fade-up">

            <div class="tag">TESTIMONIALS</div>

            <h2 class="title">
                What Students <span>Say</span>
            </h2>

            <p class="sub">
                Real feedback from our students and partners.
            </p>

        </div>

        <!-- SWIPER -->
        <div class="swiper testimonial-swiper">

            <div class="swiper-wrapper">

                @foreach ($testimonial as $test)

                    <div class="swiper-slide">

                        <div class="card">

                            <div class="top">
                                <img src="{{ $test->banner_image ?? '' }}">
                                <div>
                                    <h4>{{ $test->caption }}</h4>
                                    <span>{{ $test->short_content }}</span>
                                </div>
                            </div>

                            <p>
                                {!! htmlspecialchars_decode($test->long_content ?? '') !!}
                            </p>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
new Swiper('.testimonial-swiper', {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,

    speed: 6000,   // smooth continuous motion
    autoplay: {
        delay: 0,  // IMPORTANT: continuous
        disableOnInteraction: false,
    },

    freeMode: true,
    freeModeMomentum: false,

    breakpoints: {
        0: { slidesPerView: 1.2 },
        768: { slidesPerView: 2 },
        992: { slidesPerView: 3 }
    }
});
</script>

<style>

/* =========================
SECTION
========================= */

.marquee-testimonial{
    padding:100px 0;
    background: radial-gradient(circle at top,#26488d,#070b14);
    overflow:hidden;
}

/* HEADER */

.tag{
    display:inline-block;
    padding:6px 14px;
    border-radius:999px;
    color:#7dd3fc;
    background:rgba(255, 255, 255, 0.38);
    font-size:.75rem;
    letter-spacing:2px;
}

.title{
    font-size:2.6rem;
    font-weight:800;
    color:#fff;
}

.title span{
    color:#38bdf8;
}

.sub{
    color:rgba(255,255,255,0.6);
}

/* CARD */

.card{
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    border-radius:22px;
    padding:22px;
    backdrop-filter:blur(14px);
    transition:.3s ease;
    height:100%;
}

.card:hover{
    transform:translateY(-8px) scale(1.02);
    border-color:rgba(56,189,248,.3);
}

/* TOP */

.top{
    display:flex;
    gap:12px;
    align-items:center;
    margin-bottom:14px;
}

.top img{
    width:50px;
    height:50px;
    border-radius:50%;
    object-fit:cover;
    border:2px solid #38bdf8;
}

.top h4{
    color:#fff;
    margin:0;
    font-size:1rem;
}

.top span{
    font-size:.8rem;
    color:rgba(255,255,255,0.55);
}

/* TEXT */

.card p{
    color:rgba(255,255,255,0.7);
    font-size:.92rem;
    line-height:1.6;
}

/* RESPONSIVE */

@media(max-width:768px){
    .title{
        font-size:1rem;
    }
}
</style>