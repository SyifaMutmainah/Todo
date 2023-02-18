<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
</head>
<body>    
    <h1>Formulir Pendaftaran</h1>
    <form action="../../authcontroller.php" method="POST">
        <li><label for="nama">Nama</label></li>
        <li><input type="text" name="nama" id="nama" required></li>
        <li><label for="email">Email</label></li>
        <li><input type="text" name="email" id="email" required></li>
        <li><label for="password">Password</label></li>
        <li><input type="password" name="password" id="password" required></li>
        <li><label for="confirm_password">Konfirmasi Password</label></li>
        <li><input type="password" name="confirm_password" id="confirm_password" required></li>
        <li><input type="submit" name="register" value="Daftar"></li>
    </form>
    <p>Sudah punya akun, ingin login?>>><a href="login.php">Login</a></p>    
</body>
</html>