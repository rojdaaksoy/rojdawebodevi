<?php
// Formdan gelen verileri alıyoruz
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$sifre = isset($_POST['password']) ? trim($_POST['password']) : '';

// E-posta içindeki numarayı ayıklıyoruz (b251210079@sakarya.edu.tr -> b251210079)
$parcalar = explode('@', $email);
$ogrenci_no = $parcalar[0]; 

// Ödevde istenen: Gelen tüm verileri ekrana yazdırma
echo "<div style='text-align:center; font-family:sans-serif; margin-top:50px;'>";
echo "<h2>Gönderilen Form Verileri</h2>";
echo "<b>Gelen E-posta:</b> " . htmlspecialchars($email) . "<br>";
echo "<b>Gelen Şifre:</b> " . htmlspecialchars($sifre) . "<hr>";

// Kontroller: Email uzantısı doğru mu ve şifre öğrenci numarasına eşit mi?
if (strpos($email, '@sakarya.edu.tr') !== false && $sifre === $ogrenci_no && !empty($sifre)) {
    // Başarılı Giriş: Hoşgeldiniz [Öğrenci No] mesajı
    echo "<h1 style='color:green;'>Hoşgeldiniz " . htmlspecialchars($ogrenci_no) . "</h1>";
    echo "<p><a href='index.html' style='text-decoration:none; color:blue;'>Ana Sayfaya Dön</a></p>";
} else {
    // Hatalı Giriş: Hata mesajı ve yönlendirme
    echo "<script>
            alert('Hata: Bilgiler hatalı veya alanlar boş!'); 
            window.location.href='login.html';
          </script>";
}
echo "</div>";
?>