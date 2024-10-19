<?php
session_start(); // Di panggil lagi untuk mengetahui session yang aktif
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        // unset($_SESSION['favcolor']); // Cara ini hanya menghapus variabel favcolor saja
        session_unset(); // Hapus semua variable namun session masih berjalan
        session_destroy(); // Menghentikan session dan menghapus semua variabel

        echo "All session variables are now removed, and the session is destroyed."
        ?>
    </body>
</html>