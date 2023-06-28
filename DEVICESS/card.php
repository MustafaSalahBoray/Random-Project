<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Library/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../Library/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../Library/js/jquery-3.6.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>منتجات</title>
</head>
<body>

	  <div class="container">
      <h2>عرض منتجات</h2>
<table class="table table-dark ">
		<?php 
         require '../DB.php';
          $show=$db->prepare("SELECT * FROM addcaddevice");
          $show->execute();
          foreach ($show as $key) {

    	?>
  <thead style="text-align:center;">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">price</th>
      
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody style="text-align: center;background-color: white;color: black;">
    <tr>
    
      <th ><?php echo $key['Name'];?></th>
      <td><?php echo $key['price'];?></td>
     
      <td><form method="POST"><button value="<?php echo $key['id'];?>" class="btn btn-danger">ازاله</button></form></td>
    </tr>
  <?php }?>
  </tbody>
</table></div>


</body>
</html>