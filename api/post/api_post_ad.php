<?php

   

    include_once '../../config/Database.php';
    include_once '../../model/model_post_ad.php';

    // Instantiate DB & connect
    $database = new Database();
    $db = $database->connect();

    // Instantiate blog post object
    $post = new model_post_ad($db);

    // Get raw posted data
    $data = json_decode(file_get_contents("php://input"));

    if (isset($_POST["email"], $_POST['product_name'], $_POST['category'], $_POST['city'], $_POST['local_area'],  $_POST['description'],  $_POST['price'],  $_POST['phone_no'],  $_POST['image_path'] )){
        $owner_email = $_POST["email"];
        $product_name = $_POST['product_name'];
        $category = $_POST['category'];
        $city = $_POST['city'];
        $local_area = $_POST['local_area'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $phone_no = $_POST['phone_no'];
        $image_path = $_POST['image_path'];

        if ($post->post($owner_email, $product_name, $category, $city, $local_area, $description, $price, $phone_no, $image_path)){
            echo  "success";
        } else {
            echo  "failes";

        }
    }else{
        

        echo "\$_post failed";
    }
