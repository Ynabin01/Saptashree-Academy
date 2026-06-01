@extends("layouts.master")
@section('content')

<!-- HERO -->
<section class="x-hero">
    <div class="container text-center">

        <div class="x-badge">
            Our Services
        </div>

        <h1>{{ $slug1->caption ?? $slug1 }}</h1>

        <p>
            Smart, modern and result-driven services built with precision and innovation.
            We help you grow faster with technology and strategy.
        </p>

    </div>
</section>

<!-- SERVICES -->
<section class="x-wrap">
    <div class="container">

        <div class="row g-4">

            @foreach ($services->sortByDesc('created_at') as $sub)

            <div class="col-lg-6" data-aos="fade-up">

                <div class="x-card">

                    <!-- IMAGE -->
                    <div class="x-img">
                        <img src="{{ $sub->banner_image }}" alt="">
                    </div>

                    <!-- CONTENT -->
                    <div class="x-body">

                        <div class="x-tag">Service</div>

                        <h2>{{ $sub->caption }}</h2>

                        <p>
                            @php echo Str::limit(strip_tags($sub->short_content), 140); @endphp
                        </p>

                        <a href="{{ $sub->nav_name }}/@if($child = $sub->childs->first()){{ $child->nav_name }} @endif"
                           class="x-btn">
                            Explore Service →
                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>
</section>

<style>

</style>

<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init({
    duration:800,
    once:true
});
</script>

@endsection