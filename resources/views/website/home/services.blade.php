<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<section class="education-programs">

    <!-- Floating Shapes -->
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>

    <div class="container position-relative">

        <!-- HEADER -->
        <div class="section-heading text-center">

            <span class="mini-title">
                OUR LEARNING JOURNEY
            </span>

            <h2>
                Learning Programs &
                <span>Student Development</span>
            </h2>

            <p>
                Empowering students with knowledge, discipline, creativity,
                and confidence through structured learning experiences.
            </p>

        </div>

        <div class="row g-4 align-items-start">

            <!-- LEFT FEATURE PANEL -->
            <div class="col-lg-4">

                <div class="feature-panel">

                    <div class="feature-top">

                        <div class="feature-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <h3>
                            Building Future Leaders
                        </h3>

                        <p>
                            We focus on academic excellence, practical skills,
                            creativity, and character development for every student.
                        </p>

                    </div>

                    <div class="feature-list">

                        @foreach ($services->childs->sortByDesc('created_at') as $sub)

                        @if ($loop->iteration > 4)
                        @break
                        @endif

                        <div class="feature-item">

                            <div class="feature-dot"></div>

                            <div>
                                <h5>{{$sub->caption}}</h5>

                                <span>
                                    {!! \Illuminate\Support\Str::limit(strip_tags($sub->short_content), 60) !!}
                                </span>
                            </div>

                        </div>

                        @endforeach

                    </div>

                </div>

            </div>

            <!-- RIGHT CARDS -->
            <div class="col-lg-8">

                <div class="program-grid">

                    @foreach ($services->childs->sortByDesc('created_at') as $sub)

                    @if ($loop->iteration > 4)
                    @break
                    @endif

                    <div class="program-card">

                        <!-- IMAGE -->
                        <div class="program-image">

                            <img src="{{$sub->banner_image}}" alt="">

                            <div class="image-overlay"></div>

                        </div>

                        <!-- CONTENT -->
                        <div class="program-content">

                            <div class="top-content">

                                <div class="card-badge">
                                    Program {{$loop->iteration}}
                                </div>

                                <h4>{{$sub->caption}}</h4>

                                <p>
                                    {!! \Illuminate\Support\Str::limit(strip_tags($sub->short_content), 110) !!}
                                </p>

                            </div>

                            <a href="{{$sub->nav_name}}/@if ($child = $sub->childs->first()){{$child->nav_name}}@endif"
                               class="program-btn">

                                Explore Program

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>

                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>

<style>

/* =========================
SECTION
========================= */

.education-programs{
    position:relative;
    overflow:hidden;
    padding:100px 0;
    background:
    radial-gradient(circle at top left,#4f46e5 0%,transparent 35%),
    radial-gradient(circle at bottom right,#06b6d4 0%,transparent 35%),
    linear-gradient(135deg,#071028,#0f172a,#111827);
}

/* FLOATING SHAPES */

.shape{
    position:absolute;
    border-radius:50%;
    filter:blur(60px);
    opacity:.18;
}

.shape-1{
    width:260px;
    height:260px;
    background:#38bdf8;
    top:-60px;
    left:-60px;
}

.shape-2{
    width:220px;
    height:220px;
    background:#8b5cf6;
    bottom:-40px;
    right:-30px;
}

.shape-3{
    width:160px;
    height:160px;
    background:#14b8a6;
    top:40%;
    left:45%;
}

/* =========================
HEADING
========================= */

.section-heading{
    max-width:760px;
    margin:auto;
    margin-bottom:65px;
}

.mini-title{
    display:inline-block;
    padding:8px 18px;
    border-radius:50px;
    background:rgba(255,255,255,0.08);
    color:#7dd3fc;
    font-size:.8rem;
    font-weight:700;
    letter-spacing:1px;
    margin-bottom:18px;
    border:1px solid rgba(255,255,255,0.08);
}

.section-heading h2{
    color:#fff;
    font-size:3rem;
    font-weight:800;
    line-height:1.2;
}

.section-heading h2 span{
    background:linear-gradient(90deg,#38bdf8,#22c55e);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.section-heading p{
    color:rgba(255,255,255,.72);
    margin-top:18px;
    font-size:1rem;
    line-height:1.8;
}

/* =========================
LEFT PANEL
========================= */

.feature-panel{
    position:sticky;
    top:40px;
    background:rgba(255,255,255,0.06);
    backdrop-filter:blur(14px);
    border:1px solid rgba(255,255,255,0.08);
    border-radius:28px;
    padding:35px;
    overflow:hidden;
}

.feature-panel::before{
    content:'';
    position:absolute;
    width:180px;
    height:180px;
    background:linear-gradient(135deg,#38bdf8,#8b5cf6);
    border-radius:50%;
    top:-100px;
    right:-100px;
    opacity:.15;
}

.feature-icon{
    width:70px;
    height:70px;
    border-radius:22px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:1.5rem;
    color:#fff;
    background:linear-gradient(135deg,#38bdf8,#6366f1);
    margin-bottom:22px;
    box-shadow:0 15px 30px rgba(56,189,248,.25);
}

.feature-top h3{
    color:#fff;
    font-size:1.5rem;
    font-weight:800;
    margin-bottom:14px;
}

.feature-top p{
    color:rgba(255,255,255,.7);
    line-height:1.7;
    margin-bottom:30px;
}

.feature-list{
    display:flex;
    flex-direction:column;
    gap:22px;
}

.feature-item{
    display:flex;
    gap:14px;
}

.feature-dot{
    width:11px;
    height:11px;
    border-radius:50%;
    background:#38bdf8;
    margin-top:7px;
    box-shadow:0 0 15px #38bdf8;
}

.feature-item h5{
    color:#fff;
    font-size:1rem;
    font-weight:700;
    margin-bottom:5px;
}

.feature-item span{
    color:rgba(255,255,255,.65);
    font-size:.86rem;
    line-height:1.6;
}

/* =========================
PROGRAM GRID
========================= */

.program-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:28px;
}

/* CARD */

.program-card{
    position:relative;
    background:rgba(255,255,255,0.06);
    border:1px solid rgba(255,255,255,0.08);
    border-radius:28px;
    overflow:hidden;
    backdrop-filter:blur(12px);
    transition:.45s ease;
}

.program-card:hover{
    transform:translateY(-10px);
    border-color:rgba(56,189,248,.4);
    box-shadow:0 25px 60px rgba(0,0,0,.35);
}

/* IMAGE */

.program-image{
    position:relative;
    height:230px;
    overflow:hidden;
}

.program-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:1s ease;
}

.program-card:hover img{
    transform:scale(1.08);
}

.image-overlay{
    position:absolute;
    inset:0;
    background:linear-gradient(to top,
    rgba(7,16,40,.85),
    rgba(7,16,40,.05));
}

/* CONTENT */

.program-content{
    padding:28px;
}

.card-badge{
    display:inline-flex;
    align-items:center;
    gap:8px;
    background:rgba(56,189,248,.12);
    color:#7dd3fc;
    padding:7px 14px;
    border-radius:50px;
    font-size:.75rem;
    font-weight:700;
    margin-bottom:18px;
    border:1px solid rgba(56,189,248,.18);
}

.program-content h4{
    color:#fff;
    font-size:1.2rem;
    font-weight:800;
    margin-bottom:12px;
}

.program-content p{
    color:rgba(255,255,255,.68);
    font-size:.92rem;
    line-height:1.7;
    margin-bottom:24px;
}

/* BUTTON */

.program-btn{
    display:inline-flex;
    align-items:center;
    gap:10px;
    padding:12px 20px;
    border-radius:14px;
    text-decoration:none;
    color:#fff;
    font-weight:600;
    background:linear-gradient(135deg,#38bdf8,#6366f1);
    transition:.35s ease;
}

.program-btn:hover{
    color:#fff;
    transform:translateX(4px);
    box-shadow:0 10px 25px rgba(56,189,248,.3);
}

/* =========================
RESPONSIVE
========================= */

@media(max-width:991px){

    .feature-panel{
        position:relative;
        top:0;
        margin-bottom:20px;
    }

    .program-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:767px){

    .education-programs{
        padding:70px 0;
    }

    .section-heading h2{
        font-size:2rem;
    }

    .feature-panel{
        padding:25px;
    }

    .program-image{
        height:210px;
    }

    .program-content{
        padding:22px;
    }

}

</style>