<?php
$DOC_ROOT = "";
$title = ""
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="<?php echo $DOC_ROOT; ?>assets/css/bootstrap.min.css">

    <!--custom css-->
    <link rel="stylesheet" href="<?php echo $DOC_ROOT; ?>assets/css/style.css">

    <!--swiper-->
    <link rel="stylesheet" href="<?php echo $DOC_ROOT; ?>assets/css/swiper-bundle.min.css">

    <!--fontawesome icons-->
    <link rel="stylesheet" href="<?php echo $DOC_ROOT; ?>assets/css/all.min.css">

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="content-wrapper">
        <?php include($DOC_ROOT . 'includes/header.php'); ?>


        <!-- Swiper -->
        <section class="slider">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/abstract-1.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/abstract-2.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/abstract-3.jpg" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://swiperjs.com/demos/images/abstract-4.jpg" />
                    </div>
                </div>
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <?php include($DOC_ROOT . 'includes/footer.php'); ?>

        <!---->
    </div>
</body>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        effect: 'fade',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>

</html>