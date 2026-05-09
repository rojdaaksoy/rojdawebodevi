<?php
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen verileri güvenli bir şekilde alıyoruz
    // Eğer veri yoksa (null) yerine "Girilmedi" yazacak
    $ad_soyad = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "Girilmedi";
    $eposta   = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "Girilmedi";
    $telefon  = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : "Girilmedi";
    $sehir    = isset($_POST['city'])  ? htmlspecialchars($_POST['city'])  : "Girilmedi";

    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <title>Gönderim Sonucu</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='bg-light p-5'>
        <div class='container card shadow p-4'>
            <h2 class='text-success'>Form Başarıyla Alındı!</h2>
            <hr>
            <p><b>Ad Soyad:</b> $ad_soyad</p>
            <p><b>E-posta:</b> $eposta</p>
            <p><b>Telefon:</b> $telefon</p>
            <p><b>Şehir:</b> $sehir</p>
            <br>
            <a href='iletisim.html' class='btn btn-primary'>Geri Dön</a>
        </div>
    </body>
    </html>";
} else {
    echo "Lütfen önce iletişim formunu doldurunuz.";
    header("Refresh: 2; url=iletisim.html");
}
?>