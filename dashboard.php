
<?php include("connect.php"); ?>
<?php
$sql = "SELECT * FROM signup ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Users</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
   <style>
    /* Reset & Base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Segoe UI', sans-serif;
}

body {
  background: linear-gradient(135deg, #1e3c72, #2a5298);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding: 40px 20px;
  color: #333;
}

/* Container */
.container {
  width: 100%;
  max-width: 1000px;
  background: #fff;
  padding: 30px 40px;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

/* Headings */
h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #2a5298;
}

/* Table Styling */
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 12px 15px;
  border-bottom: 1px solid #ddd;
  text-align: left;
}

table th {
  background-color: #2a5298;
  color: #fff;
}

table tr:hover {
  background-color: #f5f5f5;
}

/* Buttons */
a.btn {
  padding: 8px 15px;
  text-decoration: none;
  color: #fff;
  border-radius: 5px;
  margin-right: 8px;
  font-size: 14px;
  transition: 0.3s ease;
}

a.edit {
  background-color: #4caf50;
}

a.delete {
  background-color: #f44336;
}

a.edit:hover {
  background-color: #45a049;
}

a.delete:hover {
  background-color: #d32f2f;
}

/* Form styling (optional) */
form {
  display: flex;
  flex-direction: column;
}

form input,
form select,
form button {
  margin-bottom: 15px;
  padding: 10px;
  font-size: 16px;
  border-radius: 6px;
  border: 1px solid #ccc;
}

form button {
  background-color: #2a5298;
  color: #fff;
  cursor: pointer;
  border: none;
  transition: 0.3s ease;
}

form button:hover {
  background-color: #1e3c72;
}

   </style>

</head>
<body>
  <div class="container">
    <h2>Admin Management</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Created At</th><th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row['name'] ?></td>
          <td><?= $row['email'] ?></td>
          <td><?= $row['role'] ?></td>
          <td><?= $row['created_at'] ?></td>
          <td>
            <a class="btn edit" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
            <a class="btn delete" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
          </td>
          <!-- <td> <a href="logout.php" class="btn">Logout</a></td> -->
        </tr>
        <tr>
        </tr>
        <?php endwhile; ?>
      </tbody>
      <tbody>
        <tr>
            <td><a href="logout.php" class="btn" style="color:black">Logout</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
