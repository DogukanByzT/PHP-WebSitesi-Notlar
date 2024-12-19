<!DOCTYPE html>
<html>
<head>
    <title>Ürün Tanıtımı</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
          .product-gallery {
            position: relative;
        }
        .product-gallery img {
            max-width: 70%;
            height: auto;
            display: none;
        }
        .product-gallery img.active {
            display: block;
        }
        .product-gallery .prev-arrow,
        .product-gallery .next-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 24px;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            cursor: pointer;
        }
        .product-gallery .prev-arrow {
            left: 0px;
        }
        .product-gallery .next-arrow {
            right: 200px;
        }
        .product-info {
            margin-top: 20px;
        }
        .product-info h3 {
            margin-bottom: 10px;
        }
        .product-info p {
            margin-bottom: 20px;
        }
        .product-info .sepete-ekle {
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php require_once 'inc/incnavbar.php'; ?>

   <div class="container">
        <h1>Ürün Adı</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="product-gallery">
                    <img src="urunler/urun1/kapak1.jpg" class="img-fluid active" alt="Ürün Resmi 1">
                    <img src="urunler/urun1/uruntanıtım1.jpg" class="img-fluid" alt="Ürün Resmi 2">
                    <img src="urunler/urun1/uruntanıtım2.jpg" class="img-fluid" alt="Ürün Resmi 3">
                    <img src="urunler/urun1/uruntanıtım3.jpg" class="img-fluid" alt="Ürün Resmi 4">
                    <span class="prev-arrow">&#8249;</span>
                    <span class="next-arrow">&#8250;</span>
                </div>
            </div>
                      <div class="col-lg-6">
                <h3>Açıklama</h3>
                <p>
                    Ürün açıklaması buraya gelecek. Ürünün özellikleri, kullanım alanları vb. bilgileri bu alanda paylaşabilirsiniz.
                </p>
                <h3>Fiyat: $XX.XX</h3>
                <a href="sepeteekle.php?productId=1" class="btn btn-primary sepete-ekle">Sepete Ekle</a>
            </div>
        </div>
    </div>

    <script>
        <?php
session_start();

// Ürün ID'sini alalım
$productId = $_GET['productId'];

// Sepeti kontrol edelim veya oluşturalım
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Ürünü sepete ekleyelim
array_push($_SESSION['cart'], $productId);

// Sepete ekleme işlemi tamamlandıktan sonra kullanıcıyı ilgili sayfaya yönlendirebilirsiniz
header('Location: sepet.php');
exit();
?>
        var galleryImages = document.querySelectorAll('.product-gallery img');
        var prevArrow = document.querySelector('.product-gallery .prev-arrow');
        var nextArrow = document.querySelector('.product-gallery .next-arrow');
        var sepeteEkleButonu = document.querySelector('.sepete-ekle');
        var sepetSayac = document.getElementById('sepetSayac');
        var activeImageIndex = 0;

        // İlk resmi aktif hale getir
        galleryImages[activeImageIndex].classList.add('active');

        // "Sepete Ekle" butonuna click olayı dinleyicisi ekleniyor
        sepeteEkleButonu.addEventListener('click', function() {
            // Sepet sayacının değeri bir arttırılıyor
            var yeniDeger = parseInt(sepetSayac.innerText) + 1;
            sepetSayac.innerText = yeniDeger;
        });

        // Önceki resme geçme fonksiyonu
        function showPreviousImage() {
            galleryImages[activeImageIndex].classList.remove('active');
            activeImageIndex = (activeImageIndex === 0) ? galleryImages.length - 1 : activeImageIndex - 1;
            galleryImages[activeImageIndex].classList.add('active');
        }

        // Sonraki resme geçme fonksiyonu
        function showNextImage() {
            galleryImages[activeImageIndex].classList.remove('active');
            activeImageIndex = (activeImageIndex === galleryImages.length - 1) ? 0 : activeImageIndex + 1;
            galleryImages[activeImageIndex].classList.add('active');
        }

        // Önceki resme geçmek için önceki okun click olayı dinleyicisi ekleniyor
        prevArrow.addEventListener('click', showPreviousImage);

        // Sonraki resme geçmek için sonraki okun click olayı dinleyicisi ekleniyor
        nextArrow.addEventListener('click', showNextImage);

        // Klavye ok tuşlarıyla resim geçişi
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowRight') {
                showNextImage();
            } else if (e.key === 'ArrowLeft') {
                showPreviousImage();
            }
        });
    </script>
</body>
</html>