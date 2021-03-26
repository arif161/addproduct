<?php

// $owner_email = $_POST[''];
// $product_name = $_POST[''];
// $category = $_POST[''];
// $city = $_POST[''];
// $local_area = $_POST[''];
// $description = $_POST[''];
// $price = $_POST[''];
// $phone_no = $_POST[''];
// $image_path = $_POST['image_path'];


//browse_file\ad\post_ad_status.php

// session_start();
// $_SESSION["email"] = $email;

?>


<form action="../../api/post/api_post_ad.php" method="post">

  <label >product_name: </label>
  <input type="text"  name="product_name"><br><br>

  <label >email: </label>
  <input type="text"  name="email"><br><br>

  <label >category: </label>
  <input type="text"  name="category"><br><br>

  <label >city: </label>
  <input type="text"  name="city"><br><br>

  <label >local_area: </label>
  <input type="text"  name="local_area"><br><br>
  
  <label >description: </label>
  <input type="text"  name="description"><br><br>

  <label >price: </label>
  <input type="text"  name="price"><br><br>

  <label >phone_no: </label>
  <input type="text"  name="phone_no"><br><br>

  <label >photo: </label>
  <input type="file" name="image_path" ><br><br>
  
  <input type="submit" >

</form>