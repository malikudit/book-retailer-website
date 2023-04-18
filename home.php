<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

if (isset($_POST['add_to_cart'])) {
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];
   $product_author = $_POST['product_author'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'Already added to cart!';
   } else {
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, author, price, quantity, image) VALUES('$user_id', '$product_name', '$product_author', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Book added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <section class="home">

      <div class="content">
         <h3>Handpicked books - straight to your door.</h3>
         <p>We curate the best books from around the world and deliver them to your door.
         </p>
         <a href="about.php" class="white-btn">Discover more</a>
      </div>

   </section>

   <section class="products">

      <h1 class="title">Latest Products</h1>

      <div class="box-container">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
               ?>
               <form action="" method="post" class="box">
                  <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                  <div class="name">
                     <?php echo $fetch_products['name']; ?>
                  </div>
                  <div class="author">
                     <?php echo $fetch_products['author']; ?>
                  </div>
                  <div class="price">$
                     <?php echo $fetch_products['price']; ?>
                  </div>
                  <div class="qty">
                     <?php echo $fetch_products['quantity']; ?> in stock
                  </div>
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['author']; ?>">
                  <input type="hidden" name="product_quantity" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                  <input type="submit" value="add to cart" name="add_to_cart" class="btn">
               </form>
               <?php
            }
         } else {
            echo '<p class="empty">no products added yet!</p>';
         }
         ?>
      </div>

      <div class="load-more" style="margin-top: 2rem; text-align:center">
         <a href="shop.php" class="option-btn">Load More</a>
      </div>

   </section>

   <section class="about">

      <div class="flex">

         <div class="content">
            <h3>About Us</h3>
            <p>We're just a small bookstore, trying to get it done.</p>
            <a href="about.php" class="btn">Read more</a>
         </div>

      </div>

   </section>

   <section class="home-contact">

      <div class="content">
         <h3>Have any questions?</h3>
         <p>We're still only getting started, and appreciate any suggestions you might have about our catalog,
            website, or aesthetic. Get in touch!
         </p>
         <a href="contact.php" class="white-btn">Contact Us</a>
      </div>

   </section>





   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>