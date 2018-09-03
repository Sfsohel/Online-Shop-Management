

<?php
include  'config.php';
 if(isset($_POST['submit'])){
	 $error="";
	 $username=$_POST['user'];
	 $address=$_POST['address'];
	 $password=$_POST['pass'];
	 $phoneno=$_POST['mobile'];
	 $email=$_POST['email'];
	 $fileName = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	 if($username&&$address&&$password&&$phoneno&&$email!=""){
	 $q="INSERT INTO `admin`(`username`, `address`, `password`, `phoneno`, `email`,`image`) VALUES ('$username','$address','$password','$phoneno','$email','$fileName')";
	// echo $q;
	 $query=mysqli_query($conn,$q);
	 echo "success";
	 }
	 else{
		$error= "fill all the field";
		echo $error;
	 }
 }
 
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
 <style>
       .navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}

* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 60%;
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
    margin-left:302px;
}

input[type=submit]:hover {
    background-color: #45a049;
	
}

.container{
	margin-left:100px;
}
span{
	color:red;
}
 </style>
<body>
     
	 <div class="navbar">
  <a href="index.php">Home</a>
  <a href="service-login.php">Login As Servicer</a>
  <div class="dropdown">
    <button class="dropbtn">Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="mobille.php">Mobile</a>
      <a href="tv.php">Tv</a>
      <a href="fridge.php">Fridge</a>
    </div>
  </div> 
  <a href="blog.php">Blog</a>
  <a href="contractform.php">Contract with us</a>
   </div>

	<div class="container"><br>
		
		<div class="col-lg-6 m-auto d-block">
			
			<form action="" method="post" onsubmit="return validation()" class="bg-light" enctype="multipart/form-data">
				
				<div class="form-group">
					<h4>Username</h4>
					<input type="text" name="user" class="form-control" id="user" autocomplete="off">
					<span id="username" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<h4> Password: </h4>
					<input type="text" name="pass" class="form-control" id="pass" autocomplete="off">
					<span id="passwords" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<h4> Confirm Password: </h4>
					<input type="text" name="conpass" class="form-control" id="conpass" autocomplete="off">
					<span id="confrmpass" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<h4> Mobile Number: </h4>
					<input type="text" name="mobile" class="form-control" id="mobileNumber" autocomplete="off">
					<span id="mobileno" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<h4> Email: </h4>
					<input type="text" name="email" class="form-control" id="emails" autocomplete="off">
					<span id="emailids" class="text-danger font-weight-bold"> </span>
				</div>
                
                <div class="form-group">
					<h4> Address: </h4>
					<input type="text" name="address" class="form-control" id="addresss" autocomplete="off">
					<span id="addressidss" class="text-danger font-weight-bold"> </span>
				</div>				
				
				<div class="form-group">
					<h4> INSERT Picture: </h4>
					<input type="file" name="file">
					<span id="pictures" class="text-danger font-weight-bold"> </span>
				</div>
				<br><br>
				<input type="submit" name="submit" value="submit" class="btn btn-success" 	autocomplete="off">


			</form><br><br>


		</div>
	</div>



	<script type="text/javascript">
		

		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;
            var address=document.getElementById('addresss').value;




			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}


            if(address == ""){
				document.getElementById('addressidss').innerHTML =" ** Please fill the address field";
				return false;
			}
			if((address.length <= 2) || (user.length > 20)) {
				document.getElementById('addressidss').innerHTML =" ** address lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(address)){
				document.getElementById('addressidss').innerHTML =" ** only characters are allowed";
				return false;
			}





			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;	
			}


			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
				return false;
			}



			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
				return false;
			}




			if(mobileNumber == ""){
				document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=11){
				document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
				return false;
			}



			if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" ** . Invalid Position";
				return false;
			}
		}

	</script>

</body>
</html>