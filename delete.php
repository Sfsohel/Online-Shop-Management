<?php
  include  'config.php';
 $id=$_GET['id']; 
 $q="DELETE FROM `product` WHERE id=$id"; 
 mysqli_query($conn,$q);
 header('location:display.php');
?>