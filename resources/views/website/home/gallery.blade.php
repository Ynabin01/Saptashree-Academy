<div class="gallery-modern">

    <!-- BACKGROUND LINES (KEEP THIS STYLE YOU LIKED) -->
    <div class="bg-lines"></div>

    <div class="container">

        <!-- HEADER -->
        <div class="gallery-head text-center mb-5"
             data-aos="fade-up">

            <div class="tag">GALLERY</div>

            <h2>
                Captured <span>Moments</span>
            </h2>

            <p>
                A modern collection of memories and visual stories.
            </p>

        </div>

        <!-- GRID -->
        <div class="gallery-grid-modern">

            @foreach ($photos->childs->sortByDesc('updated_at') as $photo)

                @if ($loop->iteration < 5)

                    <?php
                        $images = App\Models\NavigationItems::where('navigation_id', $photo->id)
                            ->latest()->get();
                    ?>

                    <a href="{{ route('GOTOGALLERY', $photo->nav_name) }}"
                       class="gallery-card-modern"
                       data-aos="zoom-in">

                        <!-- IMAGE -->
                        <div class="img-box">

                            <img src="{{ $photo->banner_image }}"
                                 alt="{{ $photo->caption }}">

                            <div class="overlay"></div>

                            <div class="count">
                                {{ count($images) }} photos
                            </div>

                        </div>

                        <!-- TEXT -->
                        <div class="content">

                            <h3>{{ $photo->caption }}</h3>

                            <div class="meta">
                                {{ \Carbon\Carbon::parse($photo->updated_at)->format('M d, Y') }}
                            </div>

                        </div>

                    </a>

                @endif

            @endforeach

        </div>

    </div>

</div>

<style>

/* =========================
BACKGROUND (KEEP + IMPROVED)
========================= */

.gallery-modern{
    position:relative;
    padding:90px 0;
    background:#0b1220;
    overflow:hidden;
}

/* ALBUM STYLE LINES (YOUR FAVORITE PART) */
.bg-lines{
    position:absolute;
    inset:0;
    background:
        repeating-linear-gradient(
            90deg,
            rgba(255,255,255,0.05) 0px,
            rgba(255,255,255,0.05) 1px,
            transparent 1px,
            transparent 140px
        ),
        repeating-linear-gradient(
            0deg,
            rgba(255,255,255,0.03) 0px,
            rgba(255,255,255,0.03) 1px,
            transparent 1px,
            transparent 100px
        );
    opacity:.25;
}

/* =========================
HEADER
========================= */

.gallery-head{
    position:relative;
    z-index:2;
    max-width:650px;
    margin:auto;
}

.tag{
    display:inline-block;
    padding:6px 14px;
    border-radius:999px;
    background:rgba(255,255,255,0.06);
    color:#7dd3fc;
    font-size:.75rem;
    letter-spacing:2px;
    margin-bottom:12px;
}

.gallery-head h2{
    font-size:2.5rem;
    font-weight:800;
    color:#fff;
}

.gallery-head h2 span{
    color:#38bdf8;
}

.gallery-head p{
    color:rgba(255,255,255,0.6);
    margin-top:10px;
}

/* =========================
GRID
========================= */

.gallery-grid-modern{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:22px;
    position:relative;
    z-index:2;
}

/* =========================
CARD (MODERN CLEAN STYLE)
========================= */

.gallery-card-modern{
    display:block;
    text-decoration:none;
    border-radius:18px;
    overflow:hidden;
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    transition:.35s ease;
    backdrop-filter:blur(10px);
}

.gallery-card-modern:hover{
    transform:translateY(-8px);
    border-color:rgba(56,189,248,0.35);
}

/* IMAGE */

.img-box{
    position:relative;
    height:210px;
    overflow:hidden;
}

.img-box img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:1s ease;
}

.gallery-card-modern:hover img{
    transform:scale(1.08);
}

/* OVERLAY */

.overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(to top,
        rgba(0,0,0,0.75),
        rgba(0,0,0,0.2));
}

/* COUNT BADGE */

.count{
    position:absolute;
    top:12px;
    right:12px;
    background:rgba(0,0,0,0.4);
    color:#fff;
    font-size:.72rem;
    padding:5px 10px;
    border-radius:999px;
    backdrop-filter:blur(10px);
}

/* CONTENT */

.content{
    padding:14px 16px;
}

.content h3{
    font-size:1.05rem;
    color:#fff;
    font-weight:700;
    margin-bottom:4px;
}

.meta{
    font-size:.8rem;
    color:rgba(255,255,255,0.6);
}

/* =========================
RESPONSIVE
========================= */

@media(max-width:768px){

    .gallery-head h2{
        font-size:2rem;
    }

    .img-box{
        height:180px;
    }

}

@media(max-width:480px){

    .gallery-grid-modern{
        grid-template-columns:1fr;
    }

}

</style>