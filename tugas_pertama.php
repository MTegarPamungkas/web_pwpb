<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php
    $nama1 = "M Tegar Pamungkas";
    $nama2 = "Maulana Sindi";
    $nama3 = "Siti Husna Ludia";
    $umur1 = 16;
    $umur2 = 16;
    $umur3 = 16;
    $tinggi_badan1 = 161;
    $tinggi_badan2 = 170;
    $tinggi_badan3 = 157;
    $rata_rata = ($tinggi_badan1 + $tinggi_badan2 + $tinggi_badan3) / 3;
    $rata_rata_format = number_format($rata_rata,1);
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PWPB</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="tugas_pertama.php">TUGAS PERTAMA</a></li>
            <li><a href="tugas_kedua.php">TUGAS KEDUA</a></li>
            <li><a href="tugas_ketiga.php">TUGAS KETIGA</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">BERANDA</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <section class="jumbotron text-center">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4">
            <img class="img-thumbnail touch" src="img/husna.png"> <br>
            NAMA : <font color="red"> <?=$nama3?> </font><br>
            UMUR : <font color="red"> <?=$umur3?> </font><br>
            TINGGI BADAN: <font color="red"> <?=$tinggi_badan3?> </font>
          </div>
          <div class="col-sm-4">
            <img class="img-thumbnail touch" src="img/sindi.jpg"> <br>
            NAMA : <font color="red"> <?=$nama2?> </font><br>
            UMUR : <font color="red"> <?=$umur2?> </font><br>
            TINGGI BADAN: <font color="red"> <?=$tinggi_badan2?> </font>
          </div>
          <div class="col-sm-4">
            <img class="img-thumbnail touch" src="img/images.jpg"><br>
            NAMA : <font color="red"> <?=$nama1?> </font><br>
            UMUR : <font color="red"> <?=$umur1?> </font><br>
            TINGGI BADAN: <font color="red"> <?=$tinggi_badan1?> </font>
          </div>
        </div><br><br><br><br><hr><br>
           Rata-Rata Tinggi Badan : <?=$rata_rata_format?>

    </section>
 
         

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 