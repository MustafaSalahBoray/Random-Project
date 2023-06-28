<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Managment</title>
	<style type="text/css">
		body{
			background-color: whitesmoke;
			font-family: 'Tajawal','sans-serif';
		}
		#mother{
			width: 100%;
			font-size: 20px;
		}
		main{
			float: right;
			border:1px solid black ;
			padding: 5px;
			margin-right: 100px;
		}
		input{
			padding: 4px;
			margin: 10px;
			border: 2px solid black;
			text-align: center;
			font-size: 17px;
		    font-family: 'Tajawal','sans-serif';
		}
		aside{
				text-align: center;
				width: 300px;
				float: right ;
				border: 1px solid black;
				padding: 10px;
				font-size: 20px;
				background-color: silver;
				color: white;

		}
		#tbl{
			width: 890px;
			font-size: 20px; 
		}
		#tbl th{
			background-color: silver;
			color: black;
			font-size: 20px;
			padding: 10px;
		}
		img{
			width: 250px;
			height: 100px;
		}
		aside button {
			width: 190px;
			padding: 8px;
			margin-top: 7px;
			font-size: 17px;
		}
		td{
			text-align: center;
			border: 0px solid black ;
		}
	</style>
</head>
<body>
   <div id="mother" <?php $_SERVER['PHP_SELF']?> >
   	<form method="POST">
   		<aside>
   			<div>
   				<img src="img/class.jpg" >
   				<h3>لوحة  مدير </h3>
   				<label  >رقم طالب:</label>
   				<input type="text" name="id"><br>
   					<label  >اسم طالب:</label>
   				<input type="text" name="Name"><br>
   					<label  >عنوان الطالب</label>
   				<input type="text" name="Addres"><br>
   				<button type="submit" name="submit">اضافة طالب</button>
   				<button type="submit" name="del"> حذف  طالب</button>
   			</div>
   		</aside>
   		<main>
   		<table id="tbl">
   			<tr>
   				<th>رقم التسلسلس</th>
   				<th>اسم طااب </th>
   				<th>عنوان طالب</th>
   				
   			</tr>
   			<tbody>
   				 <?php 
   				  require 'DB.php';
                         $select=$db->prepare("SELECT * FROM studmang");
                         $select->execute();
                         foreach ($select as $key ) {
                         	
                         					echo "<tr>
   				<td>".$key['id']."</td>
   				<td>".$key['Name']."</td>
   				<td>".$key['Address']."</td>
   				
   			</tr>";
                         	                         }
                      
                     
   				 ?>

   			</tbody>
   		</table>
   		</main>
   	</form>
   </div>
</body>
</html>
<?php
    require 'DB.php';
     if (isset($_POST['submit'])) {
     	
     
    $insert=$db->prepare("INSERT INTO studmangg(id,Name,Address) VALUES(:id,:Name,:Addres)");
    $insert->bindparam("id",$_POST['id']);
    $insert->bindparam("Name",$_POST['Name']);
    $insert->bindparam("Addres",$_POST['Addres']);
    if ( $insert->execute()) {
    	header("location:http://localhost/Random%20Project/studMang.php");
    }
     } 
     if (isset($_POST['del'])) {
     	 require 'DB.php';
     	$delete=$db->prepare("DELETE  FROM studmang WHERE Name =:Name");
     	$delete->bindparam("Name",$_POST['Name']);
     	if ($delete->execute()) {
     		header("location:http://localhost/Random%20Project/studMang.php");
     	}
     	     }

 

?>