<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap"
  rel="stylesheet">

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  * {
    font-family: 'Manrope', sans-serif;
  }

  :root {
    --blue: #3553a4;
    --light-blue: #5ea8ff;
    --white: #ffffff;
  }

  /* MAIN SECTION */
  .about-modern-section {
    background: #3553a4;
    padding: 65px 55px; /* reduced */
    position: relative;
    overflow: hidden;
  }

  /* RIGHT TOP GRADIENT */
  .about-modern-section::after {
    content: "";
    position: absolute;
    top: -120px;
    right: -120px;
    width: 300px; /* reduced */
    height: 300px;
    background: radial-gradient(circle,
        rgba(255, 0, 128, 0.35),
        transparent 70%);
    z-index: 1;
  }

  /* LEFT IMAGE AREA */
  .about-image-wrapper {
    position: relative;
    z-index: 2;
  }

  .about-main-image {
    width: 100%;
    border-radius: 16px;
    height: 360px; /* reduced */
    object-fit: cover;
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.18);
  }

  /* FLOATING CARD */
  .connect-card {
    position: absolute;
    left: 22px;
    bottom: -25px;
    background: #fff;
    width: 72%;
    padding: 20px; /* reduced */
    border-radius: 16px;
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.14);
  }

  .connect-card h4 {
    color: #0b9b46;
    font-size: 1.15rem; /* reduced */
    font-weight: 800;
    margin-bottom: 6px;
  }

  .connect-card p {
    margin: 0;
    color: #8a8a8a;
    font-size: .88rem;
    line-height: 1.5;
  }

  /* CONTENT */
  .about-content {
    position: relative;
    z-index: 2;
    padding-left: 30px; /* reduced */
  }

  .about-title {
    color: white;
    font-size: 2.5rem; /* reduced */
    font-weight: 800;
    margin-bottom: 18px;
    line-height: 1.2;
  }

  .about-description {
    color: rgba(255, 255, 255, 0.82);
    line-height: 1.8;
    font-size: .98rem; /* reduced */
    margin-bottom: 30px;
    max-width: 520px;
  }

  /* BUTTON */
  .about-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-decoration: none;
    background: linear-gradient(90deg, #2f7cff, #6db7ff);
    color: white;
    padding: 13px 30px; /* reduced */
    border-radius: 12px;
    font-weight: 700;
    font-size: .95rem;
    transition: .4s ease;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  }

  .about-btn:hover {
    transform: translateY(-4px);
    color: white;
  }

  .about-btn span {
    transition: .4s;
  }

  .about-btn:hover span {
    transform: translateX(5px);
  }

  /* RESPONSIVE */
  @media(max-width:991px) {

    .about-modern-section {
      padding: 50px 22px 75px;
    }

    .about-content {
      padding-left: 0;
      margin-top: 60px;
      text-align: center;
    }

    .about-title {
      font-size: 2rem;
    }

    .about-description {
      margin-left: auto;
      margin-right: auto;
    }

    .connect-card {
      width: 82%;
      left: 50%;
      transform: translateX(-50%);
    }
  }

  @media(max-width:576px) {

    .about-modern-section {
      padding: 40px 15px 70px;
    }

    .about-main-image {
      height: 250px;
    }

    .about-title {
      font-size: 1.7rem;
    }

    .about-description {
      font-size: .9rem;
    }

    .connect-card {
      padding: 18px;
      bottom: -40px;
    }

    .connect-card h4 {
      font-size: 1rem;
    }

    .connect-card p {
      font-size: .82rem;
    }

    .about-btn {
      width: 100%;
    }
  }
</style>

<!-- SECTION -->
<section class="about-modern-section">

  <div class="container">

    <div class="row align-items-center g-4">

      <!-- LEFT IMAGE -->
      <div class="col-lg-6">

        <div class="about-image-wrapper">

          <img src="{!! htmlspecialchars_decode($about->banner_image ?? '') !!}"
            alt="About Image"
            class="about-main-image">

          <!-- FLOATING CARD -->
          <div class="connect-card">

            <h4>Connect with Us</h4>

            <p>
              we'll never leave your questions unanswered.
            </p>

          </div>

        </div>

      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-lg-6">

        <div class="about-content">

          <h2 class="about-title">
            About Us
          </h2>

          <p class="about-description">

            {!! htmlspecialchars_decode($about->short_content ?? '') !!}

          </p>

          <a href="/about-one/about-us-two" class="about-btn">

            Explore More

            <span>→</span>

          </a>

        </div>

      </div>

    </div>

  </div>

</section>