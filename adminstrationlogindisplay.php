<?php
session_start();
$id=$_SESSION['adminsid'];

if(!isset($_SESSION['adminsid']) || empty($_SESSION['adminsid'])){
  header("location: index.php");
  exit;
}

  
?>
<html>
<head>
  <title>display</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-12" style="margin-left:1044px; margin-top:19px;" >
<button class="btn-info btn"><a href="admistrationlogout.php" class="text-white">Main Menu</a></button>
</div>
<br><br>
<div class="container">
<div class="col-lg-12">
<table class="table table-striped table-hover table-bordered">
  <tr class="bg-dark text-white">
  <th> Product Name</th>
  <th> Price information</th>
  <th> Services</th>
  <th> Delete</th>
  <th> Update</th>
  </tr>
  <?php
include  'config.php';

	 $q="select * from product where validity='quated'";
	 //echo $q;
	 $query=mysqli_query($conn,$q);	  
	 while($res=mysqli_fetch_array($query)){
		 
	 
?>

  <tr class="text-center">
      <td><?php echo $res['prodname']; ?></td>
	  <td><?php echo $res['priceinfo']; ?></td>
	  <td><?php echo $res['service']; ?></td>
	  <td><button class="btn-danger btn"><a href="
	  reject.php?id=<?php echo $res['id'];?>" class="
	  text-white">Reject</a></button></td>
	  <td><button class="btn-primary btn"><a href="
	  accept.php?id=<?php echo $res['id'];?>" class="
	  text-white">Accept</a></button></td>
  </tr>
	 <?php } ?>
</table>
</div>

</div>
</body>
</html>