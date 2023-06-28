<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../Library/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../Library/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../Library/js/jquery-3.6.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<title>تاكيد شراء </title>
	<style>
		input{
			display: none;
		}
		.main{

			width: 30%;
			padding: 20px;
			box-shadow: 1px 1px 10px silver;
			margin: auto;
			margin-top: 50px;
		}
	</style>
</head>
<body> 
	<div class="main"> 
		<?php  
		 require'../DB.php';
		 if (isset($_GET['BookNow'])) {
		 
          $select=$db->prepare("SELECT * FROM shopingdevicee WHERE id =:id");
          $select->bindparam("id",$_GET['BookNow']);
          $select->execute();
          foreach ($select as $key) {
		?>
        <center>
		<h2>هل تريد شراء المنتج </h2>
		<form method="POST" class="mt-4" action="" > 
		<input type="text" name="id" value="<?php echo $key['id'];?>"> 
		<input type="text" name="Name" value="<?php echo $key['Name'];?>"> 
		<input type="text" name="price"value="<?php echo $key['price'];?>">
		<button type="submit" class="btn btn-warning" name="submit">تاكيد اضافة منتج</button><?php }}?>
		</form>
		<a href="http://localhost/Random%20Project/DEVICESS/shopingLabtopShowProduct.php" class="text-danger">رجوع الي صفحة السابقه</a>
		</center>
	</div>

</body>
</html>
<?php 
  if (isset($_POST['submit'])) {
  	$insert=$db->prepare("INSERT INTO addcaddevice (id,Name,price) VALUES(:id,:name,:price)");
  	$insert->bindparam("id",$_POST['id']);
  	 $insert->bindparam("name",$_POST['Name']);
    $insert->bindparam("price",$_POST['price']);
    if ($insert->execute()) {
      header("location:http://localhost/Random%20Project/DEVICESS/card.php");
    }
  }




?>