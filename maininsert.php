<?php
session_start();
$id=$_SESSION['id'];

if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
  header("location: index.php");
  exit;
}

include  'config.php';
 if(isset($_POST['btn1'])){
	 $name=$_POST['name'];
	  $price = $_POST['price'];
	  $place = $_POST['selectplace'];
	  $service = $_POST['service'];
	  $sortdes = $_POST['sortdes'];
	  $longdes = $_POST['longdes'];
	  $fileName = addslashes(file_get_contents($_FILES['file']['tmp_name']));
       //echo $fileName;
      $q="INSERT INTO `product` (`prodname`,`priceinfo`, `service`, `photo`, `sortdes`, `description`, `adminid`,`place`,`validity`) VALUES ('$name', '$price', '$service', '$fileName' , '$sortdes', '$longdes', '$id','$place','quated')";	 
	   $query=mysqli_query($conn,$q);
	   echo "sucess";
 }
?>

<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}


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
	border:1px solid;
	margin-left:200px;
}
.rightinfo{
	float:right;
	width:300px;
	border:1px solid;
	margin-right:480px;
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
<table>
<form method="post" action="" onsubmit="return validation()" enctype="multipart/form-data">

   <tr>
       <td> Name: </td>
   </tr>
   <tr>
       <td><input type="text" name="name" value="" id="name"></td>
	   <td><span id="nameid" class="text-danger font-weight-bold"> </span></td>
   </tr>
   <tr>
       <td> price: </td>
   </tr>
   <tr>
       <td><input type="text" name="price" value="" id="price"></td>
	   <td><span id="priceid" class="text-danger font-weight-bold"> </span></td>
   </tr>
   <tr>
       <td> Place: </td>
   </tr>
   <tr>
       <td>
           <select id="place" name="selectplace">
               <option value="nikunja">Nikunjo</option>
               <option value="uttara">Uttora</option>
               <option value="bashundhara">Bashundhara</option>
               <option value="mirpur">Mirpur</option>
           </select>
       </td>
   </tr>
   <tr>
       <td>Service:</td>
   </tr>
   <tr>
       <td><input type="radio" name="service" value="TV">TV</td>
   </tr>
   <tr>
       <td><input type="radio" name="service" value="FRIDGE">FRIDGE</td>
   </tr>
   <tr>
       <td><input type="radio" name="service" value="MOBILE">MOBILE</td>
   </tr>
    <tr><td>short description</td></tr>
	<tr>
       <td><textarea name="sortdes" rows="5" cols="40" id="sortdes"></textarea></td>
	   <td><span id="sortdesid" class="text-danger font-weight-bold"> </span></td>
   </tr>
    <tr>
	    <td>Your description</td></tr>
		<tr>
       <td><textarea name="longdes" rows="5" cols="40" id="longdes"></textarea></td>
	   <td><span id="longdesid" class="text-danger font-weight-bold"> </span></td>
   </tr>
    <tr>
       <td> <input type="file" name="file"></td>
   </tr>
   <tr><td></td></tr>
   <tr>
       <td> <input type="submit" name="btn1" value="insert" ></td>
   </tr>
</form> 
</table>
</div>
</body>
</html>
<script type="text/javascript">
		

		function validation(){

			var name = document.getElementById('name').value;
			var price = document.getElementById('price').value;
			var sortdes = document.getElementById('sortdes').value;
			var longdes = document.getElementById('longdes').value;
            

            


			if(name == ""){
				document.getElementById('nameid').innerHTML =" ** Please fill the Name field";
				return false;
			}
			if((name.length <= 2) || (name.length > 20)) {
				document.getElementById('nameid').innerHTML =" ** Name lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(name)){
				document.getElementById('nameid').innerHTML =" ** only integers are allowed";
				return false;
			}


            if(price == ""){
				document.getElementById('priceid').innerHTML =" ** Please fill the price field";
				return false;
			}
			if((price.length <= 1) || (price.length > 200)) {
				document.getElementById('priceid').innerHTML =" ** price lenght must be between 2 and 20";
				return false;	
			}
			if(isNaN(price)){
				document.getElementById('priceid').innerHTML =" ** only characters are allowed";
				return false;
			}





			if(sortdes == ""){
				document.getElementById('sortdesid').innerHTML =" ** Please fill the shortdescription field";
				return false;
			}
			if((sortdes.length <= 5) || (sortdes.length > 200)) {
				document.getElementById('sortdesid').innerHTML =" ** shortdescription lenght must be between  5 and 20";
				return false;	
			}


			if(longdes == ""){
				document.getElementById('longdesid').innerHTML =" ** Please fill the  Brief description field";
				return false;
			}
			if(!isNaN(longdes)){
				document.getElementById('longdesid').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			



			
		}

	</script>
