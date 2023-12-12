<?php session_start();
if (isset($_GET['type']) || isset($_POST['continue'])) {
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
            <div class="calendar-pax-container">
                <div class="day-in">
                    <h4>Check-in</h4>
                    <input class="in-day" type="date" value="">
                </div>
                <div class="day-out">
                    <h4>Check-out</h4>
                    <input class="out-day" type="date" value="">
                </div>
                <div class="pax-container">
                    <table>
                        <tbody>
                            <tr>
                                <th>Adult(s)</th>
                                <td>
                                    <select class="slct" required name="adults" id="adult-number">
                                    </select>
                                </td>
                                <th><span>Child(ren)</span><br>9 yrs old & below</th>
                                <td>
                                    <select class="slct" name="children" id="child-number">
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="sumry-pic-container" id="summary">
                <div class="pop-container dtls">
                    <div class="dtls-frame">
                        <div class="dtls-header">
                            <div class="dtls-type"></div>
                            <span class="exit-con" onclick="closeDetails()">&times;</span>
                        </div>
                        <div class=" dtls">
                            Room Amenities:
                            <p class="pop-details"></p>
                            <p class="pop-details2"></p>
                        </div>
                    </div>
                </div>
                <div class="room-img-container">
                    <div class="img-con">
                        <span class="exit-con imgxt" onclick="closeDetails()">&times;</span>
                        <svg class="icon left" onclick="lpic()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                        <img class="booking-pic" onclick="opic()" src="" alt="img">
                        <svg class="icon right" onclick="rpic()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                        </svg>
                    </div>
                    <div class="amenity-container">
                        <h2 class="booking-type"></h2>
                        <p>Room Amenities:</p>
                        <p class="booking-desc"></p>
                        <br>
                        <button class="more-btn" onclick="openDetails()">Read More</button>
                    </div>
                </div>
                <form method="post" action="booking.php" class="sumry-container" name="summary">
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
                    <button class="book-btn cont" name="continue">Continue</button>
                </form>
            </div>
            <span class="back-top" onclick="window.scrollTo(0, 0)">
                &uarr;
            </span>
        </main>

        <footer>
            <!-- Footer content (e.g., copyright information) goes here -->
        </footer>

        <script src="./src/index.js"></script>
        <script>
            var day_in = document.querySelector(".in-day");
            var date = new Date();
            var cday = date.getDate();
            var nday = date.getDate() + 1;
            var year = date.getFullYear();
            var month = date.getUTCMonth() + 1;
            month.toString().length > 1 ? month : month = "0" + month;
            cday.toString().length > 1 ? cday : cday = "0" + cday;

            var day = year + "-" + month + "-" + cday;
            var nxtday = () => {
                var nxt = year + "-" + month + "-" + nday;
                let dateObj = new Date(nxt);
                let d = dateObj.getDate();
                let m = dateObj.getMonth() + 1;
                let yr = dateObj.getFullYear();
                m.toString().length > 1 ? m : m = "0" + m;
                d.toString().length > 1 ? d : d = "0" + d;
                var nxttday = yr + "-" + m + "-" + d;
                return nxttday;
            }
            var out_day = document.querySelector(".out-day");
            var smry_date = document.querySelector(".slct-date");
            day_in.value = day;
            out_day.value = nxtday();
            day_in.min = day;
            out_day.min = day_in.value;

            var hourtwfr = date.getHours();
            var ampm = hourtwfr > 12 ? "PM" : "AM";
            var minute = date.getMinutes();
            var hour = hourtwfr % 12;
            hour == 0 ? hour = 12 : hour;
            minute.toString().length < 2 ? minute = "0" + minute : minute;

            var time = hour + ":" + minute + " " + ampm;

            window.addEventListener("change", () => {
                var out = document.querySelector(".out-day");
                out.min = day_in.value;
                document.querySelector(".outd").value = out_day.value;
                document.querySelector(".ind").value = day_in.value;
                smry_date.textContent = new Date(day_in.value).toDateString() + " - " + new Date(out_day.value).toDateString();
                getSummary();
                getTotal();
            })

            function getTotal() {
                var price_tag = document.querySelector(".price");
                var total_tag = document.querySelector(".total");
                var vat_tag = document.querySelector(".taxx");
                var night = document.querySelector(".nights");
                var tax = night.value * price_tag.value * 0.12;
                vat_tag.value = tax;
                total_tag.value = parseInt(price_tag.value) * parseInt(night.value) + tax;
            }
        </script>
        <?php
        if (isset($_POST['continue'])) {
            $_SESSION['in-date'] = $_POST['in-date'];
            $_SESSION['out-date'] = $_POST['out-date'];
            $_SESSION['nights'] = $_POST['nights'];
            $_SESSION['price'] = $_POST['price'];
            $_SESSION['vat'] = $_POST['vat'];
            $_SESSION['total'] = $_POST['total'];
            $_SESSION['adult'] = $_POST['adult'];
            $_SESSION['bed-type'] = $_POST['bed-type'];
            $_SESSION['room-type'] = $_POST['room-type'];
            $_SESSION['child'] = $_POST['child'];
            echo ("<script>window.location='guest.php'</script>");
            exit();
        }
        ?>
    </body>

    </html>
    <?php
    $bed_type = $_GET['type'];
    $card = $_GET['card'];
    $json_data = file_get_contents('./src/data.json');
    if ($json_data) {
        $data = json_decode($json_data);
        $pic_src = $data->$card[0]->images->headerpic;
        $pic1 = $data->$card[0]->images->picsrc;
        $pic2 = $data->$card[0]->images->picsrc2;
        $adult = $data->$card[0]->pax->adult;
        $child = $data->$card[0]->pax->child;
        $service = $data->$card[0]->services->data;
        $amenity = $data->$card[0]->amenities->data;
        $price = $data->$card[0]->price->room;

        echo ("<script>
        var pics = [];
        var pstate = 0;
        var pic_len = pics.length;
        window.onload = () => {
            pics.push('$pic_src');
            pics.push('$pic1');
            pics.push('$pic2');
            document.querySelector('.booking-pic').src = pics[pstate];
            pic_len = pics.length - 1;
        };
        document.querySelector('.booking-desc').innerHTML = '$service . . .';
        document.querySelector('.pop-details').innerHTML = '$service<br>';
        document.querySelector('.pop-details2').innerHTML = '$amenity';
        var adult_slct = document.querySelector('#adult-number');
        var child_slct = document.querySelector('#child-number');
        for(let i = 0; i<=$adult; i++){
            var opt_tag = document.createElement('option');
            opt_tag.value = i;
            opt_tag.append(i);
            adult_slct.appendChild(opt_tag);
        }
        for(let i = 0; i<=$child; i++){
            var opt_tag = document.createElement('option');
            opt_tag.value = i;
            opt_tag.append(i);
            child_slct.appendChild(opt_tag);
        }
        </script>");
    } else {
        echo ("An error occur. Failed fetching data.");
    }

    echo ("<script>
    document.querySelector('.ph1').style.border = '2px solid red';
    var title = document.querySelector('title').innerHTML;
    document.querySelector('title').innerHTML = title.replace('Rest Hotel', 'Booking | $bed_type');
    document.querySelector('.booking-type').textContent = '$bed_type';
    document.querySelector('.dtls-type').textContent = '$bed_type';
    document.querySelector('.smry').value = '$bed_type';
    document.querySelector('.rtype').value = '$card';

    function opic(){
        var con = document.querySelector('.pop-container');
        var dtls = document.querySelector('.dtls-frame');
        var pic = document.querySelector('.img-con');
        var ext = document.querySelector('.imgxt');

        con.style.display = 'flex';
        ext.style.display = 'grid';
        dtls.style.display = 'none';
        pic.classList.add('pops');
        ext.onclick = () =>{
            pic.classList.remove('pops');
            ext.style.display = 'none';
            con.style.display = 'none';
        };
    };

    function rpic() {
        pstate += 1;
        document.querySelector('.booking-pic').src = pics[pstate];
        document.querySelector('.icon.left').style.pointerEvents = 'all';
        checkLState();
        checkRState();
    }
    
    function lpic() {
        pstate -= 1;
        document.querySelector('.booking-pic').src = pics[pstate];
        checkLState();
        checkRState();
    }

    function checkLState() {
        var lft = document.querySelector('.icon.left');

        if (pstate == 0) {
            lft.style.pointerEvents = 'none';
            lft.style.opacity = '30%';
        }
        else {
            lft.style.pointerEvents = 'all';
            lft.style.opacity = '100%';
        }
    }

    function checkRState() {
        var rgt = document.querySelector('.icon.right');

        if (pstate == pic_len) {
            rgt.style.pointerEvents = 'none';
            rgt.style.opacity = '30%';
        }
        else {
            rgt.style.pointerEvents = 'all';
            rgt.style.opacity = '100%';
        }
    }

    function getSummary() {
        var adult = document.querySelector('#adult-number').value;
        var child = document.querySelector('#child-number').value;
        var adtls = document.querySelector('.adult-dtls');
        var cdtls = document.querySelector('.child-dtls');
        var vat = document.querySelector('.vat');
        var pr_vat = document.querySelector('.price-vat');
        var price = document.querySelector('.price');
        var day_val = new Date(out_day.value) - new Date(day_in.value);
        var nights = Math.floor(day_val / (1000 * 60 * 60 * 24));
        document.querySelector('.nights').value = nights;
        document.querySelector('.adlt').value = adult;
        document.querySelector('.chld').value = child;
    
        
        adtls.textContent = adult;
        cdtls.textContent = child;
        vat.style.display = 'block';
        pr_vat.style.display = 'block';
        price.value = $price;
    }
    </script>");
}
?>