<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        body {
            line-height: 1.5;
            font-family: 'Poppins', sans-serif;

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .container {
            max-width: 1550px;
            margin: auto;

        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .row2 {
            margin-bottom: -56px;
        }





        .column22 {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clearfix (clear floats) */
        .row22::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 500px) {
            .column22 {
                width: 33%;
            }
        }


        ul {
            list-style: none;
        }

        .footer {
            background-color: #00375b;
            padding: 70px 0;
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
            height: auto;
        }

        .col-4 {
            flex: auto;
            width: 90%;
            box-sizing: border-box;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;

        }

        img {
            vertical-align: middle;
            border: 4px solid;
            border-color: #ffffff;
            height: 80px;
            /* width:5; */
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #ffe27a;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #ffffff;
            display: block;
            transition: all 0.3s ease;
            /* margin-top: 30px; */
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
            /* margin-top: 30px; */
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
            /* margin-top: 50px; */
        }

        /*responsive*/
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }

        .n1 {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Elite Custom Enterprises</h4>
                    <ul>

                        <li><a href="#"> We are providing</a></li>
                        <li><a href="#">variouse services to make</a></li>
                        <li><a href="#">your spaces ready for</a></li>
                        <li><a href="#">good startup !</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                    <li><a href="../home/index.php">Home</a></li>
                        <li><a href="../about/responabout.php">About Us</a></li>
                        <li><a href="#service1">Service</a></li>
                        <li><a href="../gallery/gallery.php">Gallery</a></li>
                        <li><a href="../contact/contact.php">Contact Us</a></li>
                        
                        
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul id="tt1">
                        <li>
                            <a href="#"> <i class="fa-solid fa-location-dot"></i> 123 Street, New York, USA</a>
                        </li>
                        <li><a href="#"> <i class="fa-solid fa-phone"></i> + 0123456790</a></li>
                        <li><a href="#"> <i class="fa-solid fa-envelope"></i> interior@gmail.com</a></li>

                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f n1"></i></a>
                            <a href="#"><i class="fab fa-twitter n1"></i></a>
                            <a href="#"><i class="fab fa-instagram n1"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in n1"></i></a>
                        </div>
                    </ul>


                </div>
                <div class="footer-col">
                    <h4>Gallery</h4>

                    <div class="col-4">
                        <div class="row22">
                            <div class="column22">
                                <img src="../footer/img/foot1.jpg" alt="Snow" style="width:100%">
                            </div>
                            <div class="column22">
                                <img src="../footer/img/foot3.jpg" alt="Forest" style="width:100%">
                            </div>
                            <div class="column22">
                                <img src="../footer/img/foot3.jpg" alt="Mountains" style="width:100%">
                            </div>
                        </div>


                        <div class="column22">
                            <img src="../footer/img/foot4.jpg" alt="Snow" style="width:100%">
                        </div>
                        <div class="column22">
                            <img src="../footer/img/foot5.jpg" alt="Forest" style="width:100%">
                        </div>
                        <div class="column22">
                            <img src="../footer/img/foot6.jpg" alt="Mountains" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="margin-top: 30px;background-color:white">
        <div class="row2">
            <p style="text-align: center;color:#fff; font-size:20px;margin-top:25px">&#169; All rights reserved</p>
        </div>
    </footer>

</body>

</html>