<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<section class="edu-section">

    <div class="container">

        <!-- HEADER -->

        <div class="section-header text-center">
            <span class="section-tag">
                School Programs
            </span>
            <h2 class="section-title">
                <span class="light-text">Learning</span>
                Programs &
                <span class="gradient-text">Student Growth</span>
            </h2>
            <p class="section-subtitle">
                Simple structured learning for academic and personal development.
            </p>
        </div>


        <div class="row g-4 align-items-start">

            <!-- LEFT -->
            <div class="col-lg-4">

                <div class="left-box">

                    <div class="icon">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>

                    <h4>Future Ready Students</h4>

                    <p>
                        We focus on discipline, skills, and practical knowledge.
                    </p>

                    <ul class="simple-list">

                        @foreach ($services->childs->sortByDesc('created_at')->take(3) as $sub)

                        <li>
                            <strong>{{$sub->caption}}</strong><br>
                            <small>
                                {!! \Illuminate\Support\Str::limit(strip_tags($sub->short_content), 60) !!}
                            </small>
                        </li>

                        @endforeach

                    </ul>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="col-lg-8">

                <div class="card-grid">

                    @foreach ($services->childs->sortByDesc('created_at')->take(3) as $sub)

                    <div class="edu-card">

                        <div class="edu-img">
                            <img src="{{$sub->banner_image}}" alt="">
                        </div>

                        <div class="edu-body">

                            <span>Program {{$loop->iteration}}</span>

                            <h5>{{$sub->caption}}</h5>

                            <p>
                                {!! \Illuminate\Support\Str::limit(strip_tags($sub->short_content), 75) !!}
                            </p>

                            <a href="{{$sub->nav_name}}/@if ($child = $sub->childs->first()){{$child->nav_name}}@endif">
                                Explore →
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

</style>