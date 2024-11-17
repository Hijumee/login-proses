<?php
session_start();

if (!isset($_SESSION['login_time'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .welcome-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .welcome-container h2 {
            margin-bottom: 20px;
        }
        .welcome-container p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <center><h2>SELAMAT DATANG</h2></center>
        <p><i>Anda Login Pada: </i><?php echo $_SESSION['login_time']; ?></p>
    </div>
</body>
</html>
