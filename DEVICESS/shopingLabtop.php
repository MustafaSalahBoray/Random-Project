<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="ar">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>موقع تسويقي</title> 
	<style>
		 .main{
		 	width: 40%;
		 	box-shadow:  1px 1px 10px silver;
		 	margin-top: 45px;
		 	padding: 10px;
		 }
		 input{
		 	margin-bottom: 10px;
		 	width: 60%;
		 	padding: 5px;

		 }
		 button{
		 	border: none;
		 	padding: 10px;
		 	width: 40%;
		 	font-weight: bold;
		 	font-size: 15px;
		 	background-color: #1AC15c;
		 }
		 label{
		 	background-color: aqua;
		 	padding: 10px;
		    cursor: pointer;
		 	font-weight: bold;
		 	font-size: 15px;
		 	color: black;
		 }
		 a{
		 	text-decoration: none;
		 	font-size: 20px;
		 	color: tomato;
		 	display: block;

		 }

	</style>
</head>
<body>
     <center>
     	<div class="main">
     		<form method="POST" enctype="multipart/form-data">
     			<h2>موقع تسويقي أونلاين</h2>
     			<img src="../img/work2.webp" width="300px">
     			<input type="text" name="name">
     			<br>
     			<input type="text" name="Price">
     			<br>
     			<input type="file" name="image" style="display: block;">
     			<label>أختيلر صورره للمنتج</label>
     		 	<button type="submit" name="submit">رفع منتج✅</button>
     			<a href="http://localhost/Random%20Project/DEVICESS/shopingLabtopShowProduct.php">عرض منتجات</a>
     		</form>
     	</div>
     	<p>DEVELOPER BY MOSTAFA SALAH❤</p>
     </center>
</body>
</html>
<?php  
require '../DB.php';   
//require 'shopingLabtopShowProduct.php';
   if (isset($_POST['submit'])) {
 
   
      $img=$_FILES['image']['name'];
      $img_tmp=$_FILES['image']['tmp_name'];
      move_uploaded_file($img_tmp, "../img/$img");
     $insertDev=$db->prepare("INSERT INTO shopingdevicee (Name,price,Image) VALUES(:name,:price,:img) ");
     $insertDev->bindparam("name",$_POST['name']);
     $insertDev->bindparam("price",$_POST['Price']);
     $insertDev->bindparam("img",$img);
     if ($insertDev->execute()) {
     	echo "<script> alert('نم رفع  منتج بنجاح')</script>"; 

     	     }
     	     else{
                 echo "<script> alert('حدث مشكلة اثناء رفع')</script>";
     	     }  
  	  

     }  
     // editeeeee
     
?>