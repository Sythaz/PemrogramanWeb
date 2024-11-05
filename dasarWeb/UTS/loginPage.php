<!-- Design Inspiration: https://dribbble.com/shots/24552589-Login-Sign-up-Dark-Mode-UI-UX-Design -->
<?php
if (isset($_COOKIE['ingat30menit']) && isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
    $emailIngatSaya = $_COOKIE['email'];
    $passwordIngatSaya = $_COOKIE['password'];
} else {
    $emailIngatSaya = "";
    $passwordIngatSaya = "";
}
?>

<html>
<head>
  <meta charset="utf-8">
  <title>Login Page | Syafiq</title>
  <link rel="stylesheet" type="text/css" href="styleLoginPage.css">
</head>
<body>
    <div class="kotak-form">
        <div class="gambar-form">
            <img src="../UTS/imageform.jpg" alt="Gambar">
        </div>
        <div class="grid-2">
                <div class="header-text">Welcome back, <span style="color: #235343;">Ecohero</span>!</div>
                <form action="proses_login.php" method="post">        
                    <div class="padding-b15">
                        <label for="email">Email</label>
                        <input class="form" type="email" name="email" placeholder="Masukkan Email Anda" value="<?php echo $emailIngatSaya ?>">
                    </div>
                    <div class="padding-b15">
                        <label for="password">Password</label>
                        <input class="form" type="password" name="password" placeholder="Masukkan Password Anda" value="<?php echo $passwordIngatSaya ?>">
                    </div>
                    <div class="margin-t15">
                        <label for="checkbox">
                            <input type="checkbox" name="ingat30menit" id="checkbox">
                            Ingat saya | 30 Menit
                        </label>
                    <button class="tombol-submit" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>