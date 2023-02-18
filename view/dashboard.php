<?php
session_start();
if (!$_SESSION['auth']) {
    header('Location: user/register.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <? if ($_SESSION['level'] == 'admin') : ?>
        <title>Dashboard Admin</title>
    <? elseif ($_SESSION['level'] == 'petugas') : ?>
        <title>Dashboard Petugas</title>
    <? else : ?>
        <title>Dashboard Masyarakat</title>
    <? endif ?>
</head>
<body>
    <?= "Selamat Datang, " . $_SESSION['auth'] ?>

    <form action="../authcontroller.php" method="post">
        <input type="submit" name="logout" value="keluar">
    </form>
</body>
</html>