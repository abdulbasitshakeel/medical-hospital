<?php
include("connect.php");

$id = $_GET['id'];

$sql = "DELETE FROM signup WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: dashboard.php");
?>
