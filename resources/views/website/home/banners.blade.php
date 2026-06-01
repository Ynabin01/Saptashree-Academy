@if(isset($banners) && count($banners) > 0)
    <div id="fullBannerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            @foreach($banners as $key => $banner)
                <div class="carousel-item @if($key == 0) active @endif">

                    <!-- Full screen media -->
                    @if($banner->video_url || $banner->main_attachment)
                        <video autoplay muted loop playsinline class="d-block w-100 carousel-media">
                            <source src="{{ $banner->video_url ?? '/uploads/main_attachment/' . $banner->main_attachment }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @elseif($banner->banner_image)
                        <img src="{{ $banner->banner_image }}" class="d-block w-100 carousel-media" alt="Banner Image">
                    @endif

                    <!-- Overlay content centered -->
                    <!-- <div
                        class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center h-100 px-3">
                        <h1 class="banner-title">
                            {!! htmlspecialchars_decode($banner->caption ?? '') !!}
                        </h1>
                        <h2 class="banner-short-content mt-2">
                            {!! htmlspecialchars_decode($banner->short_content ?? '') !!}
                        </h2>
                        <h2 class="banner-long-content mt-3">
                            {!! htmlspecialchars_decode($banner->long_content ?? '') !!}
                        </h2>
                    </div> -->
                </div>
            @endforeach
        </div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#fullBannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#fullBannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <!-- Indicators -->
        <div class="carousel-indicators">
            @foreach($banners as $key => $banner)
                <button type="button" data-bs-target="#fullBannerCarousel" data-bs-slide-to="{{ $key }}"
                    class="@if($key == 0) active @endif" aria-current="@if($key == 0) true @endif"
                    aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
    </div>
@endif

