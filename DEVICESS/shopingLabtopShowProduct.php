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
	<title>وقع تسويقي</title>
	<style type="text/css">
		.card{float: right;
			margin-top: 20px;
		    margin-left: 10px; 
		    margin-right: 10px;}
		    .card-img-top{
		    	width: 100%;
		    	height: 200px;
		    }
		    main{
		    	width: 60%;
		    }
	</style> 

</head>
<body>
      <center>
      	<h3 >جميع المنتجات متوفره</h3>
        <a href="http://localhost/Random%20Project/DEVICESS/MYCARDS.php" class="btn btn-danger ">MY-CARDS</a>
      </center> 
      <?php
          require'../DB.php';
          $select=$db->prepare("SELECT * FROM shopingdevicee");
          $select->execute();
          foreach ($select as $key) {
          	 echo '<center><main>
          	 <div class="card" style="width: 18rem;margin-bottom: 100px;">
            <img src="../img/'.$key['Image'].'" class="card-img-top" alt=""  />
            <div class="card-body">
              <h5 class="card-title">'.$key['Name'].'</h5>
              <p class="card-text">
                 '.$key['price'].'
              </p>
              <form method="POST">    <button value="'.$key['id'].'" name="remove" class="btn btn-danger">
                 حذف منتج               </button>
                    <a href="http://localhost/Random%20Project/DEVICESS/EDITE.php?Edite='.$key['id'].'" class="btn btn-primary">
                تعديل منتج             </a><hr>
                 <a href="http://localhost/Random%20Project/DEVICESS/valid.php?BookNow='.$key['id'].'" class="btn btn-success mt-5">
                    اضافة منتج  </a>
                </form>

            </div> 
        </div></main></center>';
          }
          // ***********
       
          if (isset($_POST['remove'])) {
              $del=$db->prepare("DELETE FROM shopingdevicee WHERE id=:id");
              $del->bindparam("id",$_POST['remove']);
              if ($del->execute()) {
                  header("location:http://localhost/Random%20Project/shopingLabtopShowProduct.php");
              }
              else{
                echo"SELECT";
              }
          }
 
         ?>
</body>
</html>
 