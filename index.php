<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Webslesson Tutorial</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
body {
    font-family: "Lato", sans-serif;
}
.h2collor{
 color: white;
 font-size: 16px;
 text-align: center;
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
.search{
	
    position: absolute;
   margin-left:850px;
   margin-top:12px;
   padding-left:200px;
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
  <div class="search">
   Search <input type="text" name="search_data" id="search_data">
  </div> 
</div>
<div class="sidenav">
   <h2 class="h2collor">Choose a location</h2>
  <a href="nikunja.php">Nikunja</a>
  <a href="uttara.php">Uttara</a>
  <a href="dhanmondi.php">Dhanmondi</a>
  <a href="motijhil.php">Motijhil</a>
</div>

<div class="main">

 <br>
</div>
    
 
  <div class="container">
   <br />
   <div class="form-group">
    <div class="input-group">
    </div>
   </div>
   <br/>
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_data').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>