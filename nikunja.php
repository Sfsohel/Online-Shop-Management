<?php
 //echo "config";
 include("config.php");
 //echo "success";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.btn{
	
	background-color: #4CAF50;
    border: none;
    color: white;
    padding: 14px 122px;
    text-decoration: none;
    margin: 16px 2px;
    cursor: pointer;
	
}
 #description-button{
	 
	 margin-left: 55px;
	 
 }
table {
    border-collapse: collapse;
    width:97%;
	margin:2px;
	margin-left:6px;
}

th, td {
    text-align: left;
    padding:15.5px;
	
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

#main { 
    width: 498px ;
	height:auto;
    margin: 0 auto;
	margin-top:20px;
	border-style:solid;
	border-color:green;
}
#sidebar    {
    width: 200px;
    height: auto;
	border-right-style:solid;
	border-bottom-style:solid;
	border-color:green;
    float: left;
	
	
}

#page-wrap  {
    width: 300px;
    height: 200px;
    margin-left: 200px;
	border-bottom-style:solid;
	border-color:green;
	
}

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

.all{
	width:70%;
	margin:0 auto;
	margin-top:55px;
	
}
.pagination a{
	color:black;
	float:left;
	padding:8px 16px;
	text-decoration:none;
	transition:background-color .3s;
}
.pagination a.active{
	background-color:#4CAF50;
	color:#fff;
}
.pagination{
	margin-top:30px;
	margin-left:150px;
}
.pagination a:hover:not(.active){
	background-color:#ddd;
}
.h2collor{
 color: white;
 font-size: 16px;
 text-align: center;
}
.sidenav {
    height: 100%;
    width: 160px;
    position: absolute;
    z-index: 1;
    top: 60;
    left: 10;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
	margin-top:5px;
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>
</head>
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
  <a href="adminstrationlogin.php">Adminstration</a>
</div>
     <div class="sidenav">
   <h2 class="h2collor">Choose a location</h2>
  <a href="nikunja.php">Nikunja</a>
  <a href="uttara.php">Uttara</a>
  <a href="dhanmondi.php">Dhanmondi</a>
  <a href="motijhil.php">Motijhil</a>
</div>
<div class="all">
<?php

   $total="select * from product where place='nikunja'";

    $count=$conn->query($total);
   $nr=$count->num_rows;
   
   $page=1; 
   $item_per_page=2;
   $totalpages=ceil($nr/$item_per_page);
   if(isset($_GET['page'])&& !empty($_GET['page']))
   {
	   $page=$_GET['page'];
	   
   }
    
	$offset=($page-1)*$item_per_page;
	$sql = "select * from product where place='nikunja' limit $item_per_page offset $offset";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
   
		while($row = $result->fetch_assoc()) {
			
         echo "<div id='main'>";
                echo "<div id='sidebar'>";
			echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'"height="198" width="200"/>';
			    echo "</div>";
			
                    echo "<div id='page-wrap'>";
			 echo "<table border='1'>";
			 echo "<tr><th>Name:</th><td>" . $row["prodname"]."</td></tr>";
			 echo "<tr><th>category:</th><td>".$row["service"]."</td></tr>";
			 echo "<tr><th>price:</th><td>".$row["priceinfo"]."</td></tr>";
			 echo "<tr><th>Place:</th><td>".$row["place"]."</td></tr>";
		  echo "</table>";
		        	 echo "</div>";
			  echo "</br>";
			    echo "<div id='description-button'>";
			    echo "<a class='btn' href='show.php?id=".$row["id"]."'>View Full Description</a>";
			    echo "</div>";
			   echo "</br>";
              echo "</div>";
			   echo "</br>";
		}
		 echo"<div class='pagination'>";
		 for($i=1;$i<=$totalpages;$i++){
			 if($i==$page){
			 echo '<a class="active">'.$i.'</a>';
			 }
				 else{
					 echo '<a href="nikunja.php?page='.$i.'">'.$i.'</a>';
					 
				 }
			 }
			 echo "</div>";
		 
		 }
	  
   ?>

</body>
</html>
