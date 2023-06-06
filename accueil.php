<?php
include("connect.php");


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>accueil</title>
</head>
<body>
    <!-- section header -->
    <?php
    include 'header.php';

    ?>

    <!-- section main -->
    <!-- Afficher les produits -->
    <main>
        <div class = "container">
            <h3 class = "my-5">List the products</h3>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">id_produit</th>
                    <th scope="col">title</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    $sql = "Select * from `produit` order by id_produit  DESC limit 15";
                    $result = mysqli_query($connect, $sql);
                    if($result){
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id_produit'];
                            $title= $row['title'];
                            
                            echo '<tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.strtoupper($title).'</td>';


                        };

                    }



                    ?>
                    
                    

                </tbody>
        </table>
            


        
                


    </div>

        
    </main>
    
</body>
</html>