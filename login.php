<?php
    
    require "code-login.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <div class="container-all">

        <div class="ctn-form">
            <img src="resource/logo.png" alt="" class="logo">
            <h1 class="title">Login</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"><?php echo $email_err; ?></span>
                <label for="">Password</label>
                <input type="password" name="password">
                <span class="msg-error"><?php echo $password_err; ?></span>

                <input type="submit" value="Login">

            </form>

            <span class="text-footer">Belum Punya Akun ?
                <a href="register.php">Sign Up</a>
            </span>
        </div>

        <div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description">SAT21NGER</h1>
            <p class="text-description">Satzinger adalah merupakan angkatan pada jurusan Sistem Informasi yang merupakan angkatan 2021</p>
        </div>

    </div>

</body>

</html>