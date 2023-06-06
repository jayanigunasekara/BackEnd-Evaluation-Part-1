<?php
include 'connect.php';
if(isset($_GET['productId'])){
    $id = $_GET['productId'];
    //select only the data relavant to the product ID from the db
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
        $image = $row['image'];
        

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Product Details</title>
</head>
<body >
    <div class = "d-flex justify-content-center mt-5">

        <div class="card" style="width: 18rem;">
            <img class="card-img-top w-full" src="macarons.jpg" alt="Card image cap" style = "height:200px;">
            <div class="card-body">
                <h5 class="card-title"><?=$title?></h5>
                <p class="card-text"><?=$description ?></p>
                <p class="card-text"><?=$reservation_text ?></p>
            
            </div>
        </div>
    </div>
    
</body>
</html>