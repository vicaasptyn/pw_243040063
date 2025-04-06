<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: l6login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
        }
        .logout {
            background-color: red;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<h1>Selamat Datang Di Web Kami</h1>
<a href="l6logout.php" class="logout">Logout</a>
</body>
</html>