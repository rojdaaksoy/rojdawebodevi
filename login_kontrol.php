<?php
// Kullanıcı adı ve şifre tanımlama 
$dogru_email = "rojda.aksoy@ogr.sakarya.edu.tr"; // Örnek öğrenci maili
$dogru_sifre = "123456"; // Örnek şifre

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gelen_email = $_POST['email'];
    $gelen_sifre = $_POST['password'];

    if ($gelen_email == $dogru_email && $gelen_sifre == $dogru_sifre) {
        // Bilgiler doğruysa Hoşgeldin sayfasına yönlendir
        echo "<script>alert('Giriş Başarılı! Hoşgeldiniz.'); window.location.href='hosgeldin.php?user=" . $gelen_email . "';</script>";
    } else {
        // Bilgiler yanlışsa hata ver ve login sayfasına geri gönder
        echo "<script>alert('Hata: Kullanıcı adı veya şifre yanlış!'); window.location.href='login.html';</script>";
    }
}
?>