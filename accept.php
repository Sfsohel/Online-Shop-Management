<?php
  include  'config.php';
 $id=$_GET['id']; 
 $q="UPDATE `product` SET `validity` = 'accepted' WHERE `product`.`id` = $id"; 
 mysqli_query($conn,$q);
 header('location:adminstrationlogindisplay.php');
?>