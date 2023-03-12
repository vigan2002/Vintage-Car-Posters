<?php 
include 'includes/configuration.php';
include 'includes/header/homehead.php';


include 'model/Posts.model.php';
$posti = new Posts;
$postat = $posti->fetchpostet();

$nr = 1;
?>

<!-- login -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>Sign in</h3>
        <span>Username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>Password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> Remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>Forget password ? <a href="#">Click here</a></p>
        <p>Don't have an account ? <a href="#">Create one</a></p>
    </form>

</div>

<!--Produktet-->>

<section class="home" id="home">

    <div class="row">


   
</table>

<table align="center" width="100%">
<br>


<table width="100%" id="myTable" cellspacing="0" cellpadding="5" class="data_list">
        <thead>
        <tr>
            <th width="35px" style="font-size:13px;">Id</th>
            <th width="80px" style="text-align:left;">Images</th>
            <th width="150px"style="text-align:center;">Titulli</th>
            <th style="text-align:center;">Autori</th>
            <th style="text-align:center;">Data</th>
            <th style="text-align:center;">Statusi</th>
            <th width="120px"style="text-align: left;"></th>
        </tr>
        </thead>
       <?php foreach ($postat as $pos): ?>
        <tr> 
                         <td style="text-align:center;"><b><?php echo $nr++; ?></b></td>
                         <td><img style="border-radius: 50%;" style="margin:auto"
                    src="/assets/post/<?php echo $pos['post_image'] ?>" height="50px"	width="50px" alt="image"></td>
                        <td style="text-align:center;"><b><?php echo $pos['post_title'] ?></b></td>
                         <td style="text-align:center;"><b><?php echo $pos['post_author'] ?></b></td>
                        <td style="text-align:center;"><b><?php echo $pos['post_date'] ?></b></td>
                        <td style="text-align:center;"><b><?php echo $pos['post_status'] ?></b></td>
                         <td> <button type="submit" onclick="window.location.href='/post?id=<?php echo $pos['post_id'] ?>'" class="btndefaultgreen"><i class="fas fa-eye"></i> View </button></td>
</tr>       
        <?php endforeach; ?>

       </table>
  

    </div>

            

</section>

<!-- <section class="home" id="home">

    <div class="row">


        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="books-templates/book-1.html" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="books-templates/book-2.html" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                <a href="books-templates/book-3.html" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="books-templates/book-4.html" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                <a href="books-templates/book-5.html" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                <a href="books-templates/book-6.html" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section> -->


<!-- Footer -->

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

<!-- JS -->
<script src="/assets/js/script.js"></script>

</body>
</html>