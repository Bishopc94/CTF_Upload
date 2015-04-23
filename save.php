<?php
  include 'nav.php';
  $uploaddir = './uploads/';
  $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    include 'success.php';
  } else {
    include 'error.php';
  }
  include 'foot.php'; 
?>