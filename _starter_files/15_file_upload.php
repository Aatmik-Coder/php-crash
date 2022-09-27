<?php
  /* ----------- File upload ---------- */
  if(isset($_POST['submit'])) {
    $allowed_ext = array('png', 'jpg', 'jpeg');
    
    if(!empty($_FILES['upload']['name'])) { 
      $file_name = $_FILES['upload']['name'];
      $type = $_FILES['upload']['type'];
      $tmp_name = $_FILES['upload']['tmp_name'];
      $size = $_FILES['upload']['size'];
      $target_dir = "uploads/${file_name}";
      
      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));
      
      if(in_array($file_ext, $allowed_ext)) {
        if($size <= 1000000) {
          move_uploaded_file($tmp_name, $target_dir);
          $message = '<p style="color:green;">file uploaded</p>';
        } else {
          $message = '<p style="color:red;">file is too large</p>';
        }
      } else {
        $message = '<p style="color:red;">Invalid file type</p>';
      }
      
      
      
      // print_r($file_name);
      // print_r($type);
      // print_r($tmp_name);
      // print_r($size);
    } else {
      $message = '<p style="color:red;">Please choose file</p>';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php echo $message ?? null;?>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
  Select image to upload
  <input type="file" name="upload">
  <input type="submit" value="submit" name="submit">
</form>
</body>
</html>