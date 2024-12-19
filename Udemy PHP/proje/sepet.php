<!DOCTYPE html>
<html>
<head>
    <title>Sepet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <?php require_once 'inc/incnavbar.php'; ?>

    <div class="container">
        <h1>Sepet</h1>
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ürün Adı</th>
                            <th>Fiyat</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
session_start();

// Eğer sepet array'i henüz oluşturulmadıysa, boş bir array olarak oluşturulur
if (!isset($_SESSION['sepet'])) {
  $_SESSION['sepet'] = array();
}

// POST yöntemiyle gönderilen 'urun' ve 'fiyat' değerlerini alıyoruz
if (isset($_POST['urun']) && isset($_POST['fiyat'])) {
  $urunAdi = $_POST['urun'];
  $urunFiyati = $_POST['fiyat'];

  // Sepet array'ine ürünü ve fiyatını ekliyoruz
  $_SESSION['sepet'][] = array('ad' => $urunAdi, 'fiyat' => $urunFiyati);
}

// Sepet ürünlerini döngü ile yazdır
foreach ($_SESSION['sepet'] as $urun) {
    echo '<tr>';
    echo '<td>' . $urun['ad'] . '</td>';
    echo '<td>' . $urun['fiyat'] . '</td>'; // Ürün fiyatını buraya ekleyin
    echo '</tr>';
}
?>

                    </tbody>
                </table>
                  <?php
                // Sepeti temizlemek için bir buton ekleyelim
                echo '<form method="post" action="sepet.php">';
                echo '<button type="submit" name="temizle" class="btn btn-danger">Sepeti Temizle</button>';
                ?>
              
                  <?php
                echo '</form>';

                // Sepet temizleme işlemini gerçekleştirelim
                if (isset($_POST['temizle'])) {
                  $_SESSION['sepet'] = array(); // Sepet array'ini boşalt
                  echo '<div class="alert alert-success" role="alert">Sepet başarıyla temizlendi.</div>';
                }

                ?>
                  <a href="odeme.php"><button type="submit" name="odeme" class="btn btn-success"style="margin-top: 10px;" >Sepeti Onayla</button></a>
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
</html>