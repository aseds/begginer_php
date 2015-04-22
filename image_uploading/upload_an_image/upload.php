<?php
  // this code takes the uploaded file from it's temporary place and moves it to the desired directory(/uploads)

  $uploads_dir = "../uploads/";
  $tmp_name = $_FILES['photo']['tmp_name'];
  $name = $_FILES['photo']['name'];

  move_uploaded_file($tmp_name, "$uploads_dir/$name");
?>
