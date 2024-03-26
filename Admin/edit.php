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
    if (isset($_GET['eid'])) {
      $eid = $_GET['eid'];
      $select = mysqli_query($con, "SELECT * FROM services WHERE id ='$eid'");
      if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_array($select);
        $service_name = $row['service_name'];
        $short_description = $row['short_description'];
        $description = $row['description'];
        $service_image = $row['service_image'];
        $price = $row['price'];
        $checkout_section = $row['checkout_section'];
      }
      ?>
    <div class="page-heading">

      <!-- Basic Vertical form layout section start -->
      <section id="basic-vertical-layouts">
        <div class="row match-height">
          <div class="">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><?=$service_name?></h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data" id="submitEditForm"
                    class="form form-vertical">
                    <div class="form-body">
                      <div class="row">
                        <div class="col-12">
                          <input type="hidden" name="service_id" value="<?=$eid;?>">
                          <div class="form-group">
                            <label for="service_name">Service Name <span>*</span></label>
                            <input type="text" value="<?=$service_name?>" id="service_name" class="form-control"
                              name="service_name" placeholder="Service Name">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="short-description-id-vertical">Short Description</label>
                            <textarea id="short-description-id-vertical" rows="4" maxlength="140" class="form-control"
                              name="short_description"
                              placeholder="Write short description maximum 140 Character"><?=$short_description?></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="editor">Descriptions <span>*</span></label>
                            <!-- Cke Editor -->
                            <textarea name="description" id="editor"><?=$description?></textarea>

                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="service_name">Price<span>*</span></label>
                            <input type="text" value="<?=$price?>" id="service_name" class="form-control" name="price"
                              placeholder="Price">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Checkout section</label>
                            <textarea id="dark" name="checkout_section" cols="30"
                              rows="10"><?=$checkout_section?></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">image</label>
                            <input type="file" value="<?=$service_image?>" id="image-vertical" class="form-control"
                              name="service_image">
                          </div>
                          <div class="show_image">
                            <a href="../<?=$service_image?>" target="_blank"><img src="../<?=$service_image?>" alt=""
                                height="100" width="180"></a>
                          </div>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                          <button type="submit" name="serviceEditBtn" class="btn btn-primary me-1 mb-1">Submit</button>
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
    } elseif (isset($_GET['member_id'])) {
      $member_id = $_GET['member_id'];
      $select = mysqli_query($con, "SELECT * FROM members WHERE id ='$member_id'");
      if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_array($select);
        $full_name = $row['full_name'];
        $education = $row['education'];
        $post = $row['post'];
        $department = $row['department'];
        $facebook = $row['facebook'];
        $instagram = $row['instagram'];
        $linkedin = $row['linkedin'];
        $twitter = $row['twitter'];
        $youtube = $row['youtube'];
        $github = $row['github'];
        $image = $row['image'];
      }
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
                            <input type="hidden" value="<?=$member_id?>" name="member_id">
                            <label for="fullName">Full Name <span>*</span></label>
                            <input type="text" id="fullName" class="form-control" name="full_name"
                              placeholder="Full Name" value="<?=$full_name?>" required>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="education">Education <span>(Optional)</span></label>
                            <input type="text" id="education" class="form-control" name="education"
                              value="<?=$education?>" placeholder="Ex- Aeronautical Engineering, BSMRAAU">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <h6>Post <span>*</span></h6>
                          <div class="input-group mb-3">
                            <select class="form-select" name="post" id="postMember" required>
                              <?php 
                              if($post == 1){
                                ?>
                              <option value="1" selected>Founder</option>
                              <option value="2">Co-Founder</option>
                              <option value="3">CEO</option>
                              <option value="4">Member</option>
                              <?php
                              }elseif ($post == 2) {
                                ?>
                              <option value="1">Founder</option>
                              <option value="2" selected>Co-Founder</option>
                              <option value="3">CEO</option>
                              <option value="4">Member</option>
                              <?php
                              }elseif ($post == 3) {
                                ?>
                              <option value="1">Founder</option>
                              <option value="2">Co-Founder</option>
                              <option value="3" selected>CEO</option>
                              <option value="4">Member</option>
                              <?php
                              }else{
                                ?>
                              <option value="1">Founder</option>
                              <option value="2">Co-Founder</option>
                              <option value="3">CEO</option>
                              <option value="4" selected>Member</option>
                              <?php
                              }
                              ?>

                            </select>
                            <label class="input-group-text" for="postMember">Options</label>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="department">Department <span>*</span></label>
                            <input type="text" id="department" class="form-control" name="department"
                              value="<?=$department?>"
                              placeholder="Ex- Web Development, Back-End Development, Graphics Design">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="facebook">Facebook<span>(Optional)</span></label>
                            <input type="text" id="facebook" class="form-control" name="facebook" value="<?=$facebook?>"
                              placeholder="Link">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="instagram">Instagram<span>(Optional)</span></label>
                            <input type="text" id="instagram" class="form-control" name="instagram"
                              value="<?=$instagram?>" placeholder="Link">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="linkedin">Linkedin<span>(Optional)</span></label>
                            <input type="text" id="linkedin" class="form-control" name="linkedin" value="<?=$linkedin?>"
                              placeholder="Link">
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <label for="twitter">Twitter<span>(Optional)</span></label>
                            <input type="text" id="twitter" class="form-control" name="twitter" value="<?=$twitter?>"
                              placeholder="Link">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="youtube">Youtube<span>(Optional)</span></label>
                            <input type="text" id="youtube" class="form-control" name="youtube" value="<?=$youtube?>"
                              placeholder="Link">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="github">GitHub<span>(Optional)</span></label>
                            <input type="text" id="github" class="form-control" name="github" value="<?=$github?>"
                              placeholder="Link">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">image</label>
                            <input type="file" id="memberImage" class="form-control" name="image">
                          </div>
                          <a href="../<?=$image?>"><img src="../<?=$image?>" alt="" height="300" width="300"></a>
                        </div>

                        <div class="col-12 d-flex justify-content-end">
                          <button type="submit" id="memberBtn" name="updateMember"
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
    } elseif (isset($_GET['project-id'])) {
      $project_id = $_GET['project-id'];
      $select = mysqli_query($con, "SELECT * FROM projects WHERE id ='$project_id'");
      if(mysqli_num_rows($select) > 0){
        $row = mysqli_fetch_array($select);
        $project_name = $row['project_name'];
        $short_description = $row['short_description'];
        $description = $row['description'];
        $image = $row['image'];
      }
      ?>
    <!-- Edit multiple image Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>

            <span aria-hidden="true" style="cursor:pointer" class="closeModalBtn">&times;</span>

          </div>
          <form method="post" action="" id="multipleImageFormID" enctype="multipart/form-data">
            <div class="modal-body" id="editMultipleImageOutput"></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary closeModalBtn">Close</button>
              <button type="submit" name="submitChangedMultipleImage" id="updateImageEdit" class="btn btn-primary">Save
                changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End Edit multiple image modal -->

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
                            <input type="hidden" name="id" value="<?=$row['id'];?>">
                            <input type="text" id="first-name-vertical" class="form-control" name="project_name"
                              placeholder="Service Name" value="<?=$project_name;?>">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="short-description-id-vertical">Short Description</label>
                            <textarea id="short-description-id-vertical" rows="4" maxlength="140" class="form-control"
                              name="short_description"
                              placeholder="Write short description maximum 140 Character"><?=$short_description;?></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="editor">Descriptions <span>*</span></label>
                            <!-- Cke Editor -->
                            <textarea name="description" id="editor"><?=$description;?></textarea>

                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="image-vertical">Thumbnail image</label>
                            <p>* Allowed Extensions - jpg, jpeg, png, webp</p>
                            <input type="file" id="image-vertical" class="form-control" name="image">
                            <br>
                            <a href="../<?=$image?>" target="_blank"><img src="../<?=$image?>" alt="" height="100"
                                width="180"></a>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <button type="button" id="addMultipleImage" value="" class="btn btn-primary">View Multiple
                              images</button>
                          </div>
                        </div>
                        <div id="toggleDiv" style="display:none;">
                          <?php 
                          $count = 0;
                        $select_multiple_image = mysqli_query($con,"SELECT * FROM multiple_project_image WHERE project_id='$project_id'");
                          if(mysqli_num_rows($select_multiple_image) > 0){
                            while($res = mysqli_fetch_array($select_multiple_image)){
                              $count ++;
                              ?>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="">Image <?=$count?></label>
                              <br>
                              <a href="../<?=$res['image']?>" target="_blank"><img src="../<?=$res['image']?>" alt=""
                                  height="100" width="180"></a>
                              <button type="button" style="cursor:pointer;border:none;"
                                class="badge bg-danger mx-2 deleteMultipleImage" value="<?=$res['id']?>">Delete</button>
                              <button type="button" style="border:none;" value="<?=$res['id']?>"
                                class=" badge bg-primary editMultipleImageBtn">Edit</button>

                            </div>
                          </div>
                          <?php
                            }
                          }
                        
                        ?>
                        </div>

                        <div class="col-12">
                          <div class="form-group">
                            <button type="button" id="addMultipleImage2" value="" class="btn btn-success">Add multiple
                              images</button>
                          </div>
                        </div>

                        <div id="toggleDiv2" style="display:none;" class="col-12">
                          <div class="form-group">
                            <label for="multiple-image-vertical">Add images</label>
                            <input type="file" id="multiple-image-vertical" class="form-control" name="images[]"
                              multiple>
                          </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                          <button type="submit" name="updateProjects" class="btn btn-primary me-1 mb-1">Submit</button>
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