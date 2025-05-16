<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Logoo.png">
    <title>home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'components/user_header.php'; ?>
    <section class="home-promotion">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/boltt.png" class="d-block img-fluid" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="images/chripyy.png" class="d-block img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/bg seller.png" class="d-block img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/PAKAN KUCING.png" class="d-block img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/ikan-bg.png" class="d-block img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/nektar.png" class="d-block img-fluid" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="home-products">

        <h1 class="heading">Produk Terbaru</h1>

        <div class="swiper products-slider">

            <div class="swiper-wrapper">

                <?php
     $select_products = $conn->prepare("SELECT * FROM `products` "); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
                <form action="" method="post" class="swiper-slide slide">
                    <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                    <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                    <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                    <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                    <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                    <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
                    <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                    <div class="name"><?= $fetch_product['name']; ?></div>
                    <div class="flex">
                        <div class="price"><span>Rp. </span><?= $fetch_product['price']; ?></div>
                        <input type="number" name="qty" class="qty" min="1" max="99"
                            onkeypress="if(this.value.length == 2) return false;" value="1">
                    </div>
                    <input type="submit" value="Tambahkan Ke keranjang" class="btn" name="add_to_cart">
                </form>
                <?php
      }
   }else{
      echo '<p class="empty">belum ada produk yang ditambahkan!</p>';
   }
   ?>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>









    <?php include 'components/footer.php'; ?>

    <!-- Include Bootstrap JS (jQuery is not required for Bootstrap 5) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

    <script>
    // var swiper = new Swiper(".home-slider", {
    //     loop: true,
    //     spaceBetween: 20,
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },
    // });

    // var swiper = new Swiper(".category-slider", {
    //     loop: true,
    //     spaceBetween: 20,
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },
    //     breakpoints: {
    //         0: {
    //             slidesPerView: 2,
    //         },
    //         650: {
    //             slidesPerView: 3,
    //         },
    //         768: {
    //             slidesPerView: 4,
    //         },
    //         1024: {
    //             slidesPerView: 5,
    //         },
    //     },
    // });

    var swiper = new Swiper(".products-slider", {
        loop: true,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
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