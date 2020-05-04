<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == '4adm1n-t3st') {
        echo "<script>alert('Selamat anda bisa login!'); window.location=('dashboard.php')</script>";
    } else {
        echo "<script>alert('Maaf username atau password salah'); window.location=('index.php')</script>";
    }
?>