<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<?php require_once'inc/incnavbar.php';  ?>

<!--Ürünler-->
<body>
  <!-- Ürünler -->
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <a href="urun1.php"><img src="urunler/yenigelenler/urun1/kapak1.jpg" class="card-img-top" alt="Ürün 1"></a>
        <div class="card-body">
          <h5 class="card-title">Ürün 1</h5>
          <p class="card-text">Fiyat: ₺650</p>
          <form method="POST" action="sepet.php">
            <input type="hidden" name="urun" value="urun1">
             <input type="hidden" name="fiyat" value="19.99">
            <button type="submit" class="btn btn-primary sepete-ekle">Sepete Ekle</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card">
        <a href="urun2.php">
        <img src="urunler/yenigelenler/urun2/kapak2" class="card-img-top" alt="Ürün 2">
        </a>
        <div class="card-body">
          <h5 class="card-title">Ürün 2</h5>
          <p class="card-text">Fiyat: ₺699</p>
          <form method="POST" action="sepet.php">
            <input type="hidden" name="urun" value="urun2">
            <input type="hidden" name="fiyat" value="24.99">
            <button type="submit" class="btn btn-primary sepete-ekle">Sepete Ekle</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card">
         <a href="urun3.php"><img src="urunler/yenigelenler/urun3/kapak3" class="card-img-top" alt="Ürün 3"></a>
        <div class="card-body">
          <h5 class="card-title">Ürün 3</h5>
          <p class="card-text">Fiyat: ₺900</p>
          <form method="POST" action="sepet.php">
            <input type="hidden" name="urun" value="urun3">
             <input type="hidden" name="fiyat" value="14.99">
            <button type="submit" class="btn btn-primary sepete-ekle">Sepete Ekle</button>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card">
         <a href="urun4.php"><img src="urunler/yenigelenler/urun4/kapak4" class="card-img-top" alt="Ürün 3"></a>
        <div class="card-body">
          <h5 class="card-title">Ürün 4</h5>
          <p class="card-text">Fiyat: ₺1099</p>
          <form method="POST" action="sepet.php">
            <input type="hidden" name="urun" value="urun3">
             <input type="hidden" name="fiyat" value="14.99">
            <button type="submit" class="btn btn-primary sepete-ekle">Sepete Ekle</button>
          </form>
        </div>
      </div>
    </div>
     <div class="col-lg-4 col-md-6">
      <div class="card">
         <a href="urun4.php"><img src="urunler/icgiyim/giyim1/foto1.jpeg" class="card-img-top" alt="Ürün 3"></a>
        <div class="card-body">
          <h5 class="card-title">Elastan şeker pembe sıvama kumaş bikini takımı</h5>
          <p class="card-text">Fiyat: ₺899</p>
          <form method="POST" action="sepet.php">
            <input type="hidden" name="urun" value="Elastan şeker pembe sıvama kumaş bikini takımı">
             <input type="hidden" name="fiyat" value="899">
            <button type="submit" class="btn btn-primary sepete-ekle">Sepete Ekle</button>
          </form>
        </div>
      </div>
    </div>
     <div class="col-lg-4 col-md-6">
      <div class="card">
         <a href="urun4.php"><img src="urunler/icgiyim/giyim2/foto1.jpeg" class="card-img-top" alt="Ürün 3"></a>
        <div class="card-body">
          <h5 class="card-title">Elastan şeker yeşil sıvama kumaş bikini takımı</h5>
          <p class="card-text">Fiyat: ₺899</p>
          <form method="POST" action="sepet.php">
            <input type="hidden" name="urun" value="Elastan şeker yeşil sıvama kumaş bikini takımı">
             <input type="hidden" name="fiyat" value="899">
            <button type="submit" class="btn btn-primary sepete-ekle">Sepete Ekle</button>
          </form>
        </div>
      </div>
    </div>
        <!-- Diğer ürünler buraya eklenebilir -->
  </div>
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

    

    
  </div>
</div>