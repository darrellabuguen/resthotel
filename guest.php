<?php
session_start();
if (isset($_SESSION['price']) || isset($_POST['gcontinue'])) {
    if ($_SESSION['in-date'] && $_SESSION['out-date'] && $_SESSION['nights'] && $_SESSION['price'] && $_SESSION['vat'] && $_SESSION['total'] && $_SESSION['adult'] && $_SESSION['bed-type'] && $_SESSION['room-type'] != "") {
        ?>
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
            <title>Rest Hotel</title>
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
                <div class="phase-container">
                    <div class="phase1 phase">
                        <div class="phase-con ph1">
                            <svg class="phase-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
                            </svg>
                        </div>
                        <p>Check-in & Check-out Date</p>
                    </div>
                    <div class="connector p1"></div>
                    <div class="phase2 phase">
                        <div class="phase-con ph2">
                            <svg class="phase-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                        </div>
                        <p>Guest Information</p>
                    </div>
                    <div class="connector p2"></div>
                    <div class="phase3 phase">
                        <div class="phase-con ph3">
                            <svg class="phase-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path
                                    d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                            </svg>
                        </div>
                        <p>Booking Confirmation</p>
                    </div>
                </div>
                <form method="post" action="guest.php" class="sumry-container gpage" name="summary">
                    <div class="ginfo-container">
                        <h2>Personal Information</h2>
                        <br>
                        <div class="frow">
                            <div>
                                <input class="ginput" id="gname" type="text" required name="gname"
                                    onchange="validateField(this.id)" placeholder="FIRST NAME">
                                <p class="result fname"></p>
                            </div>
                            <div>
                                <input class="ginput" id="glname" type="text" required name="glname"
                                    onchange="validateField(this.id)" placeholder="LAST NAME">
                                <p class="result lname"></p>
                            </div>
                        </div>
                        <br>
                        <div>
                            <select class="ginput" name="gender" id="ggender">
                                <option value="Male">MALE</option>
                                <option value="Female">FEMALE</option>
                                <option value="Other">OTHER</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <input class="ginput" id="gcontact" type="text" required name="gcontact"
                                onchange="validateContact()" placeholder="CONTACT NUMBER">
                            <p class="result contact"></p>
                        </div>
                        <br>
                        <div>
                            <input class="ginput" id="gemail" type="email" required name="gemail"
                                onchange="validateEmail(this.id)" placeholder="EMAIL ADDRESS">
                            <p class="result email"></p>
                        </div>
                        <br>
                        <div>
                            <input class="ginput" id="gremail" type="email" required name="gremail"
                                onchange="validateEmail(this.id)" placeholder="RE-TYPE EMAIL">
                            <p class="result remail"></p>
                        </div>
                        <div class="flex">
                            <label for="garrive" class="pad-15">Arrival</label>
                            <input class="ginput" id="garrive" type="time" required name="garrive"
                                onchange="validateField(this.id)">
                            <p class="result arrival"></p>
                        </div>
                    </div>
                    <div class="gpage-smry">
                        <h2 class="smry-header">Booking Summary</h2>
                        <div class="in-out">
                            <p name="date">Date : <span class="slct-date"></span></p>
                            <p name="night-p">Night(s) : <span><input class="nights" type="text" name="nights"></span></p>
                            <input class="hidden ind" type="text" value="" name="in-date">
                            <input class="hidden outd" type="text" value="" name="out-date">
                        </div>
                        <br>
                        <div class="price-vat">
                            <table class="booking-info">
                                <tbody>
                                    <tr>
                                        <td>
                                            <span><input class="smry" type="text" name="bed-type"></span>
                                        </td>
                                        <td class="notouch">PHP</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Per night
                                        </td>
                                        <td>
                                            <span><input class="price notouch" type="text" name="price"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p name="infos">
                                                <span class="adult-dtls"></span> Adult(s),
                                                <span class="child-dtls"></span> Child(ren)
                                                <input class="hidden adlt" type="text" value="" name="adult">
                                                <input class="hidden chld" type="text" value="" name="child">
                                                <input class="hidden rtype" type="text" value="" name="room-type">
                                            </p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <table class="vat">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5>VAT (12.0%)</h5>
                                    </td>
                                    <td>
                                        <input class="taxx notouch" type="text" name="vat">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Total</h5>
                                    </td>
                                    <td>
                                        <input class="total notouch" type="text" name="total">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="book-btn cont" type="submit" name="gcontinue">Continue</button>
                    </div>
                </form>
                <span class="back-top" onclick="window.scrollTo(0, 0)">
                    &uarr;
                </span>
            </main>

            <footer>
                <!-- Footer content (e.g., copyright information) goes here -->
            </footer>

            <script src="./src/index.js"></script>
            <script>
                function validateEmail(email) {
                    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    var res = "";
                    switch (email) {
                        case "gemail":
                            res = document.querySelector(".result.email");
                            break;
                        case "gremail":
                            res = document.querySelector(".result.remail");
                            break;
                    }

                    email = document.getElementById(`${email}`);
                    if (!regex.test(email.value)) {
                        res.textContent = "Invalid email address!";
                        res.style.display = "block";
                        res.style.color = "red";
                        email.value = "";
                    }
                    email == gremail && checkEmails();
                    setTimeout(() => {
                        res.style.display = "none";
                    }, 2000);
                }

                function checkEmails() {
                    var email = document.querySelector("#gemail");
                    var remail = document.querySelector("#gremail");
                    var res = res = document.querySelector(".result.remail");
                    if (remail.value != email.value) {
                        res.textContent = "Emails don't match";
                        res.style.display = "block";
                        res.style.color = "red";
                        remail.value = "";
                    }
                    setTimeout(() => {
                        res.style.display = "none";
                    }, 3000);
                }

                function validateContact() {
                    var contact = document.querySelector("#gcontact");
                    var res = document.querySelector(".result.contact");

                    if (contact.value.length < 11) {
                        res.style.display = "block";
                        res.textContent = "Invalid contact number!";
                        contact.value = "";
                    }
                    setTimeout(() => {
                        res.style.display = "none";
                    }, 2000);
                }

                function validateField(input) {
                    var res = "";
                    switch (input) {
                        case "gname":
                            res = document.querySelector(".result.fname");
                            break;
                        case "glname":
                            res = document.querySelector(".result.lname");
                            break;
                        case "garrive":
                            res = document.querySelector(".result.arrival");
                    }
                    input = document.getElementById(`${input}`);
                    if (input.value.length < 2) {
                        res.style.display = "block";
                        res.textContent = "Invalid input";
                        input.value = "";
                    }
                    setTimeout(() => {
                        res.style.display = "none";
                    }, 2000);
                }
            </script>
            <?php
            $bed_type = $_SESSION['bed-type'];
            $card = $_SESSION['room-type'];
            $day_in = $_SESSION['in-date'];
            $day_out = $_SESSION['out-date'];
            $night = $_SESSION['nights'];
            $price = $_SESSION['price'];
            $tax = $_SESSION['vat'];
            $total = $_SESSION['total'];
            $adult = $_SESSION['adult'];
            $child = $_SESSION['child'];

            echo ("<script>
            document.querySelector('.ph1').style.border = '2px solid red';
            document.querySelector('.ph2').style.border = '2px solid red';
            document.querySelector('.p1').style.backgroundColor = 'gray';
            var title = document.querySelector('title').innerHTML;
            document.querySelector('title').innerHTML = title.replace('Rest Hotel', 'Booking | $bed_type');
            document.querySelector('.smry').value = '$bed_type';
            document.querySelector('.rtype').value = '$card';

            function getSummary() {
                var adtls = document.querySelector('.adult-dtls');
                var cdtls = document.querySelector('.child-dtls');
                var smry_date = document.querySelector('.slct-date');
                var day_in = '$day_in';
                var out_day = '$day_out';
                var vat = document.querySelector('.vat');
                var tax = document.querySelector('.taxx');
                var pr_vat = document.querySelector('.price-vat');
                var total = document.querySelector('.total');
                var price = document.querySelector('.price');
                document.querySelector('.nights').value = '$night';
                document.querySelector('.adlt').value = '$adult';
                document.querySelector('.chld').value = '$child';
                document.querySelector('.ind').value = '$day_in';
                document.querySelector('.outd').value = '$day_out';
            
                vat.style.display = 'block';
                pr_vat.style.display = 'block';
                adtls.textContent = '$adult';
                cdtls.textContent = '$child';
                tax.value = '$tax';
                price.value = $price;
                total.value = '$total';
                smry_date.textContent = new Date(day_in).toDateString() + ' - ' + new Date(out_day).toDateString();
            }
            getSummary();
            </script>");

            if (isset($_POST['gcontinue'])) {
                $_SESSION['in-date'] = $_POST['in-date'];
                $_SESSION['out-date'] = $_POST['out-date'];
                $_SESSION['nights'] = $_POST['nights'];
                $_SESSION['total'] = $_POST['total'];
                $_SESSION['adult'] = $_POST['adult'];
                $_SESSION['bed-type'] = $_POST['bed-type'];
                $_SESSION['room-type'] = $_POST['room-type'];
                $_SESSION['vat'] = $_POST['vat'];
                $_SESSION['gname'] = $_POST['gname'];
                $_SESSION['glname'] = $_POST['glname'];
                $_SESSION['gender'] = $_POST['gender'];
                $_SESSION['gcontact'] = $_POST['gcontact'];
                $_SESSION['gemail'] = $_POST['gemail'];
                $_SESSION['garrive'] = $_POST['garrive'];
                $_SESSION['child'] = $_POST['child'];
                echo ("<script>window.location='confirm.php'</script>");
                exit();
            }
            ?>
        </body>

        </html>
        <?php
    } else {
        echo ("
        <!DOCTYPE html>
        <html lang='en'>

        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='icon' href='./src/images/hotel-logo.png'>
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
            <link rel='preconnect' href='https://fonts.googleapis.com'>
            <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
            <link href='https://fonts.googleapis.com/css2?family=Lato&display=swap' rel='stylesheet'>
            <link rel='stylesheet' href='./src/style.css'>
            <title>Rest Hotel</title>
        </head>
        <body>
        <main>
            <h1 style='font-family: Roboto; color: red;' align='center'>Kindly put all the information needed</h1>
        </main>
        </body>
        ");
    }
} else {
    exit();
}
?>