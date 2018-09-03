<!DOCTYPE html>
<html>
<head>
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
</style>
</head>
<body>
  <div class="navbar">
  <a href="index.php">Home</a>
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
  <a href="service-login.php">Login As Servicer</a>
  <a href="blog.php">Blog</a>
  <a href="contractform.php">Contract with us</a>
  <a href="adminstrationlogin.php">Adminstration</a>
</div>

<br><br>
<h2>Contract With us</h2>
<br><br>

<form method="post" action="">
<table>
<tr>
<td>Name</td>
<td><input type="text" name="name" /></td>
</tr>

<tr>
<td>E-Mail</td>
<td><input type="text" name="email"/></td>
</tr>

<tr>
<td>Website</td>
<td><input type="text" name="website"/></td>
</tr>

<tr>
<td>Comment</td>
<td><textarea name="comment" rows="5" cols="40"></textarea></td>
</tr>

<tr>
<td>Gender</td>
<td>
<input type="radio" name="radio1" value="Male"/> Male
<input type="radio" name="radio1" value="Female"/> Female
<input type="radio" name="radio1" value="Other"/> Other
</td> 
</tr>

<tr>
<td></td>
<td><input type="submit" name="button" value="Submit"/></td>
</tr>

</table>
</form>
</body>
</html>
<br><br><br>

</html>