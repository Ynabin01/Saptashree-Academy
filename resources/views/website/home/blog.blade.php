<div class="blog-lux-section">

    <div class="container">
        <!-- HEADER -->

        <div class="section-header text-center">
            <span class="section-tag">
                Blogs/News/Notice
            </span>
            <h2 class="section-title">
                <span class="light-text">Our</span>
                Recent
                <span class="gradient-text">Blog</span>
            </h2>
            <p class="section-subtitle">
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

</style>