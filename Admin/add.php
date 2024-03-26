<?php
   session_start();
   include 'includes/dbcon.php';
   include 'includes/code.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php'; ?>
</head>

<body>
  <?php include 'includes/nav.php'; ?>
  <div id="main">
    <header class="mb-3">
      <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
      </a>
    </header>

    <?php
    if (isset($_GET['Services'])) {
      ?>
    <div class="page-heading">

      <!-- Basic Vertical form layout section start -->
      <section id="basic-vertical-layouts">
        <div class="row match-height">
          <div class="">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add services</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" class="form form-vertical">
                    <div class="form-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="first-name-vertical">Service Name <span>*</span></label>
                            <input type="text" id="first-name-vertical" class="form-control" name="service_name"
                              placeholder="Service Name">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="short-description-id-vertical">Short Description</label>
                            <textarea id="short-description-id-vertical" rows="4" maxlength="140" class="form-control"
                              name="short_description"
                              placeholder="Write short description maximum 140 Character"></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="editor">Descriptions <span>*</span></label>
                            <!-- Cke Editor -->
                            <textarea name="description" id="editor"></textarea>

                          </div>
                        </div>
                        <!-- <div class="col-12">
                          <div class="form-group">
                            <label for="price">Price (BDT) <span>*</span></label>
                            <input type="number" name="price" id="price" class="form-control" value=""
                              placeholder="5000">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <h6>Delivery Time <span>*</span></h6>
                          <div class="input-group mb-3">
                            <select class="form-select" name="delivery_time" id="delivery_time" required>
                              <option value="" selected disabled>Choose...</option>
                              <option value="1">1 day</option>
                              <option value="2">2 days</option>
                              <option value="3">3 days</option>
                              <option value="4">4 days</option>
                              <option value="5">5 days</option>
                              <option value="6">6 days</option>
                              <option value="7">10 days</option>
                              <option value="10">10 days</option>
                              <option value="15">15 days</option>
                              <option value="20">20 days</option>
                              <option value="25">25 days</option>
                              <option value="30">30 days</option>
                              <option value="45">45 days</option>
                              <option value="60">60 days</option>
                            </select>
                            <label class="input-group-text" for="postMember">Options</label>
                          </div>
                        </div> -->
                        <div class="col-12">
                          <div class="form-group">
                            <label for="price-vertical">Price <span>*</span></label>
                            <input type="number" id="price-vertical" class="form-control" name="price" required>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Checkout section</label>
                            <textarea id="dark" name="checkout_section" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">image</label>
                            <input type="file" id="image-vertical" class="form-control" name="service_image" required>
                          </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                          <button type="submit" name="serviceBtn" class="btn btn-primary me-1 mb-1">Submit</button>
                          <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    <?php
    } elseif (isset($_GET['Team-Members'])) {
      ?>
    <div class="page-heading">

      <!-- Basic Vertical form layout section start -->
      <section id="basic-vertical-layouts">
        <div class="row match-height">
          <div class="">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Team Members</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form action="" id="submit_form" method="POST" enctype="multipart/form-data">
                    <div class="form-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="fullName">Full Name <span>*</span></label>
                            <input type="text" id="fullName" class="form-control" name="full_name"
                              placeholder="Full Name" required>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="education">Education <span>(Optional)</span></label>
                            <input type="text" id="education" class="form-control" name="education"
                              placeholder="Ex- Aeronautical Engineering, BSMRAAU">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <h6>Post <span>*</span></h6>
                          <div class="input-group mb-3">
                            <select class="form-select" name="post" id="postMember" required>
                              <option value="" selected disabled>Choose...</option>
                              <option value="1">Founder</option>
                              <option value="2">Co-Founder</option>
                              <option value="3">CEO</option>
                              <option value="4">Member</option>
                            </select>
                            <label class="input-group-text" for="postMember">Options</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="department">Department <span>*</span></label>
                            <input type="text" id="department" class="form-control" name="department"
                              placeholder="Ex- Web Development, Back-End Development, Graphics Design">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="facebook">Facebook<span>(Optional)</span></label>
                            <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Link">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="instagram">Instagram<span>(Optional)</span></label>
                            <input type="text" id="instagram" class="form-control" name="instagram" placeholder="Link">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="linkedin">Linkedin<span>(Optional)</span></label>
                            <input type="text" id="linkedin" class="form-control" name="linkedin" placeholder="Link">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="twitter">Twitter<span>(Optional)</span></label>
                            <input type="text" id="twitter" class="form-control" name="twitter" placeholder="Link">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="youtube">Youtube<span>(Optional)</span></label>
                            <input type="text" id="youtube" class="form-control" name="youtube" placeholder="Link">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="github">GitHub<span>(Optional)</span></label>
                            <input type="text" id="github" class="form-control" name="github" placeholder="Link">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">image</label>
                            <input type="file" id="memberImage" class="form-control" name="image" required>
                          </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                          <button type="submit" id="memberBtn" name="submitMember"
                            class="btn btn-primary me-1 mb-1">Submit</button>
                          <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    <?php
    } elseif (isset($_GET['Projects'])) {
      ?>
    <div class="page-heading">

      <!-- Basic Vertical form layout section start -->
      <section id="basic-vertical-layouts">
        <div class="row match-height">
          <div class="">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Projects</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form class="form form-vertical" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="first-name-vertical">Project Name <span>*</span></label>
                            <input type="text" id="first-name-vertical" class="form-control" name="project_name"
                              placeholder="Project Name">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="short-description-id-vertical">Short Description</label>
                            <textarea id="short-description-id-vertical" rows="4" maxlength="140" class="form-control"
                              name="short_description"
                              placeholder="Write short description maximum 140 Character"></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="editor">Descriptions <span>*</span></label>
                            <!-- Cke Editor -->
                            <textarea name="description" id="editor"></textarea>

                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Thumbnail image</label>
                            <input type="file" id="image-vertical" class="form-control" name="image">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <button type="button" id="addMultipleImage" value="" class="btn btn-success">Add multiple
                              images</button>
                          </div>
                        </div>

                        <div id="toggleDiv" style="display:none;" class="col-12">
                          <div class="form-group">
                            <label for="multiple-image-vertical">Add images</label>
                            <input type="file" id="multiple-image-vertical" class="form-control" name="images[]"
                              multiple>
                          </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                          <button type="submit" name="submitProject" class="btn btn-primary me-1 mb-1">Submit</button>
                          <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    <?php
    } elseif (isset($_GET['Questions'])) {
      ?>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>

            <span aria-hidden="true" style="cursor:pointer" class="closeModalBtn">&times;</span>

          </div>
          <div class="modal-body" id="editOutput">


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closeModalBtn">Close</button>
            <button type="button" id="updateQuestionEdit" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Edit modal -->




    <div class="page-heading">

      <!-- Basic Vertical form layout section start -->
      <section id="basic-vertical-layouts">
        <div class="row match-height">
          <div class="col-md-7 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Frequently Questions & Answer</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form class="form form-vertical">
                    <div class="form-body">
                      <div class="row">

                        <div class="question-input-box">
                          <div class="col-12">
                            <div class="form-group">
                              <label for="question">Question <span>*</span></label>
                              <textarea id="question" rows="4" maxlength="500" class="form-control" name="question"
                                placeholder="maximum 500 Character" required></textarea>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="questionAnswer">Answer <span>*</span></label>
                              <textarea id="questionAnswer" rows="4" maxlength="500" class="form-control" name="answer"
                                placeholder="maximum 500 Character" required></textarea>
                            </div>
                          </div>
                        </div>



                        <div class="col-12 d-flex justify-content-end">
                          <button type="button" id="questionBtn" class="btn btn-primary me-1 mb-1">Submit</button>
                          <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                      </div>


                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-5 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Frequently Questions & Answers List</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form class="form form-vertical">
                    <div class="form-body">
                      <div class="row">
                        <div class="question-input-box">
                          <div id="questionField" class="col-12">
                            <?php
                        $selectQuestion = mysqli_query($con,"SELECT * FROM questions");
                        if(mysqli_num_rows($selectQuestion) > 0){
                          while($row = mysqli_fetch_array($selectQuestion)){
                            ?><div class="form-group p-1">
                              <details>
                                <summary><?=$row['question']?></summary>
                                <div style="margin:10px;">Ans: <?=$row['answer']?></div>
                              </details>
                              <button type="button" style="cursor:pointer;border:none;" value="<?=$row['id']?>"
                                class="badge bg-primary QuesEditBtn"><i class="bi bi-pencil-square"></i></button>
                              <button type="button" style="cursor:pointer;border:none;" value="<?=$row['id']?>"
                                class="badge bg-danger QuesDeleteBtn"><i class="bi bi-trash3"></i></button>
                            </div>
                            <?php
                            }
                          }else{
                          ?><div class="form-data">
                              No Questions and Answer Added yet!
                            </div>
                            <?php
                          }
                          ?>
                          </div>
                        </div>
                      </div>


                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    <?php
    }elseif (isset($_GET['Settings'])) {
      # code...
      ?>
    <div class="page-heading">

      <!-- Basic Vertical form layout section start -->
      <section id="basic-vertical-layouts">
        <div class="row match-height">
          <div class="">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Settings</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form class="form form-vertical" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-body">
                      <div class="row">
                        <div class="col-12">
                          <?php
                          $search = mysqli_query($con, "SELECT * FROM settings");
                          $row = mysqli_fetch_array($search);
                          ?>
                          <div class="form-group">
                            <label for="first-name-vertical">Website Name <span>*</span></label>
                            <input type="text" id="first-name-vertical" class="form-control" name="name"
                              placeholder="Name" value="<?=$row['name']?>">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="short-description-id-vertical">Short Description</label>
                            <textarea id="short-description-id-vertical" rows="4" maxlength="140" class="form-control"
                              name="short_description"
                              placeholder="Write short description maximum 140 Character"><?=$row['short_description']?></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="editor">About us <span>*</span></label>
                            <!-- Cke Editor -->
                            <textarea name="about_us" id="editor"><?=$row['about_us']?></textarea>

                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Logo</label>
                            <input type="file" id="image-vertical" class="form-control" value="<?=$row['logo']?>"
                              name="logo">
                          </div>
                          <img src="../<?=$row['logo']?>" alt="" height="60" width="60">
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Address</label>
                            <input type="text" id="image-vertical" class="form-control" name="address"
                              value="<?=$row['address']?>">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Number</label>
                            <input type="text" id="image-vertical" class="form-control" value="<?=$row['number']?>"
                              name="number">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Facebook</label>
                            <input type="text" id="image-vertical" class="form-control" value="<?=$row['facebook']?>"
                              name="facebook">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Youtube</label>
                            <input type="text" id="image-vertical" class="form-control" value="<?=$row['youtube']?>"
                              name="youtube">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Clients</label>
                            <input type="text" id="image-vertical" class="form-control" value="<?=$row['clients']?>"
                              name="clients">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Projects</label>
                            <input type="text" id="image-vertical" class="form-control" value="<?=$row['projects']?>"
                              name="projects">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Support Hour</label>
                            <input type="text" id="image-vertical" class="form-control"
                              value="<?=$row['support_hours']?>" name="support_hours">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Workers</label>
                            <input type="text" id="image-vertical" class="form-control" value="<?=$row['workers']?>"
                              name="workers">
                          </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                          <button type="submit" name="submitSetting" class="btn btn-primary me-1 mb-1">Submit</button>
                          <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    <?php
    } else {
      ?>
    <div id="error">
      <div class="error-page container">
        <div class="col-md-6 col-12 offset-md-2">
          <div class="text-center">
            <img class="img-error" src="./assets/compiled/svg/error-404.svg" alt="Not Found">
            <h1 class="error-title">NOT FOUND</h1>
            <p class='fs-5 text-gray-600'>The page you are looking not found.</p>
            <button onclick="history.back()" class="btn btn-lg btn-outline-primary mt-3">Go Home</button>
          </div>
        </div>
      </div>
    </div>
    <?php
    } ?>

    <?php include 'includes/footer.php'; ?>
  </div>
  </div>
  <script src="assets/static/js/components/dark.js"></script>
  <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="assets/compiled/js/app.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/super-build/ckeditor.js"></script>
  <script src="js/ckeEditor.js"></script>
  <script src="assets/extensions/tinymce/tinymce.min.js"></script>
  <script src="assets/static/js/pages/tinymce.js"></script>
  <script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="js/sweetalert.js"></script>
  <script src="js/script.js"></script>
</body>

</html>