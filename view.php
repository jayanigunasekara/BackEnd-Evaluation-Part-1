<?php
include 'connect.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link
		rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Consulter tous les produits</title>
</head>
<body>
    <h2>View the products</h2>

    <div class = "container">
        <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id_produit</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">city</th>
                    <th scope="col">postal_code</th>
                    <th scope="col">Reserved</th>
                    <th scope="col">View the Product</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "Select * from `produit`";
                    $result = mysqli_query($connect, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id_produit'];
                            $title = $row['title'];
                            $description = $row['description'];
                            $price = $row['price'];
                            $city = $row['city'];
                            $postal_code = $row['postal_code'];
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$title.'</td>
                            <td>'.$description.'</td>
                            <td>'.$price.'</td>
                            <td>'.$city.'</td>
                            <td>'.$postal_code.'</td>
                            <td><button class="btn btn-primary"><a class = "text-white" href = "product.php ?productId='.$id.'"><i class="fas fa-eye-slash"></i></a></button></td>
                            <td><button class="btn btn-primary"><a class = "text-white" href = "product.php ?productId='.$id.'"><i class="fa-solid fa-eye"></i></a></button></td>
                           
                            </tr>';

                            
                        };
                    
                    }



                ?>
                    

                </tbody>
        </table>

</div>



    
</body>
</html>