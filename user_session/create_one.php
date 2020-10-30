<?php
    include '../base.php';
    if(isset($_POST['projectname']) &&  isset($_POST['short']) && isset($_POST['long'])) {
    $title = $_POST['projectname'];
    $short_description = $_POST['short'];
    $long_description = $_POST['long'];
    $stmt = $conn->prepare("INSERT INTO contentdata( content_img, content_desc1, content_desc2,content_title) VALUES ('../uploads/map.jpg',? ,? ,?)");
    $stmt->bind_param("sss",$short_description,$long_description, $title);    
    $stmt->execute();
    echo "New records created successfully";
    $stmt->close();
    }
?>
<link rel="stylesheet" href="create_style.css">
<section>
    <div class="container">
      <form action = "" method="post" id="my-form">
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
  
        <button type="submit">Submit</button>
      </form>
    </div>
    <div id="status"></div>
  </section>