<?php
include ("connect.php");

?>

<?php
// Step 3: Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Step 4: Collect and sanitize form data
    $name = $_POST['fullname'] ?? '';
    $email = $_POST['email'] ?? '';
    $role = $_POST['role'] ?? '';
    $password = password_hash($_POST['password'] ?? '', PASSWORD_DEFAULT);
    $created_at = date("Y-m-d H:i:s");

    // Step 5: Insert using prepared statement
    $sql = "INSERT INTO signup (name, email, password, role, created_at) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $name, $email, $password, $role, $created_at);

        if ($stmt->execute()){
            header("Location: welcome.php");
        } else {
            echo "<script>alert('Unsuccess : Please Try It')</script>" . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "❌ Prepare failed: " . $conn->error;
    }
}

// Step 6: Always close connection outside if block
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: linear-gradient(to right, #2a5298, #1e3c72);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .register-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 12px;
      width: 100%;
      max-width: 450px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .register-container h2 {
      margin-bottom: 25px;
      text-align: center;
      color: #2a5298;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      color: #333;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .register-btn {
      width: 100%;
      background-color: #2a5298;
      color: #fff;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .register-btn:hover {
      background-color: #1e3c72;
    }

    .login-link {
      text-align: center;
      margin-top: 15px;
      color: #2a5298;
      text-decoration: none;
      display: block;
      font-size: 14px;
    }

    .login-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-container">
    <h2>Create Account</h2>
    <form action="registration.php" method="POST">
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter a fullname" required />
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter a Email" required />
      </div>

      <div class="form-group">
        <label for="password">Create Password</label>
        <input type="password" id="password" name="password" placeholder="••••••••" required />
      </div>

      <div class="form-group">
        <label for="role">Register as</label>
        <select id="role" name="role" required>
          <option value="" disabled selected>Select your role</option>
          <option value="doctor">Doctor</option>
          <option value="patient">Patient</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <button type="submit" name="submit" class="register-btn">Register</button>
    </form>

    <a href="welcome.php" class="login-link">Already have an account? Login here</a>
  </div>
</body>
</html>
