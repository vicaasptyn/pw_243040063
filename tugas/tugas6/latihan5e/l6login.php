<?php
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $valid_username = "vicaseptyana";
    $valid_password = "pasundan24";
    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: l6admin.php");
        exit();
    } else {
        $error = "Username / Password salah";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
            text-align: center;
        }

        .login-box {
            width: 300px;
            padding: 20px;
            background-color: salmon;
            margin: 100px auto;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <img src="../img/logo.png" width="100px" alt="Logo">
        <form method="post">
            <p>Username :</p>
            <input type="text" name="username" required>
            <p>Password :</p>
            <input type="password" name="password" required>
            <br><br>
            <button type="submit">Login</button>
        </form>
        <p class="error"><?php echo $error; ?></p>
    </div>
</body>

</html>