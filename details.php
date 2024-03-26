<?php include 'Admin/includes/dbcon.php'; ?>
<!DOCTYPE php>
<php lang="en">
  <?php include "includes/head.php" ?>

  <body>
    <?php include 'includes/nav.php'; ?>
    <main id="main">
      <?php
if(isset($_GET['Service-id'])){
  $id = $_GET['Service-id'];
  $select = mysqli_query($con, "SELECT * FROM services WHERE service_id = '$id'");
  if(mysqli_num_rows($select) > 0){
    $row = mysqli_fetch_array($select);
    ?>
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/bg.jpg');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2><?=$row['service_name'];?></h2>

              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="index.php">Home</a></li>
              <li>Service Details</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <!-- ======= Service Details Section ======= -->
      <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4">


            <div class="col-lg-7">
              <h3><?=$row['service_name'];?></h3>
              <img src="<?=$row['service_image'];?>" class="d-block w-100 mb-2" alt="">


              <?=$row['description'];?>
            </div>

            <div class="col-lg-5">
              <div class="servies-details-payment">
                <h4 class="dollar"><?=$row['price'];?> &#2547;</h4>
                <?=$row['checkout_section'];?>

                <div class="bottom_items" style="margin:20px">
                  <div class="buy-now">
                    <a href="#">Continue <i class="fa fa-arrow-right"></i> </a> <br>
                  </div>
                  <br>
                  <a href="contact.php"
                    style="color: #fff;display: flex;justify-content: self-end;justify-content: space-around;"
                    class="btn btn-primary rounded-pill">Contact</a>

                </div>


              </div>


            </div>



          </div>

        </div>
      </section><!-- End Service Details Section -->

      <form action="">
        <input type="text">
        <input type="submit">
      </form>

      <?php
  }

}elseif(isset($_GET['Project-id'])){
  $id = $_GET['Project-id'];
  $select = mysqli_query($con, "SELECT * FROM projects WHERE project_uniq_id = '$id'");
  if(mysqli_num_rows($select) > 0){
    $row = mysqli_fetch_array($select);
    $project_id = $row['id'];
    ?>
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/bg.jpg');">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2><?=$row['project_name'];?></h2>

              </div>
            </div>
          </div>
        </div>
        <nav>
          <div class="container">
            <ol>
              <li><a href="index.php">Home</a></li>
              <li>Project Details</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Breadcrumbs -->

      <!-- ======= Service Details Section ======= -->
      <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up">

          <div class="row gy-4" style="border:1px solid black; padding:10px">

            <h3><?=$row['project_name'];?></h3>
            <div style="border:3px solid black;"></div>
            <div class="col-lg-12 d-flex justify-content-center">

              <div id="carouselExampleAutoplaying" class="col-lg-8 carousel slide my-3" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src=" <?=$row['image'];?>" class=" d-block w-100" alt="...">
                  </div>
                  <?php 
              $multiple_image_search = mysqli_query($con,"SELECT * FROM multiple_project_image WHERE project_id = '$project_id'");
              if(mysqli_num_rows($multiple_image_search) > 0){
                while($imageRow = mysqli_fetch_array($multiple_image_search)){
                  ?>
                  <div class="carousel-item">
                    <img src="<?=$imageRow['image']?>" class="d-block w-100" alt="...">
                  </div>
                  <?php
                }
                ?>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                  <?php
              }
              ?>


                </div>
                <div style="border-bottom:1px solid black; margin:20px 0;"></div>

                <?=$row['description'];?>
              </div>





            </div>

          </div>
      </section><!-- End Service Details Section -->

      <?php
  }
}
?>


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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>

  </html>