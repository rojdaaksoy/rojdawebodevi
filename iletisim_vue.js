const { createApp } = Vue

createApp({
  data() {
    return {
      form: {
        name: '',
        email: '',
        phone: '',
        city: ''
      },
      errors: {} // Hataları burada tutuyoruz
    }
  },
  methods: {
    validateVue() {
      this.errors = {}; // Her basıldığında hataları sıfırla
      let isValid = true;

      // 1. Ad Soyad Kontrolü
      if (!this.form.name || this.form.name.length < 3) {
        this.errors.name = "Lütfen geçerli bir ad soyad giriniz.";
        isValid = false;
      }

      // 2. Email Format Kontrolü 
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!this.form.email || !emailPattern.test(this.form.email)) {
        this.errors.email = "Lütfen geçerli bir e-posta adresi giriniz.";
        isValid = false;
      }

      // 3. Telefon Sadece Rakam Kontrolü
      if (!this.form.phone || isNaN(this.form.phone)) {
        this.errors.phone = "Telefon alanı sadece rakamlardan oluşmalıdır.";
        isValid = false;
      }

      // 4. Şehir Seçimi Kontrolü
      if (!this.form.city) {
        this.errors.city = "Lütfen bir şehir seçiniz.";
        isValid = false;
      }

      // Eğer hata yoksa PHP sayfasına gönder
      if (isValid) {
        alert("Vue.js Denetimi Başarılı! Bilgileriniz PHP sayfasına iletiliyor.");
        document.getElementById("contactForm").submit();
      }
    }
  }
}).mount('#app')