@extends("layouts.master")

@section('content')

<style>
body {
    background: #eef2f7;
    font-family: 'Segoe UI', sans-serif;
}
</style>

<!-- HERO -->
<div class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-box">
            <!-- BREADCRUMB -->
            <div class="breadcrumb-line">
                <a href="/">Home</a>
                <span>/</span>
                <span>{{ $slug1->caption ?? $slug1 }}</span>
            </div>
            <!-- TITLE -->
            <h1 class="hero-title">
                {{ $slug2->caption ?? $slug2 }}
            </h1>
        </div>
    </div>
</div>
<br><br>
<!-- CONTENT -->
<div class="content-wrap">
    <div class="content-card">
        <!-- SHORT CONTENT HIGHLIGHT -->
        <div class="short-box">
            @php echo $normal->short_content; @endphp
        </div>

        <!-- LONG CONTENT -->
        <div class="content-text">
            @if (!empty($normal->main_attachment))
            <img src="/uploads/main_attachment/{{$normal->main_attachment}}" class="float-img" alt="">
            @endif
            @php echo $normal->long_content; @endphp
        </div>
        <!-- BANNER -->
        @if (!empty($normal->banner_image))
        <img src="{{ $normal->banner_image }}" class="banner-img" alt="">
        @endif
    </div>
</div>

@endsection