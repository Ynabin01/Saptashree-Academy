<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap"
  rel="stylesheet">

<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init({
    once: true,
    duration: 1200
  });
</script>

<style>
  :root {
    --primary-blue: #003b8e;
    --primary-green: #0b9b46;
    --light-green: #16c060;
    --dark: #111827;
    --gray: #6b7280;
    --white: #ffffff;
  }

  * {
    font-family: 'Manrope', sans-serif;
  }

  #unique-container {
    position: relative;
    padding: 90px 0;
    overflow: hidden;
  }

  /* Background Blur */
  #unique-container::before {
    content: "";
    position: absolute;
    width: 450px;
    height: 450px;
    background: rgba(11, 155, 70, 0.08);
    border-radius: 50%;
    top: -120px;
    left: -100px;
    filter: blur(40px);
  }

  #unique-container::after {
    content: "";
    position: absolute;
    width: 450px;
    height: 450px;
    background: rgba(0, 59, 142, 0.08);
    border-radius: 50%;
    bottom: -120px;
    right: -100px;
    filter: blur(40px);
  }

  /* Main Box */
  .advanced-section {
    position: relative;
    z-index: 2;
    background: #fff;
    border-radius: 35px;
    overflow: hidden;
    box-shadow:
      0 20px 50px rgba(0, 0, 0, 0.06),
      0 10px 25px rgba(0, 59, 142, 0.04);
  }

  /* Left Side */
  .image-side {
    position: relative;
    background:
      linear-gradient(rgba(0, 59, 142, 0.82),
        rgba(11, 155, 70, 0.82)),
      url('{!! htmlspecialchars_decode($about->banner_image ?? '') !!}');
    background-size: cover;
    background-position: center;
    min-height: 100%;
    padding: 80px 50px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* Floating Glass Card */
  .glass-card {
    backdrop-filter: blur(14px);
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 35px;
    border-radius: 30px;
    text-align: center;
    max-width: 420px;
    width: 100%;
    animation: floatCard 4s ease-in-out infinite;
  }

  @keyframes floatCard {
    0% {
      transform: translateY(0px);
    }

    50% {
      transform: translateY(-12px);
    }

    100% {
      transform: translateY(0px);
    }
  }

  .glass-card img {
    width: 100%;
    max-width: 320px;
    border-radius: 22px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
  }

  /* Right Side */
  .content-side {
    padding: 80px 60px;
  }

  /* Badge */
  .top-badge {
    display: inline-block;
    padding: 10px 22px;
    border-radius: 50px;
    background: rgba(11, 155, 70, 0.08);
    color: var(--primary-green);
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 25px;
  }

  /* Title */
  .advanced-title {
    font-size: 3.2rem;
    line-height: 1.1;
    font-weight: 800;
    color: var(--dark);
    margin-bottom: 25px;
  }

  .advanced-title span {
    color: var(--primary-blue);
    position: relative;
  }

  /* Description */
  .advanced-description {
    font-size: 1.05rem;
    line-height: 1.9;
    color: var(--gray);
    margin-bottom: 20px;
  }

  .text-dark {
    line-height: 1.9;
    color: #2d3748 !important;
  }

  /* Feature Cards */
  .feature-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 18px;
    margin-top: 35px;
    margin-bottom: 40px;
  }

  .feature-box {
    background: #f8fbff;
    border-radius: 20px;
    padding: 22px;
    transition: .4s ease;
    border: 1px solid rgba(0, 59, 142, 0.05);
  }

  .feature-box:hover {
    transform: translateY(-8px);
    background: linear-gradient(135deg,
        var(--primary-blue),
        var(--primary-green));
  }

  .feature-box:hover h5,
  .feature-box:hover p {
    color: white;
  }

  .feature-box h5 {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--dark);
    margin-bottom: 8px;
    transition: .4s;
  }

  .feature-box p {
    color: #667085;
    margin: 0;
    font-size: .95rem;
    transition: .4s;
  }

  /* Button */
  .btn-advance {
    position: relative;
    overflow: hidden;
    border: none;
    padding: 16px 36px;
    border-radius: 60px;
    background: linear-gradient(90deg,
        var(--primary-blue),
        var(--primary-green));
    color: white;
    font-weight: 700;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    transition: .4s ease;
    box-shadow: 0 18px 30px rgba(0, 59, 142, 0.14);
  }

  .btn-advance:hover {
    transform: translateY(-5px);
    color: white;
    box-shadow: 0 22px 40px rgba(0, 59, 142, 0.22);
  }

  .btn-advance span {
    transition: .4s ease;
  }

  .btn-advance:hover span {
    transform: translateX(6px);
  }

  /* Responsive */
  @media(max-width:991px) {

    .content-side {
      padding: 50px 30px;
      text-align: center;
    }

    .advanced-title {
      font-size: 2.4rem;
    }

    .feature-grid {
      grid-template-columns: 1fr;
    }

    .image-side {
      padding: 50px 25px;
    }

  }

  @media(max-width:576px) {

    #unique-container {
      padding: 50px 0;
    }

    .advanced-title {
      font-size: 2rem;
    }

    .advanced-description,
    .text-dark {
      font-size: .96rem;
    }

    .btn-advance {
      width: 100%;
      justify-content: center;
    }

  }
</style>

<div id="unique-container" class="container">

  <div class="advanced-section row g-0 align-items-center">

    <!-- LEFT SIDE -->
    <div class="col-lg-5" data-aos="zoom-in">

      <div class="image-side">

        <div class="glass-card">

          <img src="{!! htmlspecialchars_decode($about->banner_image ?? '') !!}" alt="About Banner">

        </div>

      </div>

    </div>

    <!-- RIGHT SIDE -->
    <div class="col-lg-7" data-aos="fade-left">

      <div class="content-side">

        <!-- Badge -->
        <div class="top-badge">
          SAPTA SHRI ACADEMY
        </div>

        <!-- Title -->
        <h2 class="advanced-title">
          {!! htmlspecialchars_decode($about->caption ?? '') !!}
        </h2>

        <!-- Description -->
        <p class="advanced-description">
          {!! htmlspecialchars_decode($about->short_content ?? '') !!}
        </p>

        <p class="text-dark mb-4">
          {!! htmlspecialchars_decode($about->long_content ?? '') !!}
        </p>

        <!-- Feature Cards -->
        <div class="feature-grid">

          <div class="feature-box">
            <h5>Modern Education</h5>
            <p>Creative learning system for future growth.</p>
          </div>

          <div class="feature-box">
            <h5>Expert Teachers</h5>
            <p>Dedicated and experienced faculty members.</p>
          </div>

          <div class="feature-box">
            <h5>Smart Environment</h5>
            <p>Technology focused learning atmosphere.</p>
          </div>

          <div class="feature-box">
            <h5>Student Support</h5>
            <p>Helping students achieve academic success.</p>
          </div>

        </div>

        <!-- Button -->
        <a href="/about-one/about-us-two" class="btn btn-advance">

          Explore More
          <span>➜</span>

        </a>

      </div>

    </div>

  </div>

</div>