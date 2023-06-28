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

<?php 
      require'../DB.php';
     if ($_GET['Edite']) {
      $GETDATA=$db->prepare("SELECT * FROM shopingdevicee ");
      $GETDATA->execute();
      foreach ($GETDATA as $key) {
         echo '   <center>
      <div class="main">
         <form method="POST" enctype="multipart/form-data">
            <h2>موقع تسويقي أونلاين</h2>
            <img src="../img/work2.webp" width="300px">
            <input type="text" name="name"value="'.$key['Name'].'">
            <br>
            <input type="text" name="Price"value="'.$key['price'].'">
            <br>
            <input type="file" name="image" style="display: block;"value="'.$key['Image'].'">
            <label>أختيلر صورره للمنتج</label>
            <button type="submit" name="update" value="'.$key['id'].'">رفع منتج✅</button>
            <a href="http://localhost/Random%20Project/DEVICESS/shopingLabtopShowProduct.php">عرض منتجات</a>
         </form>
      </div>';
      }
     }
     if(isset($_POST['update'])){
          $img=$_FILES['image']['name'];
      $img_tmp=$_FILES['image']['tmp_name'];
      move_uploaded_file($img_tmp, "../img/$img");
      $update=$db->prepare("UPDATE shopingdevicee SET Name=:Name , price=:price , Image=:img WHERE id=:id");
      $update->bindparam("Name",$_POST['name']);
        $update->bindparam("price",$_POST['Price']);
        $update->bindparam("img",$img);
        $update->bindparam("id",$_POST['update']);
        $update->execute();


     }




?>