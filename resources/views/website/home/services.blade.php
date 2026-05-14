<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

<section class="edu-section">

  <div class="container">

    <!-- HEADER -->
    <div class="edu-header text-center">

      <span class="tag">OUR PROGRAMS</span>

      <h2>
        Learning Programs & <span>Student Growth</span>
      </h2>

      <p>
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

/* SECTION (CLEAN SMALL STYLE) */
.edu-section{
  padding:60px 0;
  background:#0b1220;
}

/* HEADER */
.edu-header{
  max-width:650px;
  margin:0 auto 35px;
}

.tag{
  font-size:12px;
  padding:5px 12px;
  background:#1e293b;
  color:#38bdf8;
  border-radius:20px;
  display:inline-block;
  margin-bottom:10px;
}

.edu-header h2{
  font-size:1.9rem;
  color:#fff;
  font-weight:700;
}

.edu-header span{
  color:#38bdf8;
}

.edu-header p{
  color:#94a3b8;
  font-size:.9rem;
}

/* LEFT BOX (CLEAN) */
.left-box{
  background:#111827;
  padding:20px;
  border-radius:14px;
  color:#fff;
}

.left-box .icon{
  width:42px;
  height:42px;
  background:#38bdf8;
  border-radius:10px;
  display:flex;
  align-items:center;
  justify-content:center;
  margin-bottom:12px;
}

.left-box h4{
  font-size:1.1rem;
  margin-bottom:8px;
}

.left-box p{
  font-size:.85rem;
  color:#cbd5e1;
}

/* LIST */
.simple-list{
  list-style:none;
  padding:0;
  margin-top:15px;
}

.simple-list li{
  padding:10px 0;
  border-top:1px solid #1f2937;
}

.simple-list small{
  color:#94a3b8;
  font-size:.8rem;
}

/* GRID */
.card-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:14px;
}

/* CARD (VERY CLEAN SMALL STYLE) */
.edu-card{
  background:#111827;
  border-radius:14px;
  overflow:hidden;
  transition:.3s;
}

.edu-card:hover{
  transform:translateY(-4px);
}

.edu-img{
  height:235px;
  overflow:hidden;
}

.edu-img img{
  width:100%;
  height:100%;
  object-fit:cover;
}

.edu-body{
  padding:12px;
}

.edu-body span{
  font-size:.7rem;
  color:#38bdf8;
}

.edu-body h5{
  font-size:.95rem;
  color:#fff;
  margin:5px 0;
}

.edu-body p{
  font-size:.8rem;
  color:#94a3b8;
  margin-bottom:8px;
}

.edu-body a{
  font-size:.85rem;
  color:#38bdf8;
  text-decoration:none;
}

/* RESPONSIVE */
@media(max-width:991px){
  .card-grid{
    grid-template-columns:1fr;
  }
}
</style>