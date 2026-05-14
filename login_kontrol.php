<?php
// Verileri al ve boşlukları temizle
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$sifre = isset($_POST['password']) ? trim($_POST['password']) : '';

// Doğru bilgiler (Senin yeni bilgilerin)
$dogru_email = "b251210079@sakarya.edu.tr";
$dogru_sifre = "b251210079";

if ($email == $dogru_email && $sifre == $dogru_sifre) {
    // Giriş başarılıysa Bootstrap tasarımlı bir karşılama yapalım
    echo '<!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Hoşgeldiniz</title>
    </head>
    <body class="bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card p-5 shadow-lg text-center" style="max-width: 500px; border-radius: 20px;">
            <h1 class="text-primary fw-bold mb-3">Hoşgeldiniz</h1>
            <h3 class="mb-4 text-dark">' . htmlspecialchars($email) . '</h3>
            <p class="lead text-muted">Giriş işleminiz başarıyla tamamlandı.</p>
            <hr>
            <a href="index.html" class="btn btn-primary btn-lg w-100">Ana Sayfaya Git</a>
        </div>
    </body>
    </html>';
} else {
    // Bilgiler yanlışsa uyarı ver ve geri gönder
    echo "<script>alert('Hata: Kullanıcı adı veya şifre yanlış!'); window.location.href='login.html';</script>";
}
?>