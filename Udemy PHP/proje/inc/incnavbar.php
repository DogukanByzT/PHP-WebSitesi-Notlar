<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">BYFREND</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        </li>

        <li class="nav-item">
          <a class="nav-link" href="index.php">Ana Sayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hakkımızda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="yenigelenler.php">Ürünler</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iletisim.php">İletişim</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item ml-auto">
          <a href="sepet.php" class="nav-link" href="#">
            <i class="fas fa-shopping-cart"></i>
            Sepet
            <span id="sepetSayac" class="badge bg-info">0</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <script>
     // "Sepete Ekle" butonlarına click olayı dinleyicisi ekleniyor
var sepeteEkleButonlari = document.getElementsByClassName('sepete-ekle');
var sepetSayac = document.getElementById('sepetSayac');
for (var i = 0; i < sepeteEkleButonlari.length; i++) {
  sepeteEkleButonlari[i].addEventListener('click', function() {
    // Sepet sayacının değeri bir arttırılıyor
    var yeniDeger = parseInt(sepetSayac.innerText) + 1;
    sepetSayac.innerText = yeniDeger;
  });
} </script>
