<?php
include 'connect.php';
if(isset($_POST["submit"])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $city = $_POST['city'];
    $postalCode= $_POST['postalCode'];
    $reservationText = $_POST['reservation_text'];
    $image = $_POST['image'];

    

    $sql = "insert into `produit` (title, description, price, city, postal_code, reservation_text, image) values('$title','$description', '$price', '$city','$postalCode', '$reservationText','$image')";
    $result = mysqli_query($connect, $sql);
    if($result){
        header('location:accueil.php');
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
    <title>Ajouter un produit</title>
</head>
<body>
    <div class = "container my-5">
        <h1>Produits</h1>
        <form method = "POST">
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title"  placeholder="Enter Title" name = "title">  
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Description" name = "description">
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number"  min="1" step="any" class="form-control" id="price"  placeholder="Price" name = "price">
            </div>
            <div class="form-group">
                <label for="city">Ville</label>
                <input type="city" class="form-control" id="city" placeholder="city" name = "city">
            </div>
            <div class="form-group">
                <label for="postalCode">Code Postal</label>
                <input type="zip" class="form-control" id="postalCode" placeholder="postal Code" name = "postalCode">
            </div>
            <div class="form-group">
                <label for="reservation_text">Reservation Text</label>
                <input type="text" class="form-control" id="reservation_text" placeholder="reservation text" name = "reservation_text">
            </div>
            <div class="form-group">
                <label for="image">Select Image</label>
                <input type="file" class="form-control" id="image" placeholder="Select Image" name = "image">
            </div>
                        
            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>        

    </div>

    
</body>
</html>