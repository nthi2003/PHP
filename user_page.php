<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;



};



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/user.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> 
</head>
<body>
    <div>
    <?php
  
  $select = mysqli_query($conn, "SELECT * FROM products");
  
  ?>
  <div class="product-display">
   
        
        <?php while($row = mysqli_fetch_assoc($select)){ ?>
        
          <div class="card-img"> 

            <img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt="">
             <div  class="icon-card">
                <p>Name:</pack>
             <?php echo $row['name']; ?>
             </div>


             <div class="icon-card">
                <p>Price:</pack>
            <?php echo $row['price']; ?>
             </div>
            

        </div>
           
    
     <?php } 
     ?>
     
   </div>
</div>
</body>
</html>