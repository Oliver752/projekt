<?php

include "db_conn.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `form_submission`(`name`,`email`,`message`) VALUES ('$name','$email','$message')";
    if (isset($conn)) {
        $result = mysqli_query($conn, $sql);
    }

    if ($result) {
        echo '<script>alert("Your message has been sent successfully!"); window.location.href = "index.php";</script>';
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>