<?php
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'header.php'; ?>

   <div class="heading">
      <h3>About Us</h3>
      <p> <a href="home.php">Home</a> / About </p>
   </div>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="images/vandy.jpg" alt="">
         </div>

         <div class="content">
            <h3>What is this?</h3>
            <p>This is our final project for CS 3265: Database Management Systems at Vanderbilt University, in the spring 2023 semester.
               Simply, this is a fully functional bookstore, commissioned by Professor Dan Lin and Senator Bernie Sanders (I-VT). Feel free to explore!</p>
            <p>And if you have anything to say, feel free to reach out.</p>
            <a href="contact.php" class="btn">Contact Us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="title">Our reviews</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>This is the best bookstore in the world, folks. Believe me. I've read so many books from here and they're all tremendous. I'm a very stable genius because of this bookstore.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Donald Trump</h3>
         </div>

         <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>I can't read because I'm an idiot, but the website is pretty aesthetic.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Andrew Tate</h3>
         </div>

         <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>The store has a great collection - would spend $44 billion on this.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Elon Musk</h3>
         </div>

         <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>Imma let ya'll finish, but this is the GOAT bookstore. Also - Donda 2 is out now on the Stem Player, buy now at kanyewest.com!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Kanye West</h3>
         </div>

         <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>OOGA BOOGA AWOOGA BOOGA BOOGA</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>King Kong</h3>
         </div>

         <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>I found a cookbook from this store that taught me how to make a proper 
               burger. Now I don't have to yell at people for making rubbish burgers. It's a win-win.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Gordon Ramsay</h3>
         </div>

      </div>

   </section>

   <section class="authors">

      <h1 class="title">Featured Authors</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/author-1.jpg" alt="">
            <div class="share">
               <a href="https://en.wikipedia.org/wiki/Virginia_Woolf" class="fab fa-wikipedia-w"></a>
            </div>
            <h3>Virginia Woolf</h3>
         </div>

         <div class="box">
            <img src="images/author-2.jpg" alt="">
            <div class="share">
               <a href="https://www.facebook.com/MargaretAtwoodAuthor/" class="fab fa-facebook-f"></a>
               <a href="https://www.instagram.com/therealmargaretatwood/?hl=en" class="fab fa-instagram"></a>
               <a href="https://en.wikipedia.org/wiki/Margaret_Atwood" class="fab fa-wikipedia-w"></a>
            </div>
            <h3>Margaret Atwood</h3>
         </div>

         <div class="box">
            <img src="images/author-3.jpg" alt="">
            <div class="share">
               <a href="https://en.wikipedia.org/wiki/Fyodor_Dostoevsky" class="fab fa-wikipedia-w"></a>
            </div>
            <h3>Fyodor Dostoevsky</h3>
         </div>

         <div class="box">
            <img src="images/author-4.jpg" alt="">
            <div class="share">
               <a href="https://en.wikipedia.org/wiki/Jane_Austen" class="fab fa-wikipedia-w"></a>
            </div>
            <h3>Jane Austen</h3>
         </div>

         <div class="box">
            <img src="images/author-5.jpg" alt="">
            <div class="share">
               <a href="https://en.wikipedia.org/wiki/Douglas_Adams" class="fab fa-wikipedia-w"></a>
            </div>
            <h3>Douglas Adams</h3>
         </div>

         <div class="box">
            <img src="images/author-6.jpg" alt="">
            <div class="share">
               <a href="https://www.instagram.com/sallyrooneyofficial/?hl=en" class="fab fa-instagram"></a>
               <a href="https://en.wikipedia.org/wiki/Sally_Rooney" class="fab fa-wikipedia-w"></a>
            </div>
            <h3>Sally Rooney</h3>
         </div>

      </div>

   </section>

   <?php include 'footer.php'; ?>
   <script src="js/script.js"></script>

</body>

</html>