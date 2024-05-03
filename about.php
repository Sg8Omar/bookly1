<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Welcome to Bookly.
At Bookly. we are passionate about connecting readers with the books they love. Our online platform offers a vast selection of books across all genres, ensuring there's something for every reader. Whether you're a bookworm searching for your next literary adventure or a student in need of textbooks for your studies, we've got you covered.</p>
         <p>What Sets Us Apart:

Diverse Collection: We pride ourselves on offering a diverse collection of books, ranging from bestsellers and classics to niche titles and indie gems. With new releases constantly added to our inventory, there's always something exciting to discover.
User-Friendly Interface: Our website is designed with the reader in mind. Our intuitive interface makes it easy to browse, search, and purchase books with just a few clicks. Plus, our advanced search filters help you find exactly what you're looking for, whether it's by genre, author, or publication date.
Competitive Pricing: We believe that everyone should have access to great books at affordable prices. That's why we strive to offer competitive pricing on all our titles, ensuring you get the best value for your money.
Convenience: With our online bookstore, you can shop for books anytime, anywhere. Whether you're at home, at work, or on the go, you can easily browse our selection and make purchases at your convenience. Plus, we offer fast and reliable shipping options to ensure your books arrive promptly.
Community Engagement: We're more than just a bookstore – we're a community of book lovers. Follow us on social media for book recommendations, author interviews, and discussions with fellow readers. Plus, sign up for our newsletter to stay updated on the latest releases, promotions, and events.
Our Mission:

At Bookly. our mission is simple: to inspire a lifelong love of reading. We believe that books have the power to educate, entertain, and enrich our lives, and we're committed to making great literature accessible to all. Whether you're a seasoned reader or just starting your literary journey, we're here to help you find your next favorite book.

Get in Touch:

Have a question about our bookstore or need assistance with an order? Our friendly customer service team is here to help. Contact us via email, phone, or live chat, and we'll be happy to assist you.

Thank you for choosing Bookly. for all your reading needs. Happy reading!
</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Amazing service! The team went above and beyond to meet my expectations. I couldn't be happier with the result.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ahmed Al-Mansoori</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Exceptional quality of work! The team demonstrated professionalism and attention to detail throughout the process. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yasmine Khalidi</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Impressive service! They provided innovative solutions and delivered results beyond my expectations. Will definitely work with them again!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mohammed Ali</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Outstanding performance! They provided exceptional service and demonstrated expertise in every aspect of the project. Highly satisfied!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>khadija Abas</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Excellent work! They provided timely and efficient service, exceeding my expectations. I highly recommend their services!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Salim Said</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Exceptional experience! The team was professional, responsive, and delivered outstanding results. I'm extremely satisfied!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Layla Al-Hashemi</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>