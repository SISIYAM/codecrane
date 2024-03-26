<?php
if (isset($_POST['serviceBtn'])) {
  $service_uniq_id = uniqid();
  $service_name = str_replace("'","\'", $_POST['service_name']);
  $short_description = str_replace("'","\'", $_POST['short_description']);
  $description = str_replace("'","\'", $_POST['description']);
  $checkout_section = str_replace("'","\'", $_POST['checkout_section']);
  $price = $_POST['price'];
  $img = $_FILES['service_image']['name'];

  /** 
      renaming the image name with 
      with random string
     **/
  
  $extension = pathinfo($img, PATHINFO_EXTENSION);
  $allowed_extension = array("jpg","jpeg","png","gif","webp");

  if(in_array($extension,$allowed_extension)){
    $new_name = rand().".".$extension; 
    $new_upload_img_name = "assets/img/services/" .$new_name;
    $image_path = "../assets/img/services/" .$new_name;

    $sql = "INSERT INTO services (service_id,service_name,short_description,description,price,checkout_section,service_image) 
    VALUES ('$service_uniq_id','$service_name','$short_description','$description','$price','$checkout_section','$new_upload_img_name')";
    $query = mysqli_query($con, $sql);
  
    if ($query) {
      move_uploaded_file($_FILES["service_image"]["tmp_name"], $image_path);
      $_SESSION['message'] = "Success";
      ?>
<script>
location.replace("list.php?Services");
</script>
<?php
    } else {
      $_SESSION['error'] = "Failed";
      ?>
<script>
location.replace("list.php?Services");
</script>
<?php
  
    }
  }else{
    $_SESSION['warning'] = "Invalid Extension";
    $_SESSION['replace_url'] = "add.php?Services";
    ?>
<script>
location.replace("list.php?Services");
</script>
<?php
  }


}

// add members

if(isset($_POST['submitMember'])){
  $member_uniq_id = uniqid();
  $full_name = str_replace("'","\'", $_POST['full_name']);
  $education = str_replace("'","\'", $_POST['education']);
  $post = str_replace("'","\'", $_POST['post']);
  $department = str_replace("'","\'", $_POST['department']);
  $facebook = str_replace("'","\'", $_POST['facebook']);
  $instagram = str_replace("'","\'", $_POST['instagram']);
  $linkedin = str_replace("'","\'", $_POST['linkedin']);
  $twitter = str_replace("'","\'", $_POST['twitter']);
  $youtube = str_replace("'","\'", $_POST['youtube']);
  $github = str_replace("'","\'", $_POST['github']);
  $image = $_FILES['image']['name'];
  $extension = pathinfo($image, PATHINFO_EXTENSION);
  $supported_extension = array("jpg","jpeg","png","gif","webp");
  if(in_array($extension, $supported_extension)){
    $new_name = rand().".".$extension; 
    $new_path_name = "assets/img/members/" .$new_name;
    $image_path = "../assets/img/members/" .$new_name;

    $sql = "INSERT INTO members (`member_id`, `full_name`, `education`, `post`, `department`, `facebook`, `instagram`, `linkedin`, `twitter`, `youtube`, `github`, `image`) 
    VALUES ('$member_uniq_id','$full_name','$education','$post','$department','$facebook','$instagram','$linkedin','$twitter','$youtube','$github','$new_path_name')";
    $query = mysqli_query($con,$sql);
    
    if($sql){
      move_uploaded_file($_FILES['image']['tmp_name'],$image_path);
      $_SESSION['message'] = "Success";
          ?>
<script>
location.replace("list.php?Team-Members");
</script>
<?php
        }else{
          $_SESSION['error'] = "Failed";
          ?>
<script>
location.replace("list.php?Team-Members");
</script>
<?php
        }
      }else{
      $_SESSION['warning'] = "Invalid Extension";
      $_SESSION['replace_url'] = "add.php?Team-Members";
      ?>
<script>
location.replace("list.php?Team-Members");
</script>
<?php
      }

}

// add projects

if(isset($_POST['submitProject'])){
  $project_uniq_id = uniqid();
  $project_name = str_replace("'","\'", $_POST['project_name']);
  $short_description = str_replace("'","\'", $_POST['short_description']);
  $description = str_replace("'","\'", $_POST['description']);
  $images = $_FILES['images'];
  $imagesLength = count($images['name']);

  
  $image = $_FILES['image']['name'];
  $extension = pathinfo($image, PATHINFO_EXTENSION);
  $allowed_extension = array("jpg","jpeg","png","gif","webp");

  if(in_array($extension,$allowed_extension)){
    $new_name = rand().".".$extension;
    $new_img_name = "assets/img/Projects/".$new_name;
    $image_path = "../assets/img/Projects/".$new_name;

    $sql = "INSERT INTO projects (`project_uniq_id`,`project_name`, `short_description`, `description`, `image`) 
    VALUES ('$project_uniq_id','$project_name','$short_description','$description','$new_img_name')";
    $query = mysqli_query($con, $sql);
    
    if($query){
       //upload multiple images
      if($images != NULL){
        $project_id = mysqli_insert_id($con);
        for ($i = 0; $i < $imagesLength; $i++) {
          # get the image info and store them in var
          $image_name = $images['name'][$i];
          $tmp_name = $images['tmp_name'][$i];
          $error = $images['error'][$i];
      
          # if there is not error occurred while uploading
          if ($error === 0) {
      
            # get image extension store it in var
            $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
      
            
      
            /** 
      crating array that stores allowed
      to upload image extensions.
      **/
            $allowed_exs = array('jpg', 'jpeg', 'png', 'webp', 'gif');
      
      
            /** 
               check if the the image extension 
               is present in $allowed_exs array
               **/
      
            if (in_array($img_ex, $allowed_exs)) {
              /** 
                   renaming the image name with 
                   with random string
                  **/
              $new_img_name = rand().".".$img_ex;
      
              # crating upload path on root directory
              $img_upload_path = '../assets/img/Projects/' . $new_img_name;
              $img_upload_path_db = 'assets/img/Projects/' . $new_img_name;
      
              # inserting imge name into database
      
              $ql = "INSERT INTO `multiple_project_image`(`image`,`project_id`) VALUES ('$img_upload_path_db','$project_id')";
              $sql_run = mysqli_query($con, $ql);
              if($sql_run){
                # move uploaded image to 'uploads' folder 
                 move_uploaded_file($tmp_name, $img_upload_path);
              }
            }
          }
        }
      }
      
      move_uploaded_file($_FILES['image']['tmp_name'],$image_path);
      $_SESSION['message'] = "Success";
      ?>
<script>
location.replace("list.php?Projects");
</script>
<?php
    }else{
      $_SESSION['error'] = "Failed";
      ?>
<script>
location.replace("list.php?Projects");
</script>
<?php
    }
  }else{
    $_SESSION['warning'] = "Invalid Extension";
      $_SESSION['replace_url'] = "add.php?Projects";
      ?>
<script>
location.replace("list.php?Projects");
</script>
<?php
  }

}

// Update service

if(isset($_POST['serviceEditBtn'])){
  $service_id = $_POST['service_id'];
  $serviceName = str_replace("'","\'", $_POST['service_name']);
  $short_description = str_replace("'","\'", $_POST['short_description']);
  $description = str_replace("'","\'", $_POST['description']);
  $price = $_POST['price'];
  $checkout_section = str_replace("'","\'", $_POST['checkout_section']);
  $service_image = $_FILES['service_image']['name'];
  
  $selectDefaultImage = mysqli_query($con,"SELECT * FROM services WHERE id='$service_id'");
  $image_row = mysqli_fetch_array($selectDefaultImage);
  $defaultImagePath = $image_row['service_image'];
  // if file input is null
  if($service_image == NULL){
    $sql = "UPDATE services SET service_name = '$serviceName', short_description='$short_description',
    description='$description',price='$price',checkout_section='$checkout_section',service_image='$defaultImagePath' WHERE id='$service_id'";
    $query = mysqli_query($con,$sql);
    if($query){
      $_SESSION['message'] = "Success";
      ?>
<script>
location.replace("list.php?Services")
</script>
<?php
    }else{
      $_SESSION['error'] = "Failed";
      ?>
<script>
location.replace("list.php?Services")
</script>
<?php
    }
  }else{

  $extension = pathinfo($service_image,PATHINFO_EXTENSION);
  $supported_extension = array("jpg","jpeg","png","gif","webp");
  if(in_array($extension,$supported_extension)){
    $new_name = rand().".".$extension;
    $new_path_name = "assets/img/services/" .$new_name;
    $image_path = "../assets/img/services/" .$new_name;

    $sql = "UPDATE services SET service_name = '$serviceName', short_description='$short_description',
    description='$description',service_image='$new_path_name' WHERE id='$service_id'";
    $query = mysqli_query($con,$sql);
    if($query){
      if($defaultImagePath != NULL){
        unlink("../".$defaultImagePath);
      }
      move_uploaded_file($_FILES['service_image']['tmp_name'],$image_path);
      $_SESSION['message'] = "Success";
      ?>
<script>
location.replace("list.php?Services")
</script>
<?php
    }else{
      $_SESSION['error'] = "Failed";
      ?>
<script>
location.replace("list.php?Services");
</script>
<?php
    }
  }else{
    $_SESSION['warning'] = "Invalid Extension";
    $_SESSION['replace_url']="edit.php?eid=".$service_id;
    ?>
<script>
location.replace("list.php?Services");
</script>
<?php
  }
  }

}

// Update members

if(isset($_POST['updateMember'])){
  $member_id = $_POST['member_id'];
  $full_name = str_replace("'","\'", $_POST['full_name']);
  $education = str_replace("'","\'", $_POST['education']);
  $post = str_replace("'","\'", $_POST['post']);
  $department = str_replace("'","\'", $_POST['department']);
  $facebook = str_replace("'","\'", $_POST['facebook']);
  $instagram = str_replace("'","\'", $_POST['instagram']);
  $linkedin = str_replace("'","\'", $_POST['linkedin']);
  $twitter = str_replace("'","\'", $_POST['twitter']);
  $youtube = str_replace("'","\'", $_POST['youtube']);
  $github = str_replace("'","\'", $_POST['github']);
  $image = $_FILES['image']['name'];
  
  $selectDefaultImage = mysqli_query($con,"SELECT * FROM members WHERE id='$member_id'");
  $image_row = mysqli_fetch_array($selectDefaultImage);
  $defaultImagePath = $image_row['image'];
  // if file input is null
  if($image == NULL){
    $sql = "UPDATE members SET full_name = '$full_name', education='$education',
    post='$post',department='$department',facebook='$facebook',instagram='$instagram',linkedin='$linkedin',twitter='$twitter',
    youtube='$youtube',github='$github',image='$defaultImagePath' WHERE id='$member_id'";
    $query = mysqli_query($con,$sql);
    if($query){
      $_SESSION['message'] = "Success";
      ?>
<script>
location.replace("list.php?Team-Members");
</script>
<?php
    }else{
      $_SESSION['error'] = "Failed";
      ?>
<script>
location.replace("list.php?Team-Members");
</script>
<?php
    }
  }else{

  $extension = pathinfo($image,PATHINFO_EXTENSION);
  $supported_extension = array("jpg","jpeg","png","gif","webp");
  if(in_array($extension,$supported_extension)){
    $new_name = rand().".".$extension;
    $new_path_name = "assets/img/members/" .$new_name;
    $image_path = "../assets/img/members/" .$new_name;

    $sql = "UPDATE members SET full_name = '$full_name', education='$education',
    post='$post',department='$department',facebook='$facebook',instagram='$instagram',linkedin='$linkedin',twitter='$twitter',
    youtube='$youtube',github='$github',image='$new_path_name' WHERE id='$member_id'";
    $query = mysqli_query($con,$sql);
    if($query){
      if($defaultImagePath != NULL){
        unlink("../".$defaultImagePath);
      }
      move_uploaded_file($_FILES['image']['tmp_name'],$image_path);
      $_SESSION['message'] = "Success";
      ?>
<script>
location.replace("list.php?Team-Members");
</script>
<?php
    }else{
      $_SESSION['error'] = "Failed";
      ?>
<script>
location.replace("list.php?Team-Members");
</script>
<?php
    }
  }else{
    $_SESSION['warning'] = "Invalid Extension";
    $_SESSION['replace_url']="edit.php?member_id=".$member_id;
    ?>
<script>
location.replace("list.php?Team-Members");
</script>
<?php
  }
  }

}

// update projects
if(isset($_POST['updateProjects'])){
  $id = $_POST['id'];
  $project_name = str_replace("'","\'", $_POST['project_name']);
  $short_description = str_replace("'","\'", $_POST['short_description']);
  $description = str_replace("'","\'", $_POST['description']);
  $image = $_FILES['image']['name'];

  // add multiple image
  $images = $_FILES['images'];
  $imagesLength = count($images['name']);
    
    $extension = pathinfo($image,PATHINFO_EXTENSION);
     # $allowed_extension = array("jpg","jpeg","png","gif","webp");
     $new_name = rand().".".$extension;
     $image_path = "../assets/img/Projects/".$new_name;
     $new_path_name = "assets/img/Projects/".$new_name;
   
     // select old image path
    $selectImagePath = mysqli_query($con, "SELECT * FROM projects WHERE id='$id'");
    if(mysqli_num_rows($selectImagePath) > 0){
      $data = mysqli_fetch_array($selectImagePath);
      $oldImagePath = $data['image'];
      # if input image null
      if($image == NULL){
        $image_data = $oldImagePath;
      }else{
        $image_data = $new_path_name;
      }
    }
    
     $sql = mysqli_query($con,"UPDATE projects SET project_name='$project_name',short_description='$short_description',
     description='$description',image='$image_data' WHERE id='$id'");
     if($sql){
      if($image != NULL){
        if($oldImagePath != NULL){
          unlink("../".$oldImagePath);
        }
        move_uploaded_file($_FILES['image']['tmp_name'],$image_path);
      }
       //upload multiple images
       if($images != NULL){
        for ($i = 0; $i < $imagesLength; $i++) {
          # get the image info and store them in var
          $image_name = $images['name'][$i];
          $tmp_name = $images['tmp_name'][$i];
          $error = $images['error'][$i];
      
          # if there is not error occurred while uploading
          if ($error === 0) {
      
            # get image extension store it in var
            $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
      
            
      
            /** 
      crating array that stores allowed
      to upload image extensions.
      **/
            $allowed_exs = array('jpg', 'jpeg', 'png', 'webp', 'gif');
      
      
            /** 
               check if the the image extension 
               is present in $allowed_exs array
               **/
      
            if (in_array($img_ex, $allowed_exs)) {
              /** 
                   renaming the image name with 
                   with random string
                  **/
              $new_img_name = rand().".".$img_ex;
      
              # crating upload path on root directory
              $img_upload_path = '../assets/img/Projects/' . $new_img_name;
              $img_upload_path_db = 'assets/img/Projects/' . $new_img_name;
      
              # inserting img name into database
      
              $ql = "INSERT INTO `multiple_project_image`(`image`,`project_id`) VALUES ('$img_upload_path_db','$id')";
              $sql_run = mysqli_query($con, $ql);
              if($sql_run){
                # move uploaded image to 'uploads' folder 
                 move_uploaded_file($tmp_name, $img_upload_path);
              }
            }
          }
        }
      }
      // End
      $_SESSION['message'] = "Success";
      ?>
<script>
location.replace("list.php?Projects");
</script>
<?php
     }else{
      $_SESSION['error']= "Failed";
      ?>
<script>
location.replace("list.php?Projects");
</script>
<?php
     }
}

// update each multiple image
if(isset($_POST['submitChangedMultipleImage'])){
  $image_id = $_POST['edit_id'];
  $image_data = $_FILES['image_data']['name'];
  $extension = pathinfo($image_data,PATHINFO_EXTENSION);
  $new_name = rand().".".$extension;
  $image_path = "../assets/img/Projects/".$new_name;
  $new_path_name = "assets/img/Projects/".$new_name;

  $search = mysqli_query($con,"SELECT * FROM multiple_project_image WHERE id='$image_id'");
  if(mysqli_num_rows($search) > 0){
    $row = mysqli_fetch_array($search);
    $oldImagePath = $row['image'];
  }
  if($image_data == NULL){
    $imageData = $oldImagePath;
  }else{
    $imageData = $new_path_name;
  }
  $sql = mysqli_query($con,"UPDATE multiple_project_image SET image='$imageData' WHERE id='$image_id'");
  if($sql){
    if($image_data != NULL){
      if($oldImagePath != NULL){
        unlink("../".$oldImagePath);
      }
      move_uploaded_file($_FILES['image_data']['tmp_name'],$image_path);
    }
    ?>
<script>
location.replace("");
</script>
<?php
  }else{
   ?>
<script>
alert("Failed");
</script>
<?php 
  }
}

// submit setting
if(isset($_POST['submitSetting'])){
  $name = $_POST['name'];
  $short_description = $_POST['short_description'];
  $about_us = $_POST['about_us'];
  $address = $_POST['address'];
  $number = $_POST['number'];
  $facebook = $_POST['facebook'];
  $youtube = $_POST['youtube'];
  $clients = $_POST['clients'];
  $projects = $_POST['projects'];
  $support_hours = $_POST['support_hours'];
  $workers = $_POST['workers'];
  $logo = $_FILES['logo']['name'];

  $extension = pathinfo($logo, PATHINFO_EXTENSION);
  $supported_extension = array("jpg","jpeg","png","gif","webp");
  if(in_array($extension,$supported_extension)){
    $new_name = rand().".".$extension; 
    $new_path_name = "assets/img/" .$new_name;
    $image_path = "../assets/img/" .$new_name;

    $sql = "INSERT INTO settings (`name`,`short_description`, `about_us`, `address`, `number`, `facebook`, `youtube`, `clients`, `projects`, `support_hours`, `workers`,`logo`) 
    VALUES ('$name','$short_description','$about_us','$address','$number','$facebook','$youtube','$clients','$projects','$support_hours','$workers','$new_path_name')";
    $query = mysqli_query($con,$sql);
    
    if($sql){
      move_uploaded_file($_FILES['logo']['tmp_name'],$image_path);
      $_SESSION['message'] = "Success";
          ?>
<script>
location.replace("list.php?Settings");
</script>
<?php
        }else{
          $_SESSION['error'] = "Failed";
          ?>
<script>
location.replace("list.php?Settings");
</script>
<?php
        }
      }else{
      $_SESSION['warning'] = "Invalid Extension";
      $_SESSION['replace_url'] = "add.php?Settings";
      ?>
<script>
location.replace("list.php?Settings");
</script>
<?php
      }
  }

?>