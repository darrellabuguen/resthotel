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
    <title>Rest Hotel | Rooms</title>
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
        <div class="room-name"></div>
    </header>

    <main>
        <section class="gtk-h1">
            <div class="h1-con gtk">
                <p class="roomgtk">OUR ACCOMMODATIONS</p>
            </div>
            <div class="h1-con">
                <h1 class="kmabt">
                    Rooms
                </h1>
            </div>
        </section>
        <div class="bookbtn-container">
            <button class="book-btn resrv" name="booking">MAKE RESERVATION</button>
        </div>

        <div class="description-container">
            <h3>DESCRIPTION</h3>
            <p class="room-description">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Nam deleniti assumenda quidem aspernatur sequi pariatur
                impedit odit ducimus earum reprehenderit iste tempore quo
                atque mollitia expedita, autem ut. Labore, quos!
            </p>
        </div>
        <div class="img-title">
            <h3>IMAGES</h3>
        </div>
        <div class="pop-container">
            <div class="pop-frame">
                <span class="exit-con">&times;</span>
                <div class="pop-con">
                    <img class="pop-img" src="" alt="img">
                </div>
            </div>
        </div>
        <div class="img-container">
            <div class="img1">
                <img class="pic1" src="" alt="img">
            </div>
            <div class="img2">
                <img class="pic2" src="" alt="img">
            </div>
        </div>
        <div class="perks-container">
            <div class="amenities">
                <h3>AMENITIES</h3>
                <p class="descs amnty"></p>
            </div>
            <div class="services">
                <h3>SERVICES</h3>
                <p class="descs svcs"></p>
            </div>
        </div>
        <div class="terms-container">
            <h3 align="center">TERMS AND CONDITIONS</h3>
            <div class="gap"></div>
            <ul>
                <li>
                    <b>Check-In and Check-Out Times:</b>
                    <br> Guests are required to adhere to the hotel's designated
                    check-in and check-out times. Early check-in or late check-out requests are subject to availability
                    and may incur additional charges.
                </li>
                <br>
                <li>
                    <b>Payment and Cancellation Policy:</b>
                    <br> Guests must provide at least 6 hours notice for cancellations to avoid charges
                    equivalent to one night's stay. Full payment is due through service desk before check-in, and any
                    incidental charges will be settled at check-out.
                </li>
                <br>
                <li>
                    <b>Property Use and Behavior:</b>
                    <br> Guests are expected to conduct themselves in a respectful
                    and responsible manner during their stay. Any disruptive or unlawful behavior may result in
                    immediate eviction without a refund. The hotel reserves the right to charge for damages caused by
                    guests.
                </li>
                <br>
                <li>
                    <b>Smoking Policy:</b>
                    <br> Smoking is strictly prohibited in all indoor areas of the hotel. A cleaning fee will be applied
                    if evidence of smoking is found in guest rooms.
                </li>
                <br>
                <li>
                    <b>Privacy and Data Protection:</b>
                    <br> The hotel respects guest privacy and complies with data protection regulations. Guest
                    information collected during the reservation process will only be used for legitimate hotel
                    purposes. Guests can request access to their personal data and may opt out of any promotional
                    communication.
                    These terms and conditions are subject to change, and guests are advised to review them regularly
                    for any updates.
                </li>
            </ul>
        </div>
        <div class="gap"></div>
        <div class="gap"></div>
        <div class="other"></div>
        <form class="card-container rms-con" method="post" action="view-action.php" name="rooms">
            <div class="card room1 rms">
                <div class="pic-container rms-pic">
                    <img class="room-pic" src="./src/images/rooms/room1/room1-pic.jpg" alt="Card Image">
                </div>
                <div class="card-body rms-body">
                    <h3 class="card-title">Junior Suite</h3>
                    <p class="card-text">Ideal for 1 Adult - 200 SQ FT</p>
                    <p class="rms-details1 rmdtls"></p>
                    <p class="rms-amenities1"></p>
                    <button class="details-btn" name="view1">View Details</button>
                </div>
            </div>
            <div class="card room2 rms">
                <div class="pic-container rms-pic">
                    <img class="room-pic" src="./src/images/rooms/room2/room2-pic.jpg" alt="Card Image">
                </div>
                <div class="card-body rms-body">
                    <h3 class="card-title">Deluxe Queen</h3>
                    <p class="card-text">Ideal for 2 Adults - 250 SQ FT</p>
                    <p class="rms-details2 rmdtls"></p>
                    <p class="rms-amenities2"></p>
                    <button class="details-btn" name="view2">View Details</button>
                </div>
            </div>
            <div class="card room3 rms">
                <div class="pic-container rms-pic">
                    <img class="room-pic" src="./src/images/rooms/double-bed/double-bed3.jpg" alt="Card Image">
                </div>
                <div class="card-body rms-body">
                    <h3 class="card-title">Superior Twin</h3>
                    <p class="card-text">Ideal for 4 Adults - 250 SQ FT</p>
                    <p class="rms-details3 rmdtls"></p>
                    <p class="rms-amenities3"></p>
                    <button class="details-btn" name="view3">View Details</button>
                </div>
            </div>
            <div class="card room4 rms">
                <div class="pic-container rms-pic">
                    <img class="room-pic" src="./src/images/rooms/super-king-bed/super-king-bed.jpg" alt="Card Image">
                </div>
                <div class="card-body rms-body">
                    <h3 class="card-title">Superior King</h3>
                    <p class="card-text">Ideal for 2 Adults - 250 SQ FT</p>
                    <p class="rms-details4 rmdtls"></p>
                    <p class="rms-amenities4"></p>
                    <button class="details-btn" name="view4">View Details</button>
                </div>
            </div>
            <div class="card room5 rms">
                <div class="pic-container rms-pic">
                    <img class="room-pic" src="./src/images/rooms/deluxe-twin/deluxetwin-3.jpg" alt="Card Image">
                </div>
                <div class="card-body rms-body">
                    <h3 class="card-title">Deluxe Twin</h3>
                    <p class="card-text">Ideal for 2 Adults - 200 SQ FT</p>
                    <p class="rms-details5 rmdtls"></p>
                    <p class="rms-amenities5"></p>
                    <button class="details-btn" name="view5">View Details</button>
                </div>
            </div>
        </form>
        <script>
            function setFlexDir() {
                const r2 = document.querySelector('.room2');
                const r4 = document.querySelector('.room4');
                var scwidth = window.innerWidth;
                scwidth <= 1000 ? r2.style.flexDirection = 'column' : r2.style.flexDirection = 'unset';
                scwidth <= 1000 ? r4.style.flexDirection = 'column' : r4.style.flexDirection = 'unset';
            }
        </script>
        <?php
        if (isset($_GET['room'])) {
            $jsonData = file_get_contents('./src/data.json');
            $room_name = $_GET['room'];
            $card = $_GET['card'];
            $changes = "<script>
            document.querySelector('.img-title').style.display = 'block';
            document.querySelector('.perks-container').style.display = 'grid';
            document.querySelector('.bookbtn-container').style.display = 'flex';
            document.querySelector('.room-name').style.display = 'flex';
            document.querySelector('.img-container').style.display = 'flex';
            document.querySelector('.description-container').style.display = 'block';
            document.querySelector('.terms-container').style.display = 'block';
            document.querySelector('.gtk-h1').style.display = 'none';
            
            var title = document.querySelector('title').innerHTML;
            var other = document.querySelector('.other');
            var par_element = document.createElement('h3');
            var card = document.querySelector('.$card');
            var head_name = document.querySelector('.room-name');
            var header = document.querySelector('header');
            var par = document.createElement('p');

            card.style.display = 'none';
            document.querySelector('title').innerHTML = title.replace('Rooms', '$room_name');
            par_element.textContent = 'OTHER ROOMS';
            other.appendChild(par_element);
            par.textContent = '$room_name';
            head_name.appendChild(par);
            setFlexDir();
            window.addEventListener('resize', setFlexDir);
            </script>";

            // switch ($room_name) {
            //     case "Junior Suite":
            //     case "Deluxe Queen":
            //     case "Superior Twin":
            //     case "Superior King":
            //     case "Deluxe Twin":
            //         echo $changes;
            //         break;
            // }
        
            echo $changes;

            if ($jsonData) {
                $data = json_decode($jsonData);
                $descript = $data->$card[0]->description;
                $header_source = $data->$card[0]->images->headerpic;
                $pic1 = $data->$card[0]->images->picsrc;
                $pic2 = $data->$card[0]->images->picsrc2;
                $services = $data->$card[0]->services->data;
                $amenities = $data->$card[0]->amenities->data;

                echo ("<script>
                var res = document.querySelector('.resrv');
                res.addEventListener('click', ()=>{window.location ='booking.php?type=$room_name&card=$card'});
                document.querySelector('.room-description').textContent = '$descript';
                document.querySelector('.pic1').src = '$pic1';
                document.querySelector('.pic2').src = '$pic2';
                document.querySelector('.svcs').innerHTML = '$services';
                document.querySelector('.amnty').innerHTML = '$amenities';
                header.style.height = '80vh';
                header.style.background = \"url('$header_source')\";
                header.style.backgroundSize = 'cover';
                header.style.backgroundPosition = 'center';
                </script>");
            }
        }
        ?>

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
    <!-- End of footer -->
    <script>
        var exit = document.querySelector(".exit-con");
        var img1_pop = document.querySelector(".pic1");
        var img2_pop = document.querySelector(".pic2");
        var pop_img = document.querySelector(".pop-img");

        exit.addEventListener("click", () => {
            document.querySelector(".pop-container").style.display = "none";
        })

        img1_pop.onclick = () => {
            var src = img1_pop.getAttribute("src");
            pop_img.src = src;
            document.querySelector(".pop-container").style.display = "flex";
        }

        img2_pop.onclick = () => {
            var src = img2_pop.getAttribute("src");
            pop_img.src = src;
            document.querySelector(".pop-container").style.display = "flex";
        }
    </script>
    <script src="./src/index.js"></script>
    <script>
        function getDetails() {
            const jsonUrl = './src/data.json';

            fetch(jsonUrl)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    document.querySelector(".rms-details1").innerHTML = data.room1[0].description;
                    document.querySelector(".rms-details2").innerHTML = data.room2[0].description;
                    document.querySelector(".rms-details3").innerHTML = data.room3[0].description;
                    document.querySelector(".rms-details4").innerHTML = data.room4[0].description;
                    document.querySelector(".rms-details5").innerHTML = data.room5[0].description;
                    document.querySelector(".rms-amenities1").innerHTML = data.room1[0].services.data + " " + ". . .";
                    document.querySelector(".rms-amenities2").innerHTML = data.room2[0].services.data + " " + ". . .";
                    document.querySelector(".rms-amenities3").innerHTML = data.room3[0].services.data + " " + ". . .";
                    document.querySelector(".rms-amenities4").innerHTML = data.room4[0].services.data + " " + ". . .";
                    document.querySelector(".rms-amenities5").innerHTML = data.room5[0].services.data + " " + ". . .";
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
        setTimeout(getDetails, 300);
    </script>
</body>

</html>