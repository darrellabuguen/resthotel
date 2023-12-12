<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./src/images/hotel-logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="./src/responsive.css">
    <title>Rest Hotel | About</title>

    <style>
        .abt-con {
            display: flex;
            width: 100%;
            margin: auto;
            gap: 3%;
            max-width: 1200px;
        }

        .abt-container {
            width: 100%;
            height: 100%;
        }

        .abt-content {
            letter-spacing: 1px;
            font-size: 120%;
            color: gray;
        }

        h3 {
            color: #202020;
            letter-spacing: 2px;
        }

        .contact-us-content p {
            color: #202020;
            letter-spacing: 2px;
        }

        .abt-icon {
            width: 50px;
            fill: #202020;
        }

        .contact-con {
            width: 100%;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        @media screen and (max-width: 768px) {
            .abt-con {
                flex-direction: column;

                .sec-about.first {
                    margin-bottom: 5%;
                }
            }

            .abt-con.second {
                flex-direction: column-reverse;

                .sec-about.second {
                    margin-bottom: 5%;
                }
            }
        }

        @media screen and (max-width: 478px) {
            .abt-content {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo-container">
                <img class="logo" src="./src/images/hotel-logo.png" alt="img" onclick="setHome()">
                <p onclick="setHome()"><b>REST</b> Hotel</p>
            </div>
            <ul class="link-container">
                <li class="link"><a href="./index.html">Home</a></li>
                <li class="link"><a href="./rooms.php">Rooms</a></li>
                <li class="link"><a href="./about.php">About</a></li>
                <li class="link"><a href="./gallery.php">Gallery</a></li>
                <li class="link"><a href="./verify.php">Verify Booking</a></li>
                <li class="link"><a class="backred" href="./contact.php">Contact Us</a></li>
            </ul>
            <div class="mobile-menu-con">
                <div class="mobile-menu">
                    <ul class="mobile-links">
                        <li class="link"><a href="./index.html">Home</a></li>
                        <li class="link"><a href="./rooms.php">Rooms</a></li>
                        <li class="link"><a href="./about.php">About</a></li>
                        <li class="link"><a href="./gallery.php">Gallery</a></li>
                        <li class="link"><a href="./verify.php">Verify Booking</a></li>
                        <li class="link"><a href="./contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="menu-con">
                <div class="menu-frame">
                    <div class="bar one"></div>
                    <div class="bar two">
                        <div class="bar four"></div>
                    </div>
                    <div class="bar three"></div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="gap"></div>
        <div class="gap"></div>
        <section class="gtk-h1">
            <div class="h1-con gtk">
                <p>GET TO KNOW US</p>
            </div>
            <div class="h1-con">
                <h1 class="kmabt">
                    Know more about
                    <br>
                    <span class="red">Rest</span> Hotel
                </h1>
            </div>
        </section>

        <div class="gap"></div>
        <div class="gap"></div>
        <div class="gap"></div>
        <div class="gap"></div>

        <!-- Start of about us -->

        <section class="abt-con">
            <div class="sec-about first">
                <div class="outer-con">
                    <div class="img-sec-con">
                        <img class="img-sec" src="./src/images/lobby3-cropped.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="abt-container">
                <div class="h3-con">
                    <h3>ABOUT US</h3>
                </div>
                <div class="gap"></div>
                <div class="abt-content">
                    <p>
                        Located at the heart of Summer Capital of the Philippines.
                        Rest Hotel is a tourist hotel custom-made to better aid the
                        needs of people that would visit the City of Baguio. The Rest
                        hotel has 30 rooms with 5 different types that would suit
                        anyone whether it is a group-travel, family-travel, and even
                        solo-travel.
                    </p>
                </div>
            </div>
        </section>
        <div class="gap"></div>
        <div class="gap"></div>
        <section class="abt-con second">
            <div class="abt-container">
                <div class="h3-con">
                    <h3>SERVICES</h3>
                </div>
                <div class="gap"></div>
                <div class="abt-content">
                    <p>
                        Rest Hotel is accessible to the business, shopping and tourist
                        spots in Baguio which would be convenient for tourists. The
                        hotel offers services such as Fitness and Wellness Facilities,
                        Dining Services, Room Service, and Pet-Friendly Services.
                    </p>
                </div>
            </div>
            <div class="sec-about second">
                <div style="width: 100%;">
                    <img class="img-sec" src="./src/images/pets-srv.jpg" alt="img">
                </div>
            </div>
        </section>
        <!-- Contact us section -->
        <div class="gap"></div>
        <div class="gap"></div>
        <section class="contact-us" align="center">
            <div class="contact-con">
                <div class="icon-con">
                    <span>
                        <svg class="abt-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Pro 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                        </svg>
                    </span>
                </div>
                <div class="contact-us-content pad-15">
                    <h3>
                        SEND US A MESSAGE
                    </h3>
                    <p>
                        If you have questions about our services
                        <br>
                        or have proposal
                        in mind, kindly contact us.
                    </p>
                </div>
                <div align="center">
                    <a href="./contact.php" class="book-btn abt">CONTACT US</a>
                </div>
            </div>
        </section>
        <span class="back-top" onclick="window.scrollTo(0, 0)">
            &uarr;
        </span>
    </main>

    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <div class="gap"></div>
    <!-- Footer starts here -->
    <footer>
        <div align="center">
            <h1>BOOK NOW!</h1>
            <p>
                ©2023 REST HOTEL BAGUIO.
                ALL RIGHTS RESERVED.
            </p>
        </div>
    </footer>

    <script src="./src/index.js"></script>
</body>

</html>