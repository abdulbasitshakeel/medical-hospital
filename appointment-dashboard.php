<?php
include("connect.php");
$result = $conn->query("SELECT * FROM appointment ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Appointments</title>
    <style>
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: #f4f7f9;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 1100px;
  margin: 50px auto;
  background: #ffffff;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  margin-bottom: 25px;
  color: #2a5298;
  font-size: 28px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table thead {
  background-color: #2a5298;
  color: #fff;
}

table th, table td {
  padding: 14px 18px;
  text-align: left;
  border-bottom: 1px solid #e0e0e0;
}

table tr:hover {
  background-color: #f2f6ff;
}

.actions a {
  text-decoration: none;
  color: #2a5298;
  font-weight: bold;
  margin-right: 10px;
  transition: color 0.3s ease;
}

.actions a:hover {
  color: #1e3c72;
}

@media (max-width: 768px) {
  table thead {
    display: none;
  }

  table, table tbody, table tr, table td {
    display: block;
    width: 100%;
  }

  table tr {
    margin-bottom: 15px;
    background-color: #fff;
    padding: 10px;
    border-radius: 6px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }

  table td {
    text-align: right;
    padding-left: 50%;
    position: relative;
  }

  table td::before {
    content: attr(data-label);
    position: absolute;
    left: 18px;
    top: 14px;
    font-weight: bold;
    color: #333;
    text-align: left;
  }
}
</style>
</head>
<body>
<div class="container">
  <h2>All Appointments</h2>
  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th><th>Patient</th><th>Phone</th><th>Doctor</th><th>Email</th><th>Message</th><th>Actions</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['ID'] ?></td>
      <td><?= $row['patient_name'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td><?= $row['doctor_name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['message'] ?></td>
      <td>
        <a href="appointment-edit.php?id=<?= $row['ID'] ?>">Edit</a> |
        <a href="delete-appointment.php?id=<?= $row['ID'] ?>" onclick="return confirm('Cancel this appointment?')">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
    <tbody>
        <tr>
            <td><a href="logout.php" class="btn" style="color:black">Logout</a></td>
        </tr>
      </tbody>
  </table>
</div>
</body>
</html>

