<?php
session_start();

if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
  header("location: index.php");
  exit;
}

$id=$_SESSION['id'];
?>
<html>
<head>
  <title>display</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
    #maincontainer{
	margin-left:100px;
	margin-top:50px;
}
#image{
	 float: left;
}
#information{
	 float: right;
}
#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
    left: 0;
}

#about {
    top: 80px;
    background-color: #4CAF50;
}

#blog {
    top: 160px;
    background-color: #2196F3;
}

#projects {
    top: 240px;
    background-color: #f44336;
}

#contact {
    top: 320px;
    background-color: #555
}
  </style>
</head>

<body>
  
  <div id="mySidenav" class="sidenav">
  <a href="userprofile.php" id="about">Profile</a>
  <a href="maininsert.php" id="blog">Upload</a>
  <a href="display.php" id="projects">Action</a>
  <a href="logout.php" id="contact">Home</a>
</div>
  
 <div id="maincontainer">
<div class="container">
<div class="col-lg-12">
<table class="table table-striped table-hover table-bordered">
  <tr class="bg-dark text-white">
  <th> Product Name</th>
  <th> Product State</th>
  <th> Services</th>
  <th> Delete</th>
  <th> Update</th>
  </tr>
  <?php
include  'config.php';

	 $q="select * from product where adminid='$id'";
	 //echo $q;
	 $query=mysqli_query($conn,$q);	  
	 while($res=mysqli_fetch_array($query)){
		 
	 
?>

  <tr class="text-center">
      <td><?php echo $res['prodname']; ?></td>
	  <td><?php echo $res['validity']; ?></td>
	  <td><?php echo $res['service']; ?></td>
	  <td><button class="btn-danger btn"><a href="
	  delete.php?id=<?php echo $res['id'];?>" class="
	  text-white">Delete</a></button></td>
	  <td><button class="btn-primary btn"><a href="
	  update.php?id=<?php echo $res['id'];?>" class="
	  text-white">Update</a></button></td>
  </tr>
	 <?php } ?>
</table>
</div>

</div>
</div>
</body>
</html>