<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: welcome.php");
    exit();
}
?>
<!-- Rest of your HTML and PHP -->

