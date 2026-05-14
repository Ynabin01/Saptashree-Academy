<!-- Bootstrap + Font Awesome + AOS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<section class="modern-trust-section">

  <div class="container">

    <div class="row align-items-center gy-4">

      <!-- LEFT IMAGE -->
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200">

        <div class="trust-image-wrapper">

          <img src="/website/img/mission (2).jpg"
            alt="Students"
            class="trust-main-image">

          <!-- FLOATING CARD -->
          <div class="trust-floating-card">

            <div class="floating-icon">
              <i class="fas fa-award"></i>
            </div>

            <div>
              <h5>9+ Years Experience</h5>
              <p>Trusted by students & parents</p>
            </div>

          </div>

        </div>

      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1200">

        <div class="trust-content">

          <span class="trust-mini-title">
            WHY CHOOSE US
          </span>

          <h2 class="trust-main-title">
            Building Bright Futures
            <span>Through Quality Education</span>
          </h2>

          <p class="trust-description">
            Saptashree Academy provides quality education, experienced teachers,
            practical learning, and a supportive environment that helps students
            grow academically and personally with confidence.
          </p>

          <!-- FEATURES -->
          <div class="row g-3 mt-1">

            <div class="col-md-6">

              <div class="trust-feature-card">

                <div class="trust-icon">
                  <i class="fas fa-user-graduate"></i>
                </div>

                <div>
                  <h5>Expert Teachers</h5>

                  <p>
                    Skilled mentors dedicated to every student’s academic success.
                  </p>
                </div>

              </div>

            </div>

            <div class="col-md-6">

              <div class="trust-feature-card">

                <div class="trust-icon">
                  <i class="fas fa-book-open"></i>
                </div>

                <div>
                  <h5>Modern Learning</h5>

                  <p>
                    Practical and innovative learning methods for better growth.
                  </p>
                </div>

              </div>

            </div>

            <div class="col-md-6">

              <div class="trust-feature-card">

                <div class="trust-icon">
                  <i class="fas fa-heart"></i>
                </div>

                <div>
                  <h5>Student Support</h5>

                  <p>
                    Friendly and motivating environment for overall development.
                  </p>
                </div>

              </div>

            </div>

            <div class="col-md-6">

              <div class="trust-feature-card">

                <div class="trust-icon">
                  <i class="fas fa-shield-alt"></i>
                </div>

                <div>
                  <h5>Safe Campus</h5>

                  <p>
                    Secure, disciplined, and positive atmosphere for learning.
                  </p>
                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- AOS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
  AOS.init();
</script>

<style>

  /* MAIN SECTION */
  .modern-trust-section {
    background:
      linear-gradient(rgba(5, 14, 35, 0.92), rgba(5, 14, 35, 0.88)),
      url('/website/img/backgroundone.jpg') center/cover no-repeat;
    padding: 65px 0;
    overflow: hidden;
    position: relative;
  }

  /* IMAGE */
  .trust-image-wrapper {
    position: relative;
  }

  .trust-main-image {
    width: 100%;
    height: 410px;
    object-fit: cover;
    border-radius: 22px;
    box-shadow: 0 18px 40px rgba(0,0,0,0.30);
    transition: 0.4s ease;
  }

  .trust-main-image:hover {
    transform: scale(1.015);
  }

  /* FLOATING CARD */
  .trust-floating-card {
    position: absolute;
    right: -10px;
    bottom: 22px;
    background: rgba(255,255,255,0.96);
    backdrop-filter: blur(10px);
    border-radius: 16px;
    padding: 14px 18px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 14px 30px rgba(0,0,0,0.18);
  }

  .floating-icon {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    background: linear-gradient(135deg,#1e90ff,#3553ff);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .floating-icon i {
    color: #fff;
    font-size: 1rem;
  }

  .trust-floating-card h5 {
    margin: 0;
    font-size: 0.95rem;
    font-weight: 800;
    color: #0d1b3f;
  }

  .trust-floating-card p {
    margin: 0;
    font-size: 0.8rem;
    color: #6c757d;
  }

  /* CONTENT */
  .trust-content {
    padding-left: 20px;
  }

  .trust-mini-title {
    display: inline-block;
    color: #57b2ff;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    margin-bottom: 10px;
  }

  .trust-main-title {
    color: #fff;
    font-size: 2.3rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 16px;
  }

  .trust-main-title span {
    color: #57b2ff;
  }

  .trust-description {
    color: rgba(255,255,255,0.75);
    font-size: 0.93rem;
    line-height: 1.75;
    margin-bottom: 22px;
    max-width: 560px;
  }

  /* FEATURE CARD */
  .trust-feature-card {
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 18px;
    padding: 18px;
    display: flex;
    gap: 14px;
    height: 100%;
    transition: 0.35s ease;
    backdrop-filter: blur(10px);
  }

  .trust-feature-card:hover {
    transform: translateY(-5px);
    border-color: rgba(87,178,255,0.4);
    background: rgba(255,255,255,0.09);
  }

  .trust-icon {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    background: linear-gradient(135deg,#1e90ff,#3553ff);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .trust-icon i {
    color: #fff;
    font-size: 1rem;
  }

  .trust-feature-card h5 {
    color: #fff;
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 6px;
  }

  .trust-feature-card p {
    color: rgba(255,255,255,0.72);
    font-size: 0.86rem;
    line-height: 1.6;
    margin: 0;
  }

  /* RESPONSIVE */
  @media(max-width:991px) {

    .modern-trust-section {
      padding: 55px 0;
    }

    .trust-content {
      padding-left: 0;
      text-align: center;
      margin-top: 10px;
    }

    .trust-main-title {
      font-size: 1.95rem;
    }

    .trust-description {
      margin-left: auto;
      margin-right: auto;
    }

    .trust-main-image {
      height: 340px;
    }

    .trust-floating-card {
      right: 12px;
      bottom: 12px;
    }
  }

  @media(max-width:576px) {

    .modern-trust-section {
      padding: 45px 0;
    }

    .trust-main-title {
      font-size: 1.6rem;
    }

    .trust-main-image {
      height: 240px;
      border-radius: 18px;
    }

    .trust-feature-card {
      padding: 16px;
      border-radius: 16px;
    }

    .trust-floating-card {
      position: relative;
      right: auto;
      bottom: auto;
      margin: -35px auto 0;
      width: 88%;
    }
  }

</style>