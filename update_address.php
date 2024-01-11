<?php
session_start();

if (isset($_SESSION['user_id'])) {
    include('db_connect.php');
    $user_id = $_SESSION['user_id'];
    $name = $_POST['name'];
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    // Update user's delivery address in the database
    $query = "UPDATE user SET user_address='$address' WHERE user_id='$user_id'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>window.alert('Address updated successfully');</script>";
        header("Location: cart.php");
        exit;
    } else {
        echo "Error updating address: " . mysqli_error($conn);
    }
} else {
    // If user is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}
?>
