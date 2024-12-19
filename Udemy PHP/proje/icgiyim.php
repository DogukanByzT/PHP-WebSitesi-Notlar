<?php require_once'inc/incnavbar.php';  ?>

<!--Ürünler-->
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="urunler/icgiyim/giyim1/foto1.jpeg" class="card-img-top" alt="Ürün 1">
          <div class="card-body">
            <h5 class="card-title">Elastan şeker pembe sıvama kumaş bikini takımı</h5>
            <p class="card-text">Fiyat: 899TL</p>
            <a href="#" class="btn btn-primary sepete-ekle">Sepete Ekle</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card">
          <img src="urunler/icgiyim/giyim2/foto1.jpeg" class="card-img-top" alt="Ürün 2">
          <div class="card-body">
            <h5 class="card-title">Elastan şeker yeşil sıvama kumaş bikini takımı</h5>
            <p class="card-text">Fiyat: 899TL</p>
            <a href="#" class="btn btn-primary sepete-ekle">Sepete Ekle</a>
          </div>
        </div>
      </div>
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
    }
  </script>
</body>

    
    <!-- Diğer ürünler buraya eklenebilir -->
    
  </div>
</div>