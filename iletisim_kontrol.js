function validateJS() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var city = document.getElementById("city").value;

    // Boş alan kontrolü
    if (name == "" || email == "" || phone == "" || city == "") {
        alert("Lütfen tüm alanları eksiksiz doldurunuz!");
        return false;
    }

    // Email format kontrolü
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Geçersiz e-posta formatı!");
        return false;
    }

    // Telefon rakam kontrolü
    if (isNaN(phone)) {
        alert("Telefon numarası sadece rakamlardan oluşmalıdır!");
        return false;
    }

    alert("Doğrulama başarılı! Veriler PHP sayfasına iletiliyor.");
    document.getElementById("contactForm").submit();
}