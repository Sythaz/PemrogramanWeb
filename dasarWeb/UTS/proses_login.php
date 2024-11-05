<?php
$email = $_POST['email'];
$password = $_POST['password'];
$ingat30menit = isset($_POST['ingat30menit']);


if ($email == "admin@gmail.com" && $password == "12345") {
    // Set cookies saat berhasil login
    if ($ingat30menit) {
        $waktuCookie = time() + (30 * 60);
    } else {
        $waktuCookie = 0;
    }
    setcookie("email", $email, $waktuCookie);
    setcookie("password", $password, $waktuCookie);
    setcookie("ingat30menit", $ingat30menit, $waktuCookie);

    header("location:homePage.php");
} else {
    echo "<script>
            alert('Maaf, email atau password anda salah. Silahkan kembali ke halaman Login.');
            // Saat di klik akan megarahkan ke halaman login lagi
            window.location.href = 'loginPage.php';
          </script>";
}
?>