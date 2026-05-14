<div class="blog-lux-section">

    <div class="container">
        <!-- HEADER -->
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="tag">Our Blogs</div>

            <h2 class="title">
                Recent <span> Blog </span>Post
            </h2>
            <p class="sub">
                Insights, stories and updates from our learning community
            </p>
        </div>
        @php
        $items = $blogs->childs->sortByDesc('updated_at')->values();
        @endphp
        <div class="lux-grid">
            <!-- FEATURE -->
            <div class="lux-feature">
                @if(isset($items[0]))
                <a href="{{$blogs->nav_name}}/{{$items[0]->nav_name}}" class="lux-feature-img">
                    <img src="{{$items[0]->banner_image ?? ''}}">
                    <div class="overlay"></div>
                </a>
                <div class="lux-feature-content">
                    <span class="tag">Featured</span>
                    <h3>{{$items[0]->caption}}</h3>
                    <p>{{$items[0]->short_content ?? ''}}</p>
                    <a class="lux-btn" href="{{$blogs->nav_name}}/{{$items[0]->nav_name}}">
                        Read Full Story →
                    </a>
                </div>
                @endif
            </div>
            <!-- SIDE -->
            <div class="lux-side">
                @foreach($items as $blog)
                @if(!$loop->first && $loop->iteration <= 5) <div class="lux-card">
                    <a href="{{$blogs->nav_name}}/{{$blog->nav_name}}" class="lux-thumb">
                        <img src="{{$blog->banner_image ?? ''}}">
                    </a>
                    <div class="lux-info">
                        <h4>{{$blog->caption}}</h4>
                        <p>{{$blog->short_content ?? ''}}</p>
                        <a href="{{$blogs->nav_name}}/{{$blog->nav_name}}">Read →</a>
                    </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>
</div>
<style>
.blog-lux-section {
    padding: 90px 0;
    color: #fff;

    background: url('/website/img/school-supplies.webp') no-repeat center center;
    background-size: cover;
}

/* HEADER */
.lux-header {
    text-align: center;
    margin-bottom: 50px;
}

.lux-header h2 {
    font-size: 38px;
    font-weight: 800;
}

.lux-header h2 span {
    color: #ec4899;
}

.lux-header p {
    color: rgba(255, 255, 255, 0.6);
}

/* GRID */
.lux-grid {
    display: grid;
    grid-template-columns: 1.3fr 1fr;
    gap: 28px;
}

/* FEATURE CARD (FIXED SIZE BALANCE) */
.lux-feature {
    background: rgba(0, 0, 0, 0.75);
    border-radius: 22px;
    overflow: hidden;
    border: 1px solid rgba(0, 0, 0, 0.77);
}

/* ✅ FIXED IMAGE SIZE (IMPORTANT) */
.lux-feature-img {
    display: block;
    height: 275px;
    /* balanced hero size */
    overflow: hidden;
    position: relative;
}

.lux-feature-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s ease;
}

.lux-feature:hover img {
    transform: scale(1.05);
}

.overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.65), transparent);
}

/* CONTENT */
.lux-feature-content {
    padding: 22px;
}

.tag {
    background: linear-gradient(90deg, #4f46e5, #ec4899);
    padding: 5px 12px;
    font-size: 12px;
    border-radius: 20px;
}

/* SIDE CARDS */
.lux-side {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-top: 25px;
}

/* ✅ FIXED SIDE IMAGE SIZE */
.lux-card {
    display: flex;
    gap: 14px;
    padding: 12px;
    border-radius: 16px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.07);
}

/* bigger thumbnails (IMPORTANT FIX) */
.lux-thumb img {
    width: 140px;
    height: 110px;
    object-fit: cover;
    border-radius: 12px;
}

/* TEXT */
.lux-info h4 {
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 4px;
}

.lux-info p {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.6);
    line-height: 1.4;

    /* prevents overflow mess */
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.lux-info a {
    font-size: 13px;
    color: #ec4899;
    font-weight: 700;
    text-decoration: none;
}

/* RESPONSIVE */
@media(max-width:992px) {
    .lux-grid {
        grid-template-columns: 1fr;
    }

    .lux-feature-img {
        height: 260px;
        /* mobile optimized */
    }

    .lux-thumb img {
        width: 120px;
        height: 90px;
    }
}
</style>