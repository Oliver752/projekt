<?php

include "db_conn.php";

if (isset($_POST['submit'])) {
    $reservationname = $_POST['reservationname'];
    $reservationemail = $_POST['reservationemail'];
    $persons = $_POST['persons'];
    $timedate = $_POST['timedate'];

    $sql = "INSERT INTO `taste_signup`(`id`,`name`,`email`,`count`,`date`) VALUES (NULL,'$reservationname','$reservationemail','$persons','$timedate')";

    if (isset($conn)) {
        $result = mysqli_query($conn, $sql);
    }

    if ($result) {
        header("Location: reservations.php?msg=New reservation has been created successfully");
        //echo '<script>alert("Your reservation has been sent successfully!"); window.location.href = "reservations.php";</script>';
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>