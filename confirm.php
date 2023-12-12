<?php
session_start();

if (
    isset($_SESSION['in-date'], $_SESSION['out-date'], $_SESSION['nights'], $_SESSION['total'], $_SESSION['adult'], $_SESSION['bed-type'], $_SESSION['room-type'], $_SESSION['vat'], $_SESSION['gname'], $_SESSION['glname'], $_SESSION['gender'], $_SESSION['gcontact'], $_SESSION['gemail'], $_SESSION['garrive'])
) {
    $day_in = $_SESSION['in-date'];
    $day_out = $_SESSION['out-date'];
    $night = $_SESSION['nights'];
    $total = $_SESSION['total'];
    $adult = $_SESSION['adult'];
    $bed_type = $_SESSION['bed-type'];
    $card = $_SESSION['room-type'];
    $tax = $_SESSION['vat'];
    $gname = $_SESSION['gname'];
    $glname = $_SESSION['glname'];
    $gender = $_SESSION['gender'];
    $gcontact = $_SESSION['gcontact'];
    $gemail = $_SESSION['gemail'];
    $garrive = $_SESSION['garrive'];
    $child = $_SESSION['child'];
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
            <form method="post" action="book.php" class="sumry-container cpage" name="summary">
                <div class="conf-info" align="center">
                    <h2 class="smry-header" align="center">Booking Overview</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td class="conf-td">
                                    <label for="day-in">Check-in : </label>
                                    <input class="notouch conf ind" id="day-in" type="text" name="check-in">
                                </td>
                                <td class="conf-td">
                                    <label for="day-out">Check-out : </label>
                                    <input class="notouch conf outd" id="day-out" type="text" name="check-out">
                                </td>
                                <td class="conf-td">
                                    <label for="night">Night(s) : </label>
                                    <input class="notouch conf night" id="night" type="text" name="night">
                                </td>
                                <td class="conf-td">
                                    <label for="garrive">Arrival : </label>
                                    <input class="notouch conf garrive" id="garrive" type="text" name="time-arrive">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="flex conf">
                        <table class="tbl-info">
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="gname">Guest name : </label>
                                    </td>
                                    <td>
                                        <input class="notouch conf gname" id="gname" type="text" name="gname">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="gender">Gender : </label>
                                    </td>
                                    <td>
                                        <input class="notouch conf gender" id="gender" type="text" name="gender">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="gcontact">Contact number : </label>
                                    </td>
                                    <td>
                                        <input class="notouch conf gcontact" id="gcontact" type="text" name="gcontact">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="gemail">Email : </label>
                                    </td>
                                    <td>
                                        <input class="notouch conf gemail" id="gemail" type="text" name="gemail">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="bed">Room type : </label>
                                    </td>
                                    <td>
                                        <input class="notouch conf conf-header" id="bed" type="text" name="bed">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="guest">Guest(s) : </label>
                                    </td>
                                    <td>
                                        <input class="notouch conf guest" id="guest" type="text" name="guest">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="price">Price : </label>
                                    </td>
                                    <td>
                                        <input class="notouch conf price" id="price" type="text" name="price">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="taxx">VAT %12 : </label>
                                    </td>
                                    <td>
                                        <input class="notouch conf taxx" id="taxx" type="text" name="taxx">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="total"><b>Total :</b></label>
                                    </td>
                                    <td>
                                        <input class="notouch conf total" id="total" type="text" name="total"
                                            style="font-weight: bold">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="img-con conf">
                            <img src="" alt="img" class="booking-pic">
                        </div>
                    </div>
                    <div align="center">
                        <button class="book-btn confirm" type="submit" name="confirm">Confirm</button>
                    </div>
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
        <?php
        $booking_src = "";
        $price = "";
        $json_data = file_get_contents("./src/data.json");
        if ($json_data) {
            $data = json_decode($json_data);
            $booking_src = $data->$card[0]->images->headerpic;
            $price = $data->$card[0]->price->room;
        }
        echo ("<script>
            document.querySelector('.ph1').style.border = '2px solid red';
            document.querySelector('.ph2').style.border = '2px solid red';
            document.querySelector('.ph3').style.border = '2px solid red';
            document.querySelector('.p1').style.backgroundColor = 'gray';
            document.querySelector('.p2').style.backgroundColor = 'gray';
            var title = document.querySelector('title').innerHTML;
            document.querySelector('title').innerHTML = title.replace('Rest Hotel', 'Booking | $bed_type');
            document.querySelector('.booking-pic').src = '$booking_src';

            function getSummary() {
                var total = document.querySelector('.total');
                var price = document.querySelector('.price');
                var time = document.querySelector('.garrive');
                var name = document.querySelector('.gname');
                document.querySelector('.guest').value = $adult+$child;
                document.querySelector('.gcontact').value = '$gcontact';
                document.querySelector('.gemail').value = '$gemail';
                document.querySelector('.conf-header').value = '$bed_type';
                document.querySelector('.night').value = $night;
                document.querySelector('.ind').value = '$day_in';
                document.querySelector('.outd').value = '$day_out';
                document.querySelector('.taxx').value = 'P '+$tax;
                document.querySelector('.gender').value = '$gender';
        
                name.value = '$gname'+' '+'$glname';
                price.value = 'P '+$price;
                total.value = 'P '+$total;
                time.value = '$garrive';
            }
            getSummary();
            </script>");
        ?>
        <script>
            function converttoTwelve() {
                var time = document.querySelector(".garrive");
                time = time.value.split(":");
                var hour = time[0] % 12;
                hour == 0 ? hour = 12 : hour;
                hour.toString().length < 2 ? hour = "0" + hour : hour;
                var minute = time[1];
                minute.toString().length < 2 ? minute = "0" + minute : minute;
                var ampm = time[0] > 12 ? "PM" : "AM";
                var twlvhr = hour + ":" + minute + " " + ampm;

                document.querySelector(".garrive").value = twlvhr;
            }
            converttoTwelve();
        </script>
    </body>

    </html>
    <?php
} else {
    exit();
}
?>