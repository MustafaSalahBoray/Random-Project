<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../Library/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../style.css"> -->
	<script type="text/javascript" src="../Library/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../Library/js/jquery-3.6.1.min.js"></script>
 
	
	<link rel="stylesheet" href="style.css">
	<title>Multiple Chat</title>
</head>
<body>
   <div id="container" >
   	<div id="chatbox">   	  <div id="chatdata">
   		<?php 
            require '../DB.php';
            $show=$db->prepare("SELECT * FROM chatmultplie");
            $show->execute();
            foreach ($show as $key) {
            	
            

   		  ?>
   	  	  <span style="color: burlywood; float: left;"><?php echo $key['Name']?></span>

   	  	   <span>::</span>
   	  	   <span style="color: yellow; margin: auto; "><?php echo $key['msg']?></span>
   	  	    <span style="color: tomato;  float:right;"><?php echo $key['date']?></span>
   	  	    <br>
   	  	<?php }?>
   	  </div>
   	  </div>
    <center>
   	   <form method="POST">
   	   	<input type="text" name="name" class="form-control " placeholder="Enter Your Name">
   	   	<textarea name="msg" class="form-control "  placeholder="Enter Your message">
   	   		
   	   		
   	   	</textarea>
   	   	<button type="submit" name="submit" class="btn btn-warning form-control">Submit</button>
   	   </form></center>
   </div>
</body>
</html>
<?php 
   if (isset($_POST['submit'])) {
   	$insert=$db->prepare("INSERT INTO  chatmultplie (Name,msg) VALUES (:Name,:msg)");
$insert->bindparam("Name",$_POST['name']);
$insert->bindparam("msg",$_POST['msg']);
 if ($insert->execute()) {
 	 header("location:http://localhost/Random%20Project/multichat/");
 }

   }


?>