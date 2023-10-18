<?php 
include 'components/connect.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidase Tour and Travel</title>
   
    <!--swiper module link -->
   <link rel="stylesheet" href="  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
       
      <!-- awesome module link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
       <
          <!-- css custom file link-->
         <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    
    <?php include 'components/header.php'; ?> 

<!-- home section-->


 <div class="home-bg>
   <section class="home">
          <div class="swiper home-slider">
             <div class="swiper-wrapper">

             <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/abay_fall.jpg" alt="">
                </div>
             <div class="content">
                <span>explore,discover,travel</span>
                 <p>abbay fall north_west ethiopia</p>
                <h3>travel arround the world</h3>
                <a href="book.php">book now</a>
             </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/lalibela.jpg" alt="">
                </div>
             <div class="content">
                <span>explore,discover,travel</span>
                 <p>lalibela  north ethiopia</p>
                <h3>travel arround the world</h3>
                <a href="book.php">book now</a>
             </div>
            </div>
      
           <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/aksum.jpg" alt="">
                </div>
        <div class="content">
           <span>explore,discover,travel</span>
           <h3>descover new place</h3>
           <a href="book.php">book now</a>
        </div>
      </div>

      <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/fassil_palance.jpg" alt="">
                </div>
        <div class="content">
           <span>explore,discover,travel</span>
           <h3>descover new place</h3>
           <a href="book.php">book now</a>
        </div>
      </div>

</div>
    <div    class="swiper-pagination"> </div>
</div>
</section>
</div



 <!-- footer section-->
<?php include 'components/footer.php';  ?>
<!--swipper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!--custom js file link-->
    <link type="javascript" href="javascript.js"/>
     <script>
var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>




</body>
</html>
