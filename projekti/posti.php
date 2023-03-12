<?php 
include 'includes/configuration.php';
include 'includes/header/homehead.php';


include 'model/Posts.model.php';
$posti = new Posts;
$postat = $posti->fetchpostetbyid($_GET['id']);

?>


<!--produkti-->
<div class="wrapper">
    <div class="product-img">
      <img src="/assets/post/<?php echo $postat['post_image']?>" height="325" width="325">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1 class="vintage"><?php echo $postat['post_title'] ?></h1>
        <h2>Vintage posters</h2>
        <p><?php echo $postat['post_content'] ?></p>
      </div>
      <div class="product-price-btn">
       
      </div>
    </div>
  </div>

  <!--footeri-->
  <section class="footer">

    <div class="box-container">

        <div class="box">
            <h3 class="vintage">Locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Kosovo </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Albania </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Turkey </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Germany </a>
        </div>

        <div class="box">
            <h3 class="vintage">quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
        </div>

        <div class="box">
            <h3 class="vintage">contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +383 43 749 712 </a>
            <a href="#"> <i class="fas fa-phone"></i> +383 45 459 797 </a>
            <a href="#"> <i class="fas fa-envelope"></i> vcp@posters.com</a>
            <img src="image/seal.png" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit vintage"> created by Vigan-Albin Co | all rights reserved! </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

</body>
</html>