<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Logoo.png">
    <title>about</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'components/user_header.php'; ?>

    <section class="about">

        <div class="row">

            <div class="image">
                <img src="images/tko.jpeg" alt="">
            </div>

            <div class="content">
                <h3>Mengapa Memilih Kami?</h3>
                <p>Toko Kios <strong>JJTJ</strong> merupakan kios penyedia pakan hewan yang berlokasi 
                di Kecamatan Keteguhan, Kota Bandar Lampung. Kami menyediakan berbagai kebutuhan hewan peliharaan dan ternak, mulai dari pakan burung, 
                pakan kucing, pakan ikan, hingga pakan ayam. Selain itu, kami juga menjual sangkar burung, tudung burung, dan perlengkapan lainnya dengan 
                kualitas terbaik.

                Dengan harga grosir yang bersahabat dan pelayanan yang ramah, Kios <strong>JJTJ</strong> hadir untuk memudahkan para pencinta burung serta 
                warga sekitar dalam memenuhi kebutuhan hewan kesayangan mereka. Kami berkomitmen untuk memberikan pengalaman belanja yang nyaman, cepat, dan memuaskan.
                </p>
                <a href="contact.php" class="btn">Kontak Saya</a>
            </div>

        </div>

    </section>

    <!-- <section class="reviews">

        <h1 class="heading">Ulasan Pembeli</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="images/gmbr1.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto
                        adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Rasti</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-2.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto
                        adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Budi</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-3.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto
                        adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Ali Usman</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-4.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto
                        adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Jae Nudin</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-5.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto
                        adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john deo</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-6.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto
                        adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Irfan</h3>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section> -->









    <?php include 'components/footer.php'; ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script>
    var swiper = new Swiper(".reviews-slider", {
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
        },
    });
    </script>

</body>

</html>