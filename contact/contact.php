<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="contact1.css" rel="stylesheet">


    <title>Hello, world!</title>

</head>

<body>

    <?php
    include("../navbar/navbar.php");
    ?>
    <br>
    <br>

    <div>
        <img src="images\6.jpg" class="img-fluid" alt="..." data-aos="zoom">

    </div>
    <div class="container" style="margin-top: 40px;margin-right:auto" data-aos="fade-up">
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-left: 60px;">
            <div class="card mb-3" style="border:0">
                <div class="card" style="max-width: 540px; border: 0;">
                    <div class="row g-0">
                        <div class="col-md-4 bg-icon">
                            <img src="images\loc.PNG" class="img-fluid i2 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title card1 j2">43 Raymouth Rd. Baltemoer,London 3910</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="border:0">
                <div class="card" style="max-width: 540px; border: 0;">
                    <div class="row g-0">
                        <div class="col-md-4 bg-icon">
                            <img src="images\mail.PNG" class="img-fluid i3 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title card1 j1">info@yourdomain.com</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="border:0">
                <div class="card" style="max-width: 540px; border: 0;">
                    <div class="row g-0">
                        <div class="col-md-4 bg-icon">
                            <img src="images\phone.PNG" class="img-fluid i3 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title card1 j1">+1 294 3925 3939</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <form method="POST" action="connect.php" class="modal-body" data-aos="zoom-out">
        <div class="d1">
            <h1 class="h1">Contact for more details</h1>
            <br>

            <div class="container d2">
                <div class="form-floating md-3">
                    <input type="text" class="form-control i1" name="name" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Enter your name</label>
                </div><br>
                <div class="form-floating">
                    <input type="email" class="form-control i1" name="emi" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Enter your Email</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="text" maxlength="10" name="phon" class="form-control i1" id="floatingInput" placeholder="Phone ">
                    <label for="floatingInput">Enter your phone no.</label>
                </div>
                <div class="form-floating">
                    <input type="address" class="form-control i1" name="addr" id="floatingPassword" placeholder="Address">
                    <label for="floatingPassword">Enter your address</label>
                </div><br>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control i1" name="date" id="floatingInput" placeholder="Date">
                    <label for="floatingInput">Date for Apponinment</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control i1" name="mess" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Message</label>
                </div><br>
                <div class="form-floating"><button type="submit" class="btn b1">Submit</button>
                </div>
            </div>
        </div>
    </form>
    </div>




    <div class="container" data-aos="zoom-in">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.1705262976925!2d73.80116811107308!3d18.656342264939045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9022416894f%3A0xb460d5bd2755708a!2sTechview%20Infotech%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1703824145616!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <!-- aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            // offset: 300,
            duration: 1000,
        });
    </script>
    <?php
    include("../footer/footer.php");
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


</body>

</html>