<?php include 'includes/dbcon.php'; ?>
<!DOCTYPE php>
<php lang="en">
  <?php include "includes/head.php" ?>

  <body>
    <?php include 'includes/nav.php'; ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
      <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2 data-aos="fade-up">Elevate Your Digital Presence with Tailored Web Solutions</h2>
            <p data-aos="fade-up" data-aos-delay="100">
              Discover the possibilities with CodeCrane – your reliable ally for customized web solutions. Our services
              extend beyond captivating website designs, seamless coding bug fixes, to crafting distinctive logos that
              enhance your brand's digital footprint
            </p>

            <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
              data-aos-delay="200">
              <input type="text" class="form-control" placeholder="Search here" />
              <button type="submit" class="btn btn-primary">Search</button>
            </form>

            <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">
              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>Clients</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>Projects</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>Support</p>
                </div>
              </div>
              <!-- End Stats Item -->

              <div class="col-lg-3 col-6">
                <div class="stats-item text-center w-100 h-100">
                  <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                    class="purecounter"></span>
                  <p>Workers</p>
                </div>
              </div>
              <!-- End Stats Item -->
            </div>
          </div>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/h4.svg" class="img-fluid mb-2 mb-lg-0" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">
      <section id="featured-services" class="featured-services"></section>

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about pt-0">
        <div class="container" data-aos="fade-up">
          <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
              <img src="assets/img/about.jpg" class="img-fluid" alt="" />
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
            </div>
            <div class="col-lg-6 content order-last order-lg-first">
              <h3>About Us</h3>
              <p>
                Dolor iure expedita id fuga asperiores qui sunt consequatur
                minima. Quidem voluptas deleniti. Sit quia molestiae quia quas
                qui magnam itaque veritatis dolores. Corrupti totam ut eius
                incidunt reiciendis veritatis asperiores placeat.
              </p>
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-diagram-3"></i>
                  <div>
                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                    <p>
                      Magni facilis facilis repellendus cum excepturi quaerat
                      praesentium libre trade
                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-fullscreen-exit"></i>
                  <div>
                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                    <p>
                      Quo totam dolorum at pariatur aut distinctio dolorum
                      laudantium illo direna pasata redi
                    </p>
                  </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-broadcast"></i>
                  <div>
                    <h5>Voluptatem et qui exercitationem</h5>
                    <p>
                      Et velit et eos maiores est tempora et quos dolorem autem
                      tempora incidunt maxime veniam
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->

      <!-- ======= Services Section ======= -->
      <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <span>Our Services</span>
            <h2>Our Services</h2>
          </div>

          <div class="row gy-4">
            <?php
        $select = mysqli_query($con, "SELECT * FROM services");
         if(mysqli_num_rows($select) > 0){
          while($serviceRow = mysqli_fetch_array($select)){
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <div class="card-img">
                  <img src="<?=$serviceRow['service_image'];?>" alt="" class="img-fluid" />
                </div>
                <h3>
                  <a href="details.php?Service-id=<?=$serviceRow['service_id'];?>"
                    class="stretched-link"><?=$serviceRow['service_name'];?></a>
                </h3>
                <p style="text-align:justify;">
                  <?=$serviceRow['short_description'];?></p>
                <p><i class="fa fa-star"></i>(4)</p>
                <p style="font-size: 20px; color:#111; font-weight:bold; margin-bottom: 20px">From
                  <?=$serviceRow['price'];?> &#2547;</p>
              </div>
            </div>
            <?php
          }
         }
        ?>

            <!-- End Card Item -->
          </div>
        </div>
      </section>
      <!-- End Services Section -->




      <!-- ======= projects section ======= -->
      <section id="service" class="services pt-0">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <span>Recent Projects</span>
            <h2>Recent Projects</h2>
          </div>

          <div class="row gy-4">
            <?php
        $projectSearch = mysqli_query($con, "SELECT * FROM projects");
        if(mysqli_num_rows($projectSearch) > 0){
          while($projectRow = mysqli_fetch_array($projectSearch)){
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="card">
                <div class="card-img">
                  <img src="<?=$projectRow['image']?>" alt="" class="img-fluid" />
                </div>
                <h3>
                  <a href="details.php?Project-id=<?=$projectRow['project_uniq_id']?>"
                    class="stretched-link"><?=$projectRow['project_name']?></a>
                </h3>
                <p>
                  <?=$projectRow['short_description']?>
                </p>
                <br><br>

              </div>
            </div>
            <?php
          }
        }
        ?>

            <!-- End Card Item -->

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
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" />
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Proin iaculis purus consequat sem cure digni ssim donec
                          porttitora entum suscipit rhoncus. Accusantium quam,
                          ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                          risus at semper.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" />
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Export tempor illum tamen malis malis eram quae irure esse
                          labore quem cillum quid cillum eram malis quorum velit fore
                          eram velit sunt aliqua noster fugiat irure amet legam anim
                          culpa.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="" />
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Enim nisi quem export duis labore cillum quae magna enim
                          sint quorum nulla quem veniam duis minim tempor labore quem
                          eram duis noster aute amet eram fore quis sint minim.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="" />
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Fugiat enim eram quae cillum dolore dolor amet nulla culpa
                          multos export minim fugiat minim velit minim dolor enim duis
                          veniam ipsum anim magna sunt elit fore quem dolore labore
                          illum veniam.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <!-- End testimonial item -->

                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="" />
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          Quis quorum aliqua sint quem legam fore sunt eram irure
                          aliqua veniam tempor noster veniam enim culpa labore duis
                          sunt culpa nulla illum cillum fugiat legam esse veniam culpa
                          fore nisi cillum quid.
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                      </div>
                    </div>
                    <!-- End testimonial item -->
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
            </section>
            <!-- End Testimonials Section -->

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
                      <?php
                      $i = 1;
                      $selectQstn = mysqli_query($con,"SELECT * FROM questions");
                      $qstnCount = mysqli_num_rows($selectQstn);
                      if($qstnCount > 0){
                        while($qstnResult = mysqli_fetch_array($selectQstn)){
                          ?>
                      <div class="accordion-item">
                        <h3 class="accordion-header">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-content-<?=$i?>">
                            <i class="bi bi-question-circle question-icon"></i>
                            <?=$qstnResult['question']?>
                          </button>
                        </h3>
                        <div id="faq-content-<?=$i?>" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                          <div class="accordion-body">
                            <?=$qstnResult['answer']?>
                          </div>
                        </div>
                      </div>
                      <?php
                      $i++;
                        }     
                      }
                      ?>

                      <!-- # Faq item-->
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Frequently Asked Questions Section -->
    </main>
    <!-- End #main -->

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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>

  </html>