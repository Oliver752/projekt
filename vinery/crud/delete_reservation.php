<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM `taste_signup` WHERE id = $id";
$result = mysqli_query($conn,$sql);
if($result){
    header("Location: reservations.php?msg=Data has been DELETED successfully");
} else {
    echo "Failed:" . mysqli_error($conn);
}
?>