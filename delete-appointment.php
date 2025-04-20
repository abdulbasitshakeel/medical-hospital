<?php
include("connect.php");

$id = $_GET['id'];
$conn->query("DELETE FROM appointment WHERE id = $id");
header("Location: appointment-dashboard.php");
?>
