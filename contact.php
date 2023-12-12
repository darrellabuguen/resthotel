<?php include 'connect.php'; ?>
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
    <title>Rest Hotel | Contact Us</title>

    <style>
        h3 {
            color: #202020;
            letter-spacing: 2px;
        }

        .contact-con {
            display: grid;
            grid-gap: 10px;
            grid-template-columns: repeat(2, 1fr);
            justify-content: flex-start;
        }

        .contact-info {
            letter-spacing: 2px;
        }

        .inputs {
            padding-top: 15px;
            width: 100%;
        }

        .lbl {
            font-size: 12px;
        }

        .diff {
            color: gray;
        }

        @media screen and (max-width: 1000px) {
            .contact-con {
                grid-template-columns: unset;
                grid-template-rows: repeat(2, 0.75fr);
            }
        }

        @media screen and (max-width: 478px) {
            .contact-info {
                font-size: 12px;
            }

            .lbl {
                font-size: 10px;
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
        <section class="gtk-h1">
            <div class="h1-con gtk">
                <p>CUSTOMER CARE</p>
            </div>
            <div class="h1-con">
                <h1 class="kmabt">
                    Contact Us
                </h1>
            </div>
        </section>
        <div class="gap"></div>
        <div class="gap"></div>
        <div class="gap"></div>

        <div class="contact-con">
            <div class="container">
                <div class="h3-con">
                    <h3>INFORMATION</h3>
                </div>
                <div class="gap"></div>
                <div class="contact-info">
                    <p>Baguio City, Philippines</p><br>
                    <p><b>Trunkline: </b><span class="diff">0000-0000 (9:00 AM - 5:00 PM)</span></p>
                    <p><b>Room Reservation: </b><span class="diff">1111-1111 or
                            <br>reservationstest@resthotel.com</span>
                    </p>
                    <div class="gap"></div>
                    <p><b>Email: </b><span class="diff">resthotel@test.com</span></p>
                </div>
            </div>
            <div class="container">
                <div class="h3-con">
                    <h3>SEND A MESSAGE</h3>
                </div>
                <form action="contact.php" method="post" class="contact-form">
                    <div class="inputs">
                        <label for="contact_name" class="lbl">YOUR NAME*</label>
                        <input class="ginput" required id="contact_name" type="text" name="contact_name">
                    </div>
                    <div class="flex">
                        <div class="inputs">
                            <label for="contact_number" class="lbl">PHONE NUMBER*</label>
                            <input name="contact_number" class="ginput" required id="contact_number" type="text">
                        </div>
                        <div class="inputs">
                            <label for="contact_email" class="lbl">EMAIL ADDRESS*</label>
                            <input name="contact_email" class="ginput" required id="contact_email" type="text"
                                onchange="validateEmail(this.id)">
                        </div>
                    </div>
                    <div class="inputs">
                        <label for="message" class="lbl">YOUR MESSAGE*</label><br>
                        <textarea name="message" class="ginput" required id="message" cols="30" rows="5"></textarea>
                    </div>
                    <div class="inputs">
                        <button name="submit_msg" class="book-btn" type="submit">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>

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

    <script src=" ./src/index.js"></script>
    <script>
        function validateEmail(email) {
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            email = document.getElementById(`${email}`);
            if (!regex.test(email.value)) {
                alert("Invalid email address!");
                email.value = "";
            }
        }
    </script>
</body>

</html>

<?php
if (isset($_POST['submit_msg'])) {
    $name = $_POST['contact_name'];
    $phone = $_POST['contact_number'];
    $email = $_POST['contact_email'];
    $message = $_POST['message'];

    if (isset($name, $phone, $email, $message) && $name && $phone && $email && $message !== "") {
        $msg = mysqli_query($connection, "INSERT INTO messages(messenger_name,phone_num,email,messages)
        VALUES('$name','$phone','$email','$message');");

        if ($msg) {
            echo ("<script>alert('Message successfully sent');</script>");
        } else {
            echo ("<script>alert('Message not sent. Error occured');</script>");
        }
    }
}
?>