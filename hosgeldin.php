<?php
    $user = isset($_GET['user']) ? $_GET['user'] : "Misafir";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hoşgeldiniz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-center p-5">
    <div class="container card shadow p-5">
        <h1 class="text-primary">Hoşgeldiniz "<?php echo $user; ?>"</h1>
        <p class="lead mt-3">Giriş işleminiz başarıyla gerçekleşti.</p>
        <a href="index.html" class="btn btn-outline-danger mt-3">Çıkış Yap / Ana Sayfa</a>
    </div>
</body>
</html>