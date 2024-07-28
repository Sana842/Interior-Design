<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="gallery.css">
</head>

<body>
    <?php
    include("../navbar/navbar.php");
    ?>
    <br>
    <br>
    <section>
        <div class="main">
            <img src="./img/main.avif" alt="main img">
            <h1 data-aos="zoom-out">
                Explore and capture the essence of our work
            </h1>
            <p data-aos="zoom-out">You will really enjoy doing business with us! we offer competitive price. We save you time and money. Interested? Check out our photos.</p>
            <!-- <div class="btn-group">
                <div>
                    <button class="btn">book now</button>
                </div>
                <div>
                    <button class="btn">explore more</button>
                </div> -->
        </div>
        </div>
    </section>
    <section class="gallery">
        <h2 data-aos="fade-in">Explore Us</h2>
        <p>Our experienced workers are highly trained in all aspects of electrical service, painting, housekeeping, plumbing office lighting, security systems to emergency repair and many more.</p>
        <div class="grid-container">
            <div class="img-box">
                <img src="./img/img1.jpeg" alt="img" class="grid-img img1">
            </div>
            <div class="img-box">
                <img src="./img/img2.jpg" alt="img" class="grid-img img2">
            </div>
            <div class="img-box">
                <img src="./img/img3.jpg" alt="img" class="grid-img img3">
            </div>
            <div class="img-box" data-aos="zoom-in">
                <img src="./img/img4.jpg" alt="img" class="grid-img img4">
            </div>
            <div class="img-box" data-aos="zoom-in">
                <img src="./img/img5.jpg" alt="img" class="grid-img img5">
            </div>
            <div class="img-box" data-aos="zoom-in">
                <img src="./img/img6.jpg" alt="img" class="grid-img img1">
            </div>
            <div class="img-box" data-aos="zoom-out">
                <img src="./img/img7.jpg" alt="img" class="grid-img img2">
            </div>
            <div class="img-box" data-aos="zoom-out">
                <img src="./img/img8.webp" alt="img" class="grid-img img3">
            </div>
            <div class="img-box" data-aos="zoom-out">
                <img src="./img/img9.webp" alt="img" class="grid-img img5">
            </div>
            <div class="img-box" data-aos="zoom-in">
                <img src="./img/img10.avif" alt="img" class="grid-img img1">
            </div>
            <div class="img-box" data-aos="zoom-in">
                <img src="./img/img11.jpg" alt="img" class="grid-img img2">
            </div>
            <div class="img-box" data-aos="zoom-in">
                <img src="./img/img12.jpg" alt="img" class="grid-img img4">
            </div>
        </div>
    </section>

    <section class="js-gallery">
        <h2 data-aos="fade-up">See more of our work</h2>
        <p data-aos="zoom-out"> Our gallery includes snapshots of our workspaces, events, and daily activities that contribute to the dynamic and positive atmosphere.</p>
        <div class="js-img-wrapper">
            <div class="main-img" data-aos="zoom-out">
                <img src="./img/ppl1.jpg" alt="" class="main main-img" id="main-img">
            </div>
            <div class="sub-img" data-aos="fade-right">
                <img src="./img/ppl1.jpg" alt="" class="main" onclick="changeImg('/img/ppl1.jpg')">
                <img src="./img/ppl8.avif" alt="" class="main md-img" onclick="changeImg('/img/ppl8.avif')">
                <img src="./img/ppl3.jpg" alt="" class="main md-img" onclick="changeImg('/img/ppl3.jpg')">
                <img src="./img/ppl4.jpg" alt="" class="main" onclick="changeImg('/img/ppl4.jpg')">
            </div>
            <div class="sub-img" data-aos="fade-left">
                <img src="./img/ppl5.webp" alt="" class="main" onclick="changeImg('/img/ppl5.webp')">
                <img src="./img/ppl6.webp" alt="" class="main md-img" onclick="changeImg('/img/ppl6.webp')">
                <img src="./img/ppl7.jpg" alt="" class="main md-img" onclick="changeImg('/img/ppl7.jpg')">
                <img src="./img/ppl10.jpg" alt="" class="main" onclick="changeImg('/img/ppl10.jpg')">
            </div>
        </div>
    </section>


    <script>
        function changeImg(getImg) {
            var img = document.getElementById('main-img');
            img.src = getImg;
        }
    </script>
    <!-- aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
    </script>
    <?php
    include("../footer/footer.php");
    ?>
</body>

</html>