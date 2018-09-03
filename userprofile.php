<?php
include("config.php");
session_start();
   if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
  header("location: index.php");
  exit;
}
   
  $id=$username=$address=$password=$phoneno=$email=$image="";
  $uid=$_SESSION['id'];
$sql = "SELECT  *  FROM admin where id='$uid'";
         $result = mysqli_query($conn, $sql);
		 if (mysqli_num_rows($result) > 0) {
		 while($row = mysqli_fetch_assoc($result)) {
			 $id=$row['id'];
             $username=$row['username'];
             $address=$row['address'];
             $password=$row['password'];
             $phoneno=$row['phoneno'];
             $email=$row['email'];
             $image=$row['image'];		 
		 }
		 
		 }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
.leftinfo{
	float:left;
	width:200px;
	margin-left:0px;
}
.rightinfo{
	float:right;
	width:300px;
	margin-right:700px;
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
  <h2>Your Profile</h2>
  <div class="image"> 
     <?php
	   echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'"height="198" width="200"/>';
	 ?>
  </div>
  <br><br><br>
  <div class="information"><?php
        echo "<div class='leftinfo'>";
        echo "<div class='userid'><h3>Your id:</h3>".$id."</div><br>";
		echo "<div class='username'><h3>your username:</h3>".$username."</div><br>";
		echo "<div class='address'><h3>Your address:</h3>".$address."</div><br>";
		echo "</div>";
		echo "<div class='rightinfo'>";
		echo "<div class='password'><h3>Your password</h3>".$password."</div><br>";
		echo "<div class='phoneno'><h3>your phone No</h3>".$phoneno."</div><br>";
		echo "<div class='email'><h3>Your email</h3>".$email."</div><br>";
		echo "</div>";
  ?></div>
</div>
     
</body>.
</html> 
