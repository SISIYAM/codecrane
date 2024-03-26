<?php
include 'dbcon.php';

if(isset($_POST['submitQuesBtn'])){
  $question = $_POST['question'];
  $answer = $_POST['answer'];

  $sql = "INSERT INTO questions (question,answer) VALUES ('$question','$answer')";
  $query = mysqli_query($con, $sql);

  if($query){
    echo 200;
  }else{
    echo 500;
  }
}

if(isset($_POST['questionSearch'])){
  $id = $_POST['question_id'];
  $output = "";
  $search = mysqli_query($con,"SELECT * FROM questions WHERE id ='$id'");
  if(mysqli_num_rows($search) > 0){
     $row = mysqli_fetch_array($search);
     $output = '<input type="hidden" id="edit_id" value="'.$id.'"><div class="form-group">
     <label for="ques" class="col-form-label">Question:</label>
     <input type="text" id="updateQuestion" class="form-control" value="'.$row['question'].'">
   </div>
   <div class="form-group">
     <label for="ans" class="col-form-label">Answer:</label>
     <input type="text" id="updateAnswer" class="form-control" value="'.$row['answer'].'">
   </div>';
     echo $output;
  }
  else{
     $output = '<div class="alert alert-danger">No data found.</div>';
     echo $output;
  }
}

// Update Frequently asked Question

if(isset($_POST['updateQuestionBtn'])){
  $id = $_POST['id'];
  $question = $_POST['question'];
  $answer = $_POST['answer'];

  $update = mysqli_query($con,"UPDATE questions SET question = '$question', answer = '$answer' WHERE id ='$id'");
  if($update){
    echo 200;
  }else{
    echo 500;
  }
}

// active and inactive service code
if(isset($_POST['serviceInactive'])){
  $id = $_POST['id'];
  $sql = mysqli_query($con, "UPDATE services SET status = 0 WHERE id='$id'");
  if($sql){
    echo 200;
  }else{
    echo 500;
  }
}

if(isset($_POST['serviceActive'])){
  $id = $_POST['id'];
  $sql = mysqli_query($con, "UPDATE services SET status = 1 WHERE id='$id'");
  if($sql){
    echo 200;
  }else{
    echo 500;
  }
}

// search multiple image for edit
if(isset($_POST['multipleImageSearchBtn'])){
  $id = $_POST['id'];
  $output = "";
  $search = mysqli_query($con, "SELECT * FROM multiple_project_image WHERE id='$id'");
  if(mysqli_num_rows($search)){
    $row = mysqli_fetch_array($search);
    $output = '<input type="hidden" id="edit_id" name="edit_id" value="'.$id.'">
    <a href="../'.$row['image'].'" target="_blank"><img src="../'.$row['image'].'" height="100" width="180"></a>
    <p></p>
    <input type="file" id="Image_Edit" name="image_data" class="form-control" value="">
  ';
  echo $output;
  }else{
    $output="No data Found!";
    echo $output;
  }
}

?>