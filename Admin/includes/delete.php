<?php
include 'dbcon.php';

// delete question
if(isset($_POST['questionDeleteBtn'])){
  $id = $_POST['id'];

  $delete = mysqli_query($con, "DELETE FROM questions WHERE id='$id'");
  if($delete){
    echo 200;
  }else{
    echo 500;
  }
}

// delete services
if(isset($_POST['deleteServiceBtn'])){
  $id = $_POST['id'];
  $select = mysqli_query($con, "SELECT * FROM services WHERE id='$id'");
  $row = mysqli_fetch_array($select);
  $imagePath = $row['service_image'];
  $delete = mysqli_query($con,"DELETE FROM services WHERE id='$id'");
  if($delete){
    if($imagePath != NULL){
      unlink("../../".$imagePath);
    }
    echo 200;
  }else{
    echo 500;
  }
}

// delete members
if(isset($_POST['deleteMembersBtn'])){
  $id = $_POST['id'];
  $select = mysqli_query($con, "SELECT * FROM members WHERE id='$id'");
  $row = mysqli_fetch_array($select);
  $imagePath = $row['image'];
  $delete = mysqli_query($con,"DELETE FROM members WHERE id='$id'");
  if($delete){
    if($imagePath != NULL){
      unlink("../../".$imagePath);
    }
    echo 200;
  }else{
    echo 500;
  }
}

// delete projects
if(isset($_POST['deleteProjectBtn'])){
  $id = $_POST['id'];
  $select = mysqli_query($con, "SELECT * FROM projects WHERE id='$id'");
  $row = mysqli_fetch_array($select);
  $imagePath = $row['image'];
  $delete = mysqli_query($con,"DELETE FROM projects WHERE id='$id'");
  if($delete){
    $multipleSelect = mysqli_query($con,"SELECT * FROM multiple_project_image WHERE project_id='$id'");
    if(mysqli_num_rows($multipleSelect) > 0){
      while($res = mysqli_fetch_array($multipleSelect)){
        $multipleImagePath = $res['image'];
        $deleteMultiple = mysqli_query($con, "DELETE FROM multiple_project_image WHERE id='$id'");
        if($deleteMultiple){
          if($multipleImagePath != NULL){
            unlink("../../".$multipleImagePath);
          }
        }
      }
      
    }
    if($imagePath != NULL){
      unlink("../../".$imagePath);
    }
    echo 200;
  }else{
    echo 500;
  }
}

// delete project multiple image
if(isset($_POST['deleteMultipleImage'])){
  $id = $_POST['id'];
  $select = mysqli_query($con, "SELECT * FROM multiple_project_image WHERE id='$id'");
  $row = mysqli_fetch_array($select);
  $imagePath = $row['image'];
  $delete = mysqli_query($con,"DELETE FROM multiple_project_image WHERE id='$id'");
  if($delete){
    if($imagePath != NULL){
      unlink("../../".$imagePath);
    }
    echo 200;
  }else{
    echo 500;
  }
}
?>