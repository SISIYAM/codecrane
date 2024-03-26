<?php
session_start();
include 'includes/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<?php
include 'includes/head.php';
?>
<style>
.table tbody tr td span {
  cursor: pointer;

}
</style>


<body>
  <?php include 'includes/nav.php'; ?>
  <div id="main">
    <header class="mb-3">
      <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
      </a>
    </header>

    <?php if (isset($_GET['Services'])) {
      ?>
    <div class="page-heading">
      <!-- Basic Tables start -->
      <section class="section">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">
              Services List
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Service Name</th>
                    <th>Added On</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  $select = mysqli_query($con, "SELECT * FROM services ORDER BY id DESC");
                  if(mysqli_num_rows($select) > 0){
                    while($row = mysqli_fetch_array($select)){
                      $no ++;
                      ?>
                  <tr>
                    <td><?=$no?></td>
                    <td><a href="../<?=$row['service_image'];?>" target="_blank"><img
                          src="../<?=$row['service_image'];?>" height="50" width="50" alt=""></a></td>
                    <td><?=$row['service_name'];?></td>
                    <td><?=$row['added_on'];?></td>
                    <td><?=$row['author'];?></td>
                    <td>
                      <?php if($row['status'] == 1){
                        ?>
                      <button value="<?=$row['id'];?>" style="border:none;"
                        class="badge bg-success serviceInactiveBtn">Active</button>
                      <?php
                      }else{
                       ?>
                      <button value="<?=$row['id'];?>" style="border:none;"
                        class="badge bg-secondary serviceActiveBtn">Inactive</button>
                      <?php 
                      }?>
                    </td>
                    <td>
                      <a href="edit.php?eid=<?=$row['id'];?>"><span class="badge bg-primary">Edit</span></a>
                    </td>
                    <td><button style="border:none;" value="<?=$row['id'];?>" id=""
                        class="badge bg-danger deleteService">Delete</button>
                    </td>
                  </tr>
                  <?php
                    }
                  }else{
                    ?>
                  <tr>
                    No Result Found!
                  </tr>
                  <?php
                  }
                  ?>
              </table>
            </div>
          </div>
        </div>

      </section>
      <!-- Basic Tables end -->
    </div>
    <?php
    } elseif (isset($_GET['Team-Members'])) {
      ?>
    <div class="page-heading">
      <!-- Basic Tables start -->
      <section class="section">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">
              Team Mermbers List
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Post</th>
                    <th>Department</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  $select = mysqli_query($con, "SELECT * FROM members ORDER BY id DESC");
                  if(mysqli_num_rows($select) > 0){
                    while($row = mysqli_fetch_array($select)){
                      $no ++;
                      ?>
                  <tr>
                    <td><?=$no?></td>
                    <td><a href="../<?=$row['image'];?>" target="_blank"><img src="../<?=$row['image'];?>" height="50"
                          width="50" alt=""></a></td>
                    <td><?=$row['full_name'];?></td>
                    <td>
                      <?php if($row['post'] == 1){
                  
                      echo "Founder";
                      
                    }elseif($row['post'] == 2){
                      echo "Co-Founder";
                    }elseif($row['post'] == 3){
                      echo "CEO";
                    }else{
                      echo "Member";  
                    }
                    ?></td>
                    <td><?=$row['department'];?></td>
                    <td><a href="edit.php?member_id=<?=$row['id'];?>"><span class="badge bg-primary">Edit</span></a>
                    </td>
                    <td><button style="border:none;" value="<?=$row['id'];?>"
                        class="badge bg-danger deleteMember">Delete</button></td>
                  </tr>
                  <?php
                    }
                  }
                    ?>

              </table>
            </div>
          </div>
        </div>

      </section>
      <!-- Basic Tables end -->
    </div>
    <?php
    } elseif (isset($_GET['Projects'])) {
      ?>
    <div class="page-heading">
      <!-- Basic Tables start -->
      <section class="section">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">
              Our Projects List
            </h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Project Name</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no =0;
                  $select = mysqli_query($con, "SELECT * FROM projects");
                  if(mysqli_num_rows($select) > 0){
                    while($row = mysqli_fetch_array($select)){
                      $no++;
                      ?>
                  <tr>
                    <td><?=$no;?></td>
                    <td><a href="../<?=$row['image'];?>" target="_blank"><img src="../<?=$row['image'];?>" alt=""
                          height="50" width="50"></a>
                    </td>
                    <td><?=$row['project_name'];?></td>
                    <td>
                      <a href="edit.php?project-id=<?=$row['id']?>"><span class="badge bg-primary">Edit</span></a>
                    </td>
                    <td>
                      <button style="border:none;" value="<?=$row['id']?>"
                        class="badge bg-danger deleteProject">Delete</button>
                    </td>
                  </tr>
                  <?php
                    }
                  }
                  ?>


              </table>
            </div>
          </div>
        </div>

      </section>
      <!-- Basic Tables end -->
    </div>
    <?php
    }else {
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
  <script src="assets/extensions/jquery/jquery.min.js"></script>
  <script src="assets/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/static/js/pages/datatables.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>
  <script src="js/sweetalert.js"></script>
  <script src="js/script.js"></script>

  <?php
  if (isset($_SESSION['message'])) {
    ?>
  <script>
  callSuccess();
  </script>
  <?php
  unset($_SESSION['message']);
  }

  if (isset($_SESSION['error'])) {
    ?>
  <script>
  callError();
  </script>
  <?php
  unset($_SESSION['error']);
  }

  if (isset($_SESSION['warning'])) {
    ?>
  <script>
  Swal2.fire({
    icon: "warning",
    title: "<?=$_SESSION['warning'];?>",
  }).then(() => {
    location.replace("<?=$_SESSION['replace_url']?>");
  });
  </script>
  <?php
  unset($_SESSION['warning']);
  unset($_SESSION['replace_url']);
  }


  ?>
</body>

</html>