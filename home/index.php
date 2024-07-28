<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interior Design</title>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/about-section.css">
    <link rel="stylesheet" href="./css/gallery.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/form.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
    <?php
    include("../navbar/navbar.php");
    ?>

    <!-- Home hero Section -->
    <div class="home-hero-section">
        <div class="abs">
            <p class="heading" data-aos="zoom-out">Elite Custom Enterprises</p>
            <p class="content" data-aos="zoom-out">We are providing variouse services to make your spaces ready for good startup !</p>
            <button data-aos="zoom-out"><a href="#service1" style="text-decoration:none; color: black;"> Explore our Services</a></button>
        </div>
    </div>
    <!-- Home hero Section -->


    <!--  About Section -->
    <div class="about-section">
        <div class="one" data-aos="fade-right">
            <p class="heading" style="color:#00375B;">Expertly crafted designs for all spaces, reflecting your style.</p>
            <br>
            <p class="text">Our expert team meticulously crafts designs tailored to every space, ensuring they reflect your unique style. From cozy bedrooms to functional kitchens, we blend creativity and functionality to maximize comfort and practicality. Trust us for an exceptional interior experience that transforms your home into a reflection of your personality.
            </p>
            <br>
            <button>
                <a href="../about/responabout.php" style="text-decoration:none; color: black;"> More About Us</a>

            </button>
        </div>

        <div class="two" data-aos="fade-left">
            <img src="./images/001.jpg" alt="Your Image">
        </div>
    </div>
    <!-- About Section -->


    <!-- Gallery Section -->
    <div class="gallery">

        <p class=" heading">Our Image Gallery</p>

        <div class="gallery-div" data-aos="zoom-out-down">
            <div class="card">
                <img src="./images/001.jpg" alt="Image 9">
            </div>
            <div class="card">
                <img src="./images/004.jpg" alt="Image 10">
            </div>
            <div class="card">
                <img src="./images/004.jpeg" alt="Image 11">
            </div>
            <div class="card">
                <img src="./images/005.jpeg" alt="Image 12">
            </div>
            <div class="card">
                <img src="./images/007.jpg" alt="Image 9">
            </div>
            <div class="card">
                <img src="./images/008.jpg" alt="Image 10">
            </div>
            <div class="card hide">
                <img src="./images/009.jpg" alt="Image 11">
            </div>
            <div class="card hide">
                <img src="./images/0010.jpg" alt="Image 12">
            </div>
        </div>

    </div>
    <!-- Gallery Section -->


    <!-- Services Section -->
    <div class="services" id="service1">
        <p class="heading">Our Services</p>

        <div class="services-div">
            <a href="../services/Electrical Work Services/electric.php">
                <div class="card" data-aos="fade-right">
                    <img src="./images/011.jpg" alt="Card 1 Image">
                    <div class="card-heading">Electrical Work Services</div>
                </div>
            </a>
            <a href="../services/pest_control/pestcontrol1.php">
                <div class="card" data-aos="fade-right">
                    <img src="./images/012.jpeg" alt="Card 1 Image">
                    <div class="card-heading">Pest Control</div>
                </div>
            </a>
            <a href="../services/plumb/pumbling.php">
                <div class="card" data-aos="fade-left">
                    <img src="./images/013.webp" alt="Card 1 Image">
                    <div class="card-heading">Plumbing</div>
                </div>
            </a>
            <a href="../services/houseKeeping/housekeeping.php">
                <div class="card" data-aos="fade-left">
                    <img src="./images/014.webp" alt="Card 1 Image">
                    <div class="card-heading">House Keeping</div>
                </div>
            </a>
        </div>
        <div class="more-services">
            <!-- <button>Explore More Services</button> -->
        </div>
    </div>
    <!-- Services Section -->


    <!-- Form Section -->
    <div class="main-form-div">
        <img src="./images/009.jpg" alt="" data-aos="fade-right">
        <form action="../home/Form.php" method="POST" data-aos="fade-left">
            <p class="contact-title">Design Your Next Commercial Space With The Most Trusted Interior Design Firm
            </p>
            <br>
            <button class="req">REQUEST A CALL BACK</button>
            <br>
            <br>
            <br>
            <div class="two-sec">
                <input type="text" placeholder="Your Name" name="name" required>
                <input type="email" placeholder="Your Email Id" name="email" required>
            </div>

            <div class="two-sec">
                <input type="tel" placeholder="Your Contact No" name="phone" required>
                <select name="location" required>
                    <option value="Select Location">Select Location</option>
                    <option value="Pune">Pune</option>
                    <option value="PCMC">PCMC</option>
                    <option value="Lonavala">Lonavala</option>
                </select>
            </div>

            <div class="two-sec">
                <select name="area" required>
                    <option value="Pune">Project Area</option>
                    <option value="1000">1000 SQ Feet</option>
                    <option value="2000">2000 SQ Feet</option>
                    <option value="3000">3000 SQ Feet</option>
                    <option value="4000">4000 SQ Feet</option>
                    <option value="5000">5000 SQ Feet</option>
                </select>
                <select name="budget" required>
                    <option value="Pune">Budget</option>
                    <option value="50000">50 Thousand</option>
                    <option value="100000">1 Lakh</option>
                    <option value="200000">2 Lakh</option>
                    <option value="300000">3 Lakh</option>
                </select>
            </div>

            <div class="two-sec">
                <select name="requirement" required>
                    <option value="Requirement">Requirements</option>
                    <option value="10">10 Person</option>
                    <option value="20">20 Person</option>
                </select>
                <input type="submit" value="Submit" class="submit-input">
            </div>

            <p class="agree">
                <input type="checkbox" name="" required>
                <span>By submitting this form, I agree to be contacted by a member of the Flipspaces team</span>
            </p>

        </form>
    </div>
    <!-- aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1000,
        });
    </script>
    <!-- Form Section -->


    <?php
    include("../footer/footer.php");
    ?>
</body>

</html>