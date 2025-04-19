<?php
session_start(); // Start the session

// Step 1: Database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "medical"; // Replace with your actual database name

$conn = mysqli_connect($host, $user, $password, $dbname);

// Step 2: Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 3: Check if the form is submitted
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Step 4: Query to select user by email
    $sql = "SELECT * FROM signup WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // Step 5: Check if the user exists
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // Step 6: Verify the password using password_verify()
        if (password_verify($password, $row['password'])) {
            // Password is correct, start session and set session variables
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];  // Store role in session

            // Step 7: Redirect based on user role
            if ($row['role'] == 'admin') {
                header("Location: admin-dashboard.php");  // Redirect to admin dashboard
            } elseif ($row['role'] == 'doctor') {
                header("Location: doctor-dashboard.php"); // Redirect to doctor dashboard
            } else {
                header("Location: index.php"); // Redirect to patient dashboard
            }
            exit; // Don't forget to exit after the redirect
        } else {
            echo "❌ Incorrect password!";
        }
    } else {
        echo "❌ No user found with this email!";
    }
}

mysqli_close($conn); // Close database connection
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome - Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: linear-gradient(to right, #1e3c72, #2a5298);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      background-color: white;
      padding: 40px;
      border-radius: 12px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 25px;
      color: #2a5298;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      color: #444;
      font-weight: 500;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    .login-btn {
      width: 100%;
      background-color: #2a5298;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
      transition: 0.3s ease;
    }

    .login-btn:hover {
      background-color: #1e3c72;
    }

    .guest-link {
      display: block;
      margin-top: 20px;
      font-size: 15px;
      color: #2a5298;
      text-decoration: none;
      font-weight: bold;
    }

    .guest-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Welcome</h2>
    <form action="welcome.php" method="POST">
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter Your email" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="••••••••" required />
      </div>
      <div class="form-group">
        <label for="role">Login as</label>
        <select id="role" name="role" required>
          <option value="" disabled selected>Select your role</option>
          <option value="doctor">Doctor</option>
          <option value="patient">Patient</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <button type="submit" name="login" class="login-btn">Login</button>
    </form>

    <a href="about.php" class="guest-link">Continue as Guest</a>
    <a href="registration.php" class="guest-link">Create New Account!!</a>
  </div>
</body>
</html>
