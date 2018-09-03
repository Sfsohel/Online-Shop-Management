<?php
session_start();
$aid=$_SESSION['id'];
$id=$_GET['id'];
include  'config.php';
   $uname="";
   $uprice="";
   $ushortdes="";
   $ulongdes="";
   $sql = "SELECT * FROM `product` WHERE `id`='$id'";   
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		   $uname=$row["prodname"];
           $uprice=$row["priceinfo"];
           $ushortdes=$row["sortdes"];
           $ulongdes=$row["description"];
        }

}
   
 if(isset($_POST['btn1'])){
	
	 $name=$_POST['name'];
	  $price = $_POST['price'];
	  $place = $_POST['selectplace'];
	  $service = $_POST['service'];
	  $sortdes = $_POST['sortdes'];
	  $longdes = $_POST['longdes'];
	  $fileName = addslashes(file_get_contents($_FILES['file']['tmp_name']));
	 $q="UPDATE `product` SET `prodname`='$name',`priceinfo`='$price',`service`='$service',`photo`='$fileName',`sortdes`='$sortdes',`description`='$longdes',`place`='$place' WHERE `id`='$id'";
	 $query=mysqli_query($conn,$q);
	 //echo "sucess";
	header('location:display.php');
 }
?>
<!DOCTYPE html>
<html>
<body>

<h2>Dashboard</h2>
<table>
<form method="post" action="" enctype="multipart/form-data">

   <tr>
       <td> Name: </td>
   </tr>
   <tr>
       <td><input type="text" name="name" value="<?php echo $uname;  ?>"></td>
   </tr>
   <tr>
       <td> price: </td>
   </tr>
   <tr>
       <td><input type="text" name="price" value="<?php echo $uprice;  ?>"></td>
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
       <td><textarea name="sortdes" rows="5" cols="40" value=""><?php echo $ushortdes;  ?></textarea></td>
   </tr>
    <tr>
	    <td>Your description</td></tr>
		<tr>
       <td><textarea name="longdes" rows="5" cols="40" value=""><?php echo $ulongdes;  ?></textarea></td>
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

</body>
</html>