<?php
session_start();
if (!$_SESSION['auth']) {
    header('Location: login.php');
}else{
    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
</head>
<body>
    <?php if ($_SESSION['notif']){
        echo $_SESSION['notif'];
    }?>    
    <?= "Selamat Datang, " . $_SESSION['auth'] ?>
    <p>Lanjut ke lembar Todo? >>> <a href="../todo/index.php">Lembar Todo</a></p>
    <form action="../../authcontroller.php" method="post">
        <input type="submit" name="logout" value="keluar">
    </form>
</body>
</html>