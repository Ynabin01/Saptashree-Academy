<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap"
  rel="stylesheet">

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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