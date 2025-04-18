<?php include("connect.php"); ?>
<?php
if (isset($_POST['submit'])) 
{ 
    extract($_POST);
    $sql="SELECT * FROM user WHERE Email = '$EmailAddress' AND Password = '$Password'";
    $result = $conn->query($sql);
        
    if($result->num_rows > 0)
    {
        header("location:welcome.php");
    }
    else
    {
        header("location:index.php");
    }
}
?>
<!doctype html>
<html lang="en">
    <head>
        <title>LogIn</title>
        <meta charset="utf-8" />
        <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"crossorigin="anonymous"
        />
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #7f9fbf;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .work {
                background-color: #fff;
                padding: 40px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
            }
            .heading h1 {
                text-align: center;
                font-size: 28px;
                color: #333;
                margin-bottom: 20px;
            }
            input[type="email"], 
            input[type="password"]
             {
                width: 100%;
                padding: 12px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 16px;
                outline: none;
                transition: all 0.3s ease;
            }
            input[type="email"]:focus, 
            input[type="password"]:focus
             {
                border-color: #007bff;
                box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
            }
            select {
                width: 100%;
                padding: 12px;
                margin: 10px 0;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 16px;
                outline: none;
                transition: all 0.3s ease;
            }

            select:focus {
                border-color: #007bff;
                box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
            }
            button[type="submit"] {
                width: 100%;
                padding: 12px;
                background-color: #007bff;
                border: none;
                border-radius: 5px;
                color: white;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            button[type="submit"]:hover {
                background-color: #0056b3;
            }
            .buttontopwork{
                text-align: center;
                padding-top: 12px;
            }
            .buttontopwork a{
                color: #0056b3;
                justify-content: center;
                text-decoration: none;
                font-size: 18px;
            }
            .login a{
                color: red;
                justify-content: center;
                text-decoration: none;
                margin: 80px;
                font-size: 17px;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="work">
                    <form method="post">
                        <div class="heading">
                            <h1>LogIn</h1>
                        </div>
                        <input type="email" name="EmailAddress" id="email" placeholder="Email..." required>  
                        <select name="name" id="name" required>
                            <option value="">Select option...</option>
                            <option value="Admin">Admin</option>
                            <option value="User">Doctor</option>
                            <option value="User">patient</option>
                        </select>
                        <input type="password" name="Password" id="password" placeholder="Password..." required>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div class="buttontopwork">
                        <a href="signin.php">Create New Account</a>
                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
