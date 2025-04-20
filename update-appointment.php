<?php
include("connect.php");

$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$doctor = $_POST['doctor'];
$email = $_POST['email'];
$message = $_POST['message'];
// $date = date("Y-m-d H-i-s");

$sql = "UPDATE appointment SET patient_name=?, phone=?, doctor_name=?, email=?, message=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssi", $name, $phone, $doctor, $email, $message, $id);

if ($stmt->execute()) {
    header("Location: appoitment-dashboard.php");
} else {
    echo "❌ Failed to update appointment.";
}
?>
