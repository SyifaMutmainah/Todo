<?php

include 'koneksi.php';

class AuthController extends Koneksi{
    public function register ($request) {
   
    $nama             = $request['nama'];
    $email            = $request['email'];
    $confirm_password = $request['confirm_password'];
    $password         = $request['password'];

    $query = "SELECT * FROM user WHERE email='$email'";
    $email_check = $this->pdo->prepare($query);
    $email_check->execute();

    $email_status = $email_check->fetchAll(PDO::FETCH_OBJ);

    if ($email_status) {
        echo "<script>
             alert('Email sudah Terdaftar!')
             window.location.href='view/user/register.php'
             </script>";
    } else {

    }
        if ($password == $confirm_password) {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $encrypted_password = crypt($password, $password_hash);
            
            $query = "INSERT INTO user (nama, email, password) VALUES ('$nama', '$email', '$hash_password')";
            $register = $this->pdo->prepare($query);
            $register->execute();

            echo "<script>
                 alert('Berhasil mendaftarkan email!')
                 window.location.href='view/user/register.php'
                 </script>";
        } else {
            echo"<script>
                alert('Konfirmasi password tidak sesuai!')
                window.location.href='view/user/register.php'
                </script>";
        }
    }

public function login($request) {
    $email        = $request['email'];
    $password   = $request['password'];

    // Check Email
    $query = "SELECT * FROM user WHERE email = '$email'";
    $email_check = $this->pdo->prepare($query);
    $email_check->execute();
    $email_result = $email_check->fetch(PDO::FETCH_OBJ);

    if (!$email_result) {
        echo "<script>
            alert('Email yang anda masukan tidak sesuai!')
            window.location.href='view/user/login.php'
            </script>";
    } else {
        if (password_verify($password, $email_result->password)) {
            session_start();
            $_SESSION['auth'] = $email_result->nama;
            header('Location: view/dashboard.php');
        } else {
            echo "<script>
            alert('Password yang anda masukan tidak sesuai!')
            </script>";
        }
    }
}

public function logout()
{
    session_start();
    $_SESSION = [];
    session_unset();
    session_destroy();
    
    echo "<script>
        alert('Telah berhasil logout!')
        window.location.href='view/user/index.php'
        </script>";
}

}

$user = new AuthController();

if (isset($_POST['register'])) {
$user->register($_POST);
}

if (isset($_POST['login'])) {
$user->login($_POST);
}

if (isset($_POST['logout'])) {
$user->logout();
}

