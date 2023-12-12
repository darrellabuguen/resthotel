<?php
include 'connect.php';
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
    <title>Rest Hotel | Verify</title>
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
        <div class="head-verify" style="width: 70%; margin: auto; text-align: center;">
            <h1>Enter your booking number or the contact number that you entered when you verified your booking.</h1>
        </div>
        <div class="gap"></div>
        <form action="verify.php" id="verify-form" method="post" name="verify-form" style="width: 70%; margin: auto;">
            <input class="book-num ginput" type="text" id="book-num" required onchange="validateField()" name="book-num"
                style="text-align: center;">
            <div class="gap"></div>
            <div align="center">
                <button class="book-btn confirm verify" type="submit" name="verify">Verify</button>
            </div>
        </form>
        <div class="sumry-container cpage hidden" name="summary">
            <div class="conf-info" align="center">
                <h2 class="smry-header" align="center">Booking Overview</h2>
                <table align="center">
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
                                    <label for="gid">Booking number : </label>
                                </td>
                                <td>
                                    <input class="notouch conf gid" id="gid" type="text" name="gid">
                                </td>
                            </tr>
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
                                    <label for="total"><b>Total :</b></label>
                                </td>
                                <td>
                                    <input class="notouch conf total" id="total" type="text" name="total"
                                        style="font-weight: bold">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div align="center">
                    <a class="book-btn" href="okay.php" style="width: 150px">OK</a>
                </div>
            </div>
        </div>
    </main>

    <script src="./src/index.js"></script>
    <script>
        function validateField() {
            var input = document.getElementById(`book-num`);
            if (input.value.length < 4) {
                alert("Please input the correct booking number to verify");
                input.value = "";
            }
        }
    </script>
    <?php
    if (isset($_POST['book-num']) && $_POST['book-num'] !== "") {
        $input = $_POST['book-num'];
        $data = mysqli_query($connection, "SELECT * FROM bookings WHERE booking_id='$input' OR contact='$input'");

        if ($id_data = mysqli_fetch_assoc($data)) {
            $db_id = $id_data['booking_id'];
            $db_chk_in = $id_data['check_in'];
            $db_chk_out = $id_data['check_out'];
            $db_night = $id_data['night'];
            $db_time = $id_data['time_arrive'];
            $db_name = $id_data['guest_name'];
            $db_gender = $id_data['gender'];
            $db_contact = $id_data['contact'];
            $db_email = $id_data['email'];
            $db_bed = $id_data['bed_type'];
            $db_guest = $id_data['guest_number'];
            $db_total = $id_data['total_price'];

            echo ("<script>
            document.querySelector('.sumry-container').style.display = 'block';
            document.querySelector('#verify-form').style.display = 'none';
            document.querySelector('.head-verify').style.display = 'none';
            document.querySelector('.ind').value = '$db_chk_in';
            document.querySelector('.outd').value = '$db_chk_out';
            document.querySelector('.night').value = '$db_night';
            document.querySelector('.garrive').value = '$db_time';
            document.querySelector('.gid').value = '$db_id';
            document.querySelector('.gname').value = '$db_name';
            document.querySelector('.gender').value = '$db_gender';
            document.querySelector('.gcontact').value = '$db_contact';
            document.querySelector('.gemail').value = '$db_email';
            document.querySelector('#bed').value = '$db_bed';
            document.querySelector('.guest').value = '$db_guest';
            document.querySelector('.total').value = '$db_total';
            </script>");
        } else {
            echo ("
            <h1 align='center' style='font-family: Roboto'>No booking record found!</h1>
            <script>
            document.querySelector('#verify-form').style.display = 'none';
            document.querySelector('.head-verify').style.display = 'none';
            </script>");
        }
    }
    ?>
</body>

</html>