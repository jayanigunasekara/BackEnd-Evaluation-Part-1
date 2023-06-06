<?php
include 'connect.php';
if(isset($_GET['productId'])){
    $id = $_GET['productId'];

    $sql = "Select * from `produit` where id_produit = $id";
   

    $result = mysqli_query($connect, $sql);


    if($result){
        $row = mysqli_fetch_assoc($result);
        
        $title = $row['title'];
        $description = $row['description'];
        $price = $row['price'];
        $city = $row['city'];
        $postal_code = $row['postal_code'];
        $reservation_text = $row['reservation_text'];

        ?>
        <h2><?= $title ?></h2>
        <h4><?= $price ?></h4>
        <p><?=  $description ?></p>

        <?php
        // header('location:display.php');

    }else{
        die(mysqli_error($connect));
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
</head>
<body>
    <h3></h3>
    
</body>
</html>