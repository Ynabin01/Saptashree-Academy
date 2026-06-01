@extends("layouts.master")

@section('content')

<!-- ===================================
AOS ANIMATION LIBRARY (ADD ONCE)
=================================== -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({ duration: 700, once: true });
});
</script>

<!-- ===================================
HERO SECTION
=================================== -->
<div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-box">
            <!-- BREADCRUMB -->
            <div class="breadcrumb-line">
                <a href="/">Home</a>
                <span>/</span>
                <span> Blogs • News • Notices</span>
            </div>
            <!-- TITLE -->
            <h1 class="hero-title">
                {{ $slug1->caption ?? $slug1 }}
            </h1>
        </div>
    </div>
</div>
 
<!-- ===================================
TOOLS (SEARCH + FILTER)
=================================== -->

<section class="nbp-tools" data-aos="fade-up">

    <div class="nbp-tools-inner">

        <!-- SEARCH -->
        <form action="{{ route('search') }}" method="GET" class="nbp-search" data-aos="zoom-in">

            <i class="fa fa-search"></i>

            <input type="text"
                   name="slug"
                   value="@if(isset($slug2)){{$slug2}}@endif"
                   placeholder="Search blogs, news or notices...">

            <input type="hidden" name="content" value="{{request()->input('content')}}">

        </form>

        <!-- FILTER -->
        <div class="nbp-filters" data-aos="fade-left">

            <a href="{{ route('search', ['content' => 'blogs']) }}"
               class="{{ request()->input('content') == 'blogs' ? 'active' : '' }}">
                <i class="fa fa-book"></i> Blogs
            </a>

            <a href="{{ route('search', ['content' => 'news']) }}"
               class="{{ request()->input('content') == 'news' ? 'active' : '' }}">
                <i class="fa fa-bolt"></i> News
            </a>

            <a href="{{ route('search', ['content' => 'notices']) }}"
               class="{{ request()->input('content') == 'notices' ? 'active' : '' }}">
                <i class="fa fa-bell"></i> Notices
            </a>

        </div>

    </div>

</section>

<!-- ===================================
BLOG GRID
=================================== -->

<section class="nbp-section">

    <div class="nbp-container">

        <div class="nbp-grid">

            @foreach ($blogs as $group_project)

            <div class="nbp-card"
                 data-aos="fade-up"
                 data-aos-delay="{{ $loop->index * 50 }}">

                <!-- IMAGE -->
                <div class="nbp-img">

                    <img src="{{$group_project->banner_image ?? ''}}" alt="">

                    <div class="nbp-overlay"></div>

                    <div class="nbp-category">
                        <i class="fa fa-layer-group"></i>
                        {{$group_project->long_content}}
                    </div>

                    <div class="nbp-date">
                        <i class="fa fa-calendar"></i>
                        <span>{{ \Carbon\Carbon::parse($group_project->updated_at)->format('d') }}</span>
                        <small>{{ \Carbon\Carbon::parse($group_project->updated_at)->format('M') }}</small>
                    </div>

                </div>

                <!-- CONTENT -->
                <div class="nbp-body">

                    <div class="nbp-meta">
                        <span>
                            <i class="fa fa-clock"></i>
                            {{$group_project->icon_image_caption ?? ""}}
                        </span>

                        <span>
                            <i class="fa fa-star"></i>
                            Featured
                        </span>
                    </div>

                    <h3>
                        <a href="{{$slug1->nav_name}}/{{$group_project->nav_name}}">
                            {{$group_project->caption ?? ""}}
                        </a>
                    </h3>

                    <p>
                        {{$group_project->short_content ?? ""}}
                    </p>

                    <a class="nbp-btn" href="{{$slug1->nav_name}}/{{$group_project->nav_name}}">
                        Read More <i class="fa fa-arrow-right"></i>
                    </a>

                </div>

            </div>

            @endforeach

        </div>

        <div class="nbp-pagination">
            {{ $blogs->links('vendor.pagination.default copy') }}
        </div>

    </div>

</section>

@endsection