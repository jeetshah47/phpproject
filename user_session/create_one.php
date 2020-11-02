<?php
    include '../base.php';
    if(isset($_POST['projectname']) &&  isset($_POST['short']) && isset($_POST['long']) && isset($_FILES['image'])) {
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      $file_directory = "";
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../uploads/".$file_name);
         $file_directory = "../uploads/".$file_name;
         
      }else{
        // print_r($errors);
      }
   
    $title = $_POST['projectname'];
    $short_description = $_POST['short'];
    $long_description = $_POST['long'];
    $stmt = $conn->prepare("INSERT INTO contentdata( content_img, content_desc1, content_desc2,content_title) VALUES (?,? ,? ,?)");
    $stmt->bind_param("ssss",$file_directory,$short_description,$long_description, $title);    
    $stmt->execute();
    echo "New records created successfully";
    $stmt->close();

    }
?>
<link rel="stylesheet" href="create_style.css">
<section>
    <div class="container">
      <form action = "" method="post" id="my-form" enctype="multipart/form-data">
        <div class="form-group">
          <label for="ProjectName"> Project Name</label>
          <input type="text" id="firstName" name="projectname">
        </div>
  
        <div class="form-group">
          <label for="Short">Short Description</label>
          <input type="text" id="lastName" name="short">
        </div>
  
        <div class="form-group">
          <label for="Long">Long Description</label>
          <textarea name="long" id="massage" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
          <label for="Long">Cover Image </label>
          <input type="file" name="image" id="photo">
      </div>
        <button type="submit">Submit</button>
      </form>
    </div>
    <div id="status"></div>
  </section>