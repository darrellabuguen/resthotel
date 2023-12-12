<?php
session_start();

include 'connect.php';
$check_in = $_POST['check-in'];
$check_out = $_POST['check-out'];
$night = $_POST['night'];
$time_arrive = $_POST['time-arrive'];
$gname = $_POST['gname'];
$gender = $_POST['gender'];
$gcontact = $_POST['gcontact'];
$gemail = $_POST['gemail'];
$bed_type = $_POST['bed'];
$guest = $_POST['guest'];
$total = $_POST['total'];
$_SESSION['gname'] = $_POST['gname'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['gcontact'] = $_POST['gcontact'];
$_SESSION['gemail'] = $_POST['gemail'];
$_SESSION['time-arrive'] = $_POST['time-arrive'];

if (isset($_POST['confirm'])) {
    if (
        isset($check_in, $check_out, $night, $total, $guest, $bed_type, $gname, $gender, $gcontact, $gemail, $time_arrive, $_SESSION['gname'], $_SESSION['gender'], $_SESSION['gcontact'], $_SESSION['gemail'], $_SESSION['time-arrive']) &&
        $check_in && $check_out && $night && $total && $guest && $bed_type && $gname && $gender && $gcontact && $gemail && $time_arrive !== ""
    ) {
        $id = "";
        $inserted = mysqli_query($connection, "INSERT INTO bookings(check_in,check_out,night,time_arrive,guest_name,gender,contact,email,bed_type,guest_number,total_price) 
        VALUES('$check_in','$check_out',$night,'$time_arrive','$gname','$gender','$gcontact','$gemail','$bed_type',$guest,'$total');");

        $get = mysqli_query($connection, "SELECT booking_id FROM bookings WHERE contact = '$gcontact' & email = '$gemail'");
        while ($row = mysqli_fetch_assoc($get)) {
            $id = $row['booking_id'];
            $_SESSION['id'] = $row['booking_id'];
        }

        if ($inserted && $get) {
            header("Location: success.php");
            exit();
        } else {
            mysqli_query($connection, "DELETE FROM users WHERE booking_id=$id");
            echo ("Error occur! Fails to book your reservation");
        }
    } else {
        echo ("Not Fetched");
    }
} else {
    exit();
}
?>