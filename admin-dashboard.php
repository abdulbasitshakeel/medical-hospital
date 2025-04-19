<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>/* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.dashboard-container {
    display: flex;
}

.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
}

.sidebar h2 {
    text-align: center;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.sidebar ul li a:hover {
    background-color: #34495e;
}

.main-content {
    flex: 1;
    padding: 20px;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header h1 {
    font-size: 24px;
}

.header button {
    background-color: #e74c3c;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.header button:hover {
    background-color: #c0392b;
}

.content h2 {
    font-size: 22px;
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

table th {
    background-color: #34495e;
    color: white;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table button {
    background-color: #3498db;
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

table button:hover {
    background-color: #2980b9;
}
</style>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin's Dashboard</h2>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Manage Doctors</a></li>
                <li><a href="#">Manage Patients</a></li>
                <li><a href="#">View Reports</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Welcome, Admin</h1>
                <button id="logoutBtn">Logout</button>
            </div>
            <div class="content">
                <h2>Doctor List</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Doctor Name</th>
                            <th>Specialization</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dr. Sarah Lee</td>
                            <td>Cardiology</td>
                            <td><button class="editBtn">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Dr. John Smith</td>
                            <td>Neurology</td>
                            <td><button class="editBtn">Edit</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // jQuery for Logout Button
        $('#logoutBtn').click(function() {
            alert('You have logged out!');
            window.location.href = 'login.php';  // Redirect to login page
        });

        // jQuery for Edit Button
        $('.editBtn').click(function() {
            alert('Editing Doctor Details!');
        });
    </script>
</body>
</html>
