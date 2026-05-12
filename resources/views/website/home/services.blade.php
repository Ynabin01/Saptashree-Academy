<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<section class="program-wrapper">

    <div class="container">

        <!-- TITLE -->
        <div class="text-center mb-5">

            <h2 class="program-title">
                Learning Programs & <span>Student Development</span>
            </h2>

            <p class="program-subtitle">
                Guiding students step by step toward strong educational foundations and success.
            </p>

        </div>

        <div class="row">

            <!-- LEFT SMALL MENU -->
            <div class="col-lg-3">

                <div class="left-side-menu">

                    @foreach ($services->childs->sortByDesc('created_at') as $sub)

                    @if ($loop->iteration > 4)
                    @break
                    @endif

                    <div class="left-menu-item">

                        <i class="fas fa-circle"></i>

                        <div>
                            <h5>{{$sub->caption}}</h5>

                            <p>
                                {!! \Illuminate\Support\Str::limit(strip_tags($sub->short_content), 55) !!}
                            </p>
                        </div>

                    </div>

                    @endforeach

                </div>

            </div>

            <!-- RIGHT CONNECTED CARDS -->
            <div class="col-lg-9">

                <div class="connected-list">

                    @foreach ($services->childs->sortByDesc('created_at') as $sub)

                    @if ($loop->iteration > 4)
                    @break
                    @endif

                    <div class="connected-card">

                        <!-- IMAGE -->
                        <div class="connected-image">

                            <img src="{{$sub->banner_image}}" alt="">

                        </div>

                        <!-- TEXT BOX -->
                        <div class="connected-content">

                            <h4>{{$sub->caption}}</h4>

                            <p>
                                {!! \Illuminate\Support\Str::limit(strip_tags($sub->short_content), 90) !!}
                            </p>

                            <a href="{{$sub->nav_name}}/@if ($child = $sub->childs->first()){{$child->nav_name}}@endif">

                                Explore More →

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

/* SECTION */
.program-wrapper{
    background:linear-gradient(135deg,#4567d8,#2ecc71);
    padding:80px 0;
}

/* TITLE */
.program-title{
    color:#fff;
    font-size:2.7rem;
    font-weight:800;
}

.program-title span{
    color:#ffffff;
}

.program-subtitle{
    color:rgba(255,255,255,0.75);
    margin-top:10px;
}

/* LEFT MENU */
.left-side-menu{
    display:flex;
    flex-direction:column;
    gap:22px;
    padding-top:10px;
}

.left-menu-item{
    display:flex;
    gap:12px;
}

.left-menu-item i{
    color:#7fe3ff;
    font-size:8px;
    margin-top:8px;
}

.left-menu-item h5{
    color:#fff;
    font-size:.95rem;
    font-weight:700;
    margin-bottom:4px;
}

.left-menu-item p{
    color:rgba(255,255,255,0.65);
    font-size:.82rem;
    line-height:1.5;
    margin:0;
}

/* CONNECTED CARD */
.connected-list{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.connected-card{
    display:flex;
    align-items:stretch;
    overflow:hidden;
    border-radius:14px;
}

/* IMAGE */
.connected-image{
        width: 50%;
    /* min-width: 23%; */
    height: 115px;
}

.connected-image img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

/* CONTENT */
.connected-content{
    width:62%;
    background:rgba(255,255,255,0.08);
    backdrop-filter:blur(8px);
    padding:20px 24px;
    border:1px solid rgba(255,255,255,0.08);

    display:flex;
    flex-direction:column;
    justify-content:center;
}

.connected-content h4{
    color:#fff;
    font-size:1rem;
    font-weight:700;
    margin-bottom:6px;
}

.connected-content p{
    color:rgba(255,255,255,0.72);
    font-size:.84rem;
    line-height:1.5;
    margin-bottom:8px;
}

.connected-content a{
    color:#8ce5ff;
    text-decoration:none;
    font-size:.82rem;
    font-weight:600;
}

/* RESPONSIVE */
@media(max-width:991px){

    .left-side-menu{
        margin-bottom:30px;
    }

}

@media(max-width:767px){

    .connected-card{
        flex-direction:column;
    }

    .connected-image,
    .connected-content{
        width:100%;
    }

    .connected-image{
        height:180px;
    }

    .program-title{
        font-size:1.7rem;
    }

}

</style>