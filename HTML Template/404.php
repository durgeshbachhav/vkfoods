<?php include 'includes/header.php'; ?>

<!--Form Back Drop-->
<div class="form-back-drop"></div>

<!-- Hidden Sidebar -->
<section class="hidden-bar">
  <div class="inner-box text-center">
    <div class="cross-icon"><span class="fa fa-times"></span></div>
    <div class="title">
      <h4>Get Appointment</h4>
    </div>

    <!--Appointment Form-->
    <div class="appointment-form">
      <form method="post" action="contact.html">
        <div class="form-group">
          <input type="text" name="text" value="" placeholder="Name" required />
        </div>
        <div class="form-group">
          <input
            type="email"
            name="email"
            value=""
            placeholder="Email Address"
            required
          />
        </div>
        <div class="form-group">
          <textarea placeholder="Message" rows="5"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="theme-btn">Submit now</button>
        </div>
      </form>
    </div>

    <!--Social Icons-->
    <div class="social-style-one">
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-pinterest-p"></i></a>
    </div>
  </div>
</section>
<!--End Hidden Sidebar -->

<!-- Page Banner Start -->
<section
  class="page-banner text-white py-165 rpy-130"
  style="background-image: url(assets/images/banner/banner.jpg)"
>
  <div class="container">
    <div class="banner-inner">
      <h1 class="page-title wow fadeInUp delay-0-2s">404 Page</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">404</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
<!-- Page Banner End -->

<!-- Error Section Start -->
<section class="error-section rel z-1 py-130 rpy-100">
  <div class="container">
    <div class="error-inner text-center wow fadeInUp delay-0-2s">
      <div class="image mb-70">
        <img src="assets/images/404.png" alt="404 Error" />
      </div>
      <div class="content">
        <div class="section-title mb-20">
          <h2>Sorry This Page Can’t Be Found</h2>
        </div>
        <p>
          Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore
          et dolore magna aliqua suspendisse ultrices gravida commodo viverra
          maecenas accumsan
        </p>
        <a href="index.html" class="theme-btn style-three mt-15"
          >Goto Home <i class="fas fa-angle-double-right"></i
        ></a>
      </div>
    </div>
  </div>
  <div class="error-shapes">
    <img class="two-leaf" src="assets/images/slider/two-lear.png" alt="Leaf" />
    <img
      class="half-leaf"
      src="assets/images/slider/half-leaf.png"
      alt="Leaf"
    />
    <img class="leaf-two" src="assets/images/shapes/leaf-1.png" alt="Leaf" />
    <img class="leaf-three" src="assets/images/shapes/leaf-2.png" alt="Leaf" />
  </div>
</section>
<!-- Error Section End -->

<?php include 'includes/footer.php'; ?>
