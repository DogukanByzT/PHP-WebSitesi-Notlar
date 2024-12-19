<!DOCTYPE html>
<?php require_once 'inc.functions.php'; ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Ekle | Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://cdn.tiny.cloud/1/rjpf4ab3hz3wjpxcq0vkmjvk13b0mdd3lrapp6zzpoeo2saz/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

      <?php require_once 'inc.menu.php'; 
            
           if (@$_POST['submit']) {
               $baslik = htmlspecialchars($_POST['baslık'], ENT_QUOTES, 'UTF-8');
               $alt_baslik = htmlspecialchars($_POST['alt_baslık'], ENT_QUOTES, 'UTF-8');
               $aciklama = htmlspecialchars($_POST['acıklama'], ENT_QUOTES, 'UTF-8');
               $aktif = htmlspecialchars($_POST['aktif'], ENT_QUOTES, 'UTF-8');
                
               $ekle = $db->prepare("INSERT INTO blog('baslık','alt_baslik','aciklama','aktif') VALUES
               (:baslik, :alt_baslik,:aciklama,:aktif) "); 
               $ekle->bindValue(":baslık", $baslik, PDO::PARAM_STR);
               $ekle->bindValue(":alt_baslık", $alt_baslik, PDO::PARAM_STR);
               $ekle->bindValue(":acıklama", $aciklama, PDO::PARAM_STR);
               $ekle->bindValue(":baslık", $baslik, PDO::PARAM_STR);
               $ekle->bindValue(":aktif", $aktif, PDO::PARAM_STR);
               if ($ekle -> execute()){
            
                   header("Location: blog.php?i=ekle");
               } else {
                //print_r($ekle->errorInfo()); hatayı ekrana yazdırır
                header("Location: blog.php?i=hata");
               
           }
}
               
       ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Yeni Blog Ekle</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="blog.php" class="btn btn-primary"> <- Geri Dön</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Başlık</label>
                                            <input class="form-control" name="baslık" placeholder="Başlık giriniz...">
                                        </div>
                                        <div class="form-group">
                                            <label>Alt Başlık</label>
                                            <input class="form-control" name="alt_baslık" placeholder="Alt başlık giriniz...">
                                        </div>
                                        <div class="form-group">
                                            <label>Açıklama</label>
                                            <textarea class="form-control" name="acıklama" id="mytextarea" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Durum</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif" id="optionsRadios1" value="1" checked>Aktif
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif" id="optionsRadios2" value="0">Deaktif
                                                </label>
                                            </div>
                                        </div>
                                               <input type="submit" name="submit" value="Kaydet" class="btn btn-success">
                                               <input type="reset" name="reset" value="Sıfırla" class="btn btn-primary">
                                    </form>
                                </div>
                               

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
