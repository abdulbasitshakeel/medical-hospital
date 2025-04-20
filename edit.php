<?php
include("connect.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$role = $_POST['role'];

$sql = "UPDATE signup SET name=?, email=?, role=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $name, $email, $role, $id);

if ($stmt->execute()) {
    header("Location: dashboard.php");
} else {
    echo "Update failed.";
}
?>
