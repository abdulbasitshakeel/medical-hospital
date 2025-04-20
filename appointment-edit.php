<?php
include("connect.php");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM appointment WHERE id = $id");
$row = $result->fetch_assoc();
?>

<form action="appointment-edit.php" method="POST">
  <input type="hidden" name="id" value="<?= $row['ID'] ?>" />
  Patient Name: <input type="text" name="name" value="<?= $row['patient_name'] ?>" /><br>
  Phone: <input type="text" name="phone" value="<?= $row['phone'] ?>" /><br>
  Doctor: <input type="text" name="doctor" value="<?= $row['doctor_name'] ?>" /><br>
  Email: <input type="email" name="email" value="<?= $row['email'] ?>" /><br>
  Message: <textarea name="message"><?= $row['message'] ?></textarea><br>
  <button type="submit">Update Appointment</button>
</form>
