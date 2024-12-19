<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ödeme Sayfası</title>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<?php require_once'inc/incnavbar.php' ?>
<body>
  <div class="container">
    <h1>Ödeme</h1>

    <form>
       <div class="form-group">
        <label for="text">Ad Soyad</label>
        <input type="text" class="form-control" id="cardNumber" placeholder="Ad Soyad">
      </div>
      <div class="form-group">
        <label for="cardNumber">Kart Numarası</label>
        <input type="text" class="form-control" id="cardNumber" placeholder="Kart Numarası">
      </div>

      <div class="form-group">
        <label for="expirationDate">Son Kullanma Tarihi</label>
        <input type="text" class="form-control" id="expirationDate" placeholder="AA/YY">
      </div>

      <div class="form-group">
        <label for="cvv">CVV</label>
        <input type="text" class="form-control" id="cvv" placeholder="CVV">
      </div>

       <div class="form-group">
        <label for="cardNumber">Mail Adresi</label>
        <input type="mail" class="form-control" id="cardNumber" placeholder="e-mail">
      </div>

       <div class="form-group">
        <label for="text">Fatura Adresi</label>
        <input type="text" class="form-control" id="cardNumber" placeholder="Adres Satırı">
      </div>

      <button type="submit" class="btn btn-primary">Ödemeyi Onayla</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>