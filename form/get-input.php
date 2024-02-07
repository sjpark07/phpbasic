<h1>get input</h1>
<?php
    $category = $_GET['category'];
    $product_id = $_GET['product_id'];
    $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);
    if($limit == false){
       $limit = 10; 
    }
    $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
    if($email == false){
       die();
    }
    ?>
    <p>Email : <?= $email;?></p>
    <p>category : <?= $category;?></p>
    <p>product id : <?= $product_id;?></p>
    <p>limit : <?= $limit;?></p>
