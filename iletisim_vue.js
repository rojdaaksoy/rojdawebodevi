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
      errors: {}
    }
  },
  methods: {
    validateVue() {
      this.errors = {};
      let isValid = true;

      // Boş alan kontrolleri
      if (!this.form.name) {
        this.errors.name = "Ad Soyad boş bırakılamaz.";
        isValid = false;
      }
      if (!this.form.email) {
        this.errors.email = "E-posta boş bırakılamaz.";
        isValid = false;
      }
      if (!this.form.phone) {
        this.errors.phone = "Telefon boş bırakılamaz.";
        isValid = false;
      }
      if (!this.form.city) {
        this.errors.city = "Lütfen bir şehir seçiniz.";
        isValid = false;
      }

      // Telefon rakam kontrolü
      if (this.form.phone && isNaN(this.form.phone)) {
        this.errors.phone = "Telefon sadece rakamlardan oluşmalıdır.";
        isValid = false;
      }

      if (isValid) {
        alert("Vue.js ile doğrulama başarılı! PHP'ye gönderiliyor.");
       
        document.getElementById("contactForm").submit();
      }
    }
  }
}).mount('#app')