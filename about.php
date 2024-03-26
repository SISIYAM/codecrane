<?php include 'Admin/includes/dbcon.php'; ?>
<!DOCTYPE php>
<php lang="en">
  <?php include "includes/head.php" ?>

  <body>
    <?php include 'includes/nav.php'; ?>

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>About</h2>

              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>About</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
              <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 content order-last  order-lg-first">
              <h3>About Us</h3>

            </div>
          </div>

        </div>
      </section><!-- End About Us Section -->

      <!-- ======= Stats Counter Section ======= -->
      <section id="stats-counter" class="stats-counter pt-0">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4">

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                  class="purecounter"></span>
                <p>Workers</p>
              </div>
            </div>
            <!-- End Stats Item -->

          </div>

        </div>
      </section><!-- End Stats Counter Section -->

      <!-- ======= Our Team Section ======= -->
      <section id="team" class="team pt-0">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <span>Our Team</span>
            <h2>Our Team</h2>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">

            <?php
       $select = mysqli_query($con,"SELECT * FROM members");
       if(mysqli_num_rows($select) > 0){
        while($row = mysqli_fetch_array($select)){
          ?>
            <div class="col-lg-4 col-md-6 d-flex">
              <div class="member">
                <img src="<?=$row['image'];?>"
                  style="border: 1px solid rgba(14, 29, 52, 0.15);
  box-shadow: 0 3px 20px -2px rgba(108, 117, 125, 0.15);margin-top:10px; border-radius: 50%;height: 300px; width: 300px;" class="img-fluid"
                  alt="" />
                <div class="member-content">
                  <h4><?=$row['full_name'];?></h4>
                  <span><?php 
              if($row['education'] != NULL){
                echo $row['education'];
              }
              ?></span>
                  <span><?php
              if($row['post'] == 1){
                echo "Founder";
              }elseif($row['post'] == 2){
                echo "Co-Founder";
              }elseif($row['post'] == 3){
                echo "CEO";
              }else{
                echo "Member";
              }
              ?></span>
                  <span><?=$row['department'];?></span>
                  <p style="color:white">
                    Magni qui quod omnis unde et eos fuga et exercitationem.
                    Odio veritatis perspiciatis quaerat qui aut aut aut
                  </p>
                  <div class="social">
                    <a href="<?=$row['github']?>" target="_blank"><i class="bi bi-github"></i></a>
                    <a href="<?=$row['facebook']?>" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="<?=$row['instagram']?>" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="<?=$row['linkedin']?>" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="<?=$row['youtube']?>" target="_blank"><i class="bi bi-youtube"></i></a>
                    <a href="<?=$row['twitter']?>" target="_blank"><i class="bi bi-twitter"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <?php
        }
       }
       ?>

          </div>
        </div>
      </section>
      <!-- ======= Our Team Section ======= -->

      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials">
        <div class="container">

          <div class="slides-1 swiper" data-aos="fade-up">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                    quid.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End Testimonials Section -->

      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <span>Frequently Asked Questions</span>
            <h2>Frequently Asked Questions</h2>

          </div>

          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-10">

              <div class="accordion accordion-flush" id="faqlist">

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq-content-1">
                      <i class="bi bi-question-circle question-icon"></i>
                      Non consectetur a erat nam at lectus urna duis?
                    </button>
                  </h3>
                  <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                      gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </div>
                  </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq-content-2">
                      <i class="bi bi-question-circle question-icon"></i>
                      Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                    </button>
                  </h3>
                  <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet
                      id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                      pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt
                      dui.
                    </div>
                  </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq-content-3">
                      <i class="bi bi-question-circle question-icon"></i>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                    </button>
                  </h3>
                  <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                      elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque
                      eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis
                      sed odio morbi quis
                    </div>
                  </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq-content-4">
                      <i class="bi bi-question-circle question-icon"></i>
                      Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                    </button>
                  </h3>
                  <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      <i class="bi bi-question-circle question-icon"></i>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet
                      id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                      pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt
                      dui.
                    </div>
                  </div>
                </div><!-- # Faq item-->

                <div class="accordion-item">
                  <h3 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#faq-content-5">
                      <i class="bi bi-question-circle question-icon"></i>
                      Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                    </button>
                  </h3>
                  <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                    <div class="accordion-body">
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in.
                      Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est.
                      Purus gravida quis blandit turpis cursus in
                    </div>
                  </div>
                </div><!-- # Faq item-->

              </div>

            </div>
          </div>

        </div>
      </section><!-- End Frequently Asked Questions Section -->

    </main><!-- End #main -->

    <?php include 'includes/footer.php';?>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>

  </html>