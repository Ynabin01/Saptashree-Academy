 
<!-- Bootstrap + Font Awesome + AOS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

<section class="trust-section py-5">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- LEFT IMAGE AREA -->
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1200">
        <div class="image-wrapper position-relative">
          <img src="/website/img/mission (2).jpg" alt="Students"
            class="img-fluid main-img">

          <!-- Floating Badge -->
          <div class="experience-badge">
            <h5>9+ Years</h5>
            <span>Experience</span>
          </div>
        </div>
      </div>

      <!-- RIGHT CONTENT AREA -->
      <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1200">

        <span class="small-title">WHY CHOOSE US</span>

        <h2 class="section-title">
          Trust Saptashree<span> Academy,</span>
        </h2>

        <p class="section-desc">
          We provide quality education, expert counselling, and a supportive environment
          to help students achieve their academic and career goals successfully.
        </p>

        <!-- FEATURE BOXES -->
        <div class="row g-4 mt-2">

          <div class="col-md-6">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <div>
                <h5>Qualified Teachers</h5>
                <p>
                  Experienced and dedicated mentors guiding every student toward success.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="fas fa-book-open"></i>
              </div>
              <div>
                <h5>Quality Education</h5>
                <p>
                  Strong academic foundation with modern and practical learning methods.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="fas fa-heart"></i>
              </div>
              <div>
                <h5>Student Care</h5>
                <p>
                  Friendly and supportive environment focused on overall student growth.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <div>
                <h5>Safe Environment</h5>
                <p>
                  Secure, disciplined, and positive atmosphere for better learning.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>

<style>

/* SECTION BACKGROUND */
.trust-section {
  background: linear-gradient(rgba(6, 17, 40, 0.92), rgba(6 17 40 / 50%)),
              url('/website/img/backgroundone.jpg') center/cover no-repeat;
  position: relative;
  overflow: hidden;
}

/* IMAGE */
.image-wrapper {
  position: relative;
}

.main-img {
  border-radius: 20px;
  width: 100% !important;
  height: 480px !important; 
  margin-top: 40px;
  object-fit: cover;
  box-shadow: 0 20px 40px rgba(0,0,0,0.35);
  transition: 0.4s ease;
}

.main-img:hover {
  transform: scale(1.03);
}

/* EXPERIENCE BADGE */
.experience-badge {
  position: absolute;
  left: -15px;
  bottom: 25px;
  background: linear-gradient(135deg, #1e90ff, #0072ff);
  color: #fff;
  padding: 16px 20px;
  border-radius: 14px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.3);
}

.experience-badge h5 {
  margin: 0;
  font-size: 1.1rem;
  font-weight: 700;
}

.experience-badge span {
  font-size: 0.85rem;
  opacity: 0.9;
}

/* RIGHT CONTENT */
.small-title {
  color: #ff5e5e;
  font-size: 0.85rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.section-title {
  font-size: 2.8rem;
  font-weight: 800;
  color: #fff;
  line-height: 1.2;
  margin: 15px 0;
}

.section-title span {
  color: #2ea8ff;
}

.section-desc {
  color: rgba(255,255,255,0.75);
  font-size: 1rem;
  line-height: 1.7;
  max-width: 700px;
  margin-bottom: 25px;
}

/* FEATURE CARDS */
.feature-card {
  background: rgba(255,255,255,0.06);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: 18px;
  padding: 22px 20px;
  display: flex;
  gap: 15px;
  transition: 0.35s ease;
  backdrop-filter: blur(10px);
  height: 100%;
}

.feature-card:hover {
  transform: translateY(-6px);
  background: rgba(255,255,255,0.09);
  border-color: rgba(46,168,255,0.35);
}

.feature-icon {
  width: 55px;
  height: 55px;
  border-radius: 14px;
  background: linear-gradient(135deg, #1e90ff, #0d6efd);
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.feature-icon i {
  color: #fff;
  font-size: 1.2rem;
}

.feature-card h5 {
  color: #fff;
  font-size: 1.1rem;
  font-weight: 700;
  margin-bottom: 8px;
}

.feature-card p {
  color: rgba(255,255,255,0.72);
  font-size: 0.93rem;
  line-height: 1.6;
  margin: 0;
}

/* RESPONSIVE */
@media (max-width: 992px) {

  .trust-section {
    padding: 70px 0;
  }

  .section-title {
    font-size: 2rem;
    text-align: center;
  }

  .small-title,
  .section-desc {
    text-align: center;
    display: block;
  }

  .section-desc {
    margin-left: auto;
    margin-right: auto;
  }

  .experience-badge {
    left: 10px;
    bottom: 10px;
  }

  .main-img {
    height: 350px;
  }
}

@media (max-width: 576px) {

  .section-title {
    font-size: 1.7rem;
  }

  .feature-card {
    padding: 18px;
  }

  .main-img {
    height: 280px;
  }

  .experience-badge {
    padding: 12px 15px;
  }

  .experience-badge h5 {
    font-size: 0.95rem;
  }
}

</style>
 
