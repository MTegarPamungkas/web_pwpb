<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>pwpb</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      .dua{
      border:none;
      }
      .satu{
      border: none;
      }
      .tombol2{
        float: right;
        margin-top: 5%;
        margin-right: 25%;
      }
      .tombol1{
        float: left;
        margin-top: 5%;
        margin-left: 25%;
      }
      input{
      border: none;
      }
      table{
      padding: 3px;
      }
      
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse">
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
    <div class="container-fluid">
       <div class="row">
        <div class="col-sm-4">
          <form method="post" name="myform" action="simpan.php">

            <h1><center>DATA MURID</center></h1>

            <table align="center" border="1px">
              <tr>
                <td class="satu">Nama Lengkap</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="nl" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Nama Panggilan</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="np" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Jenis Kelamin</td>
                <td class="dua">:</td>
                <td>
                  <input type="radio" value="laki-laki" name="jk" required>laki-laki <br>
                  <input type="radio" value="perempuan" name="jk" required>Perempuan
                </td>
              </tr>

              <tr>
                <td class="satu">NISN</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="nisn" required>
                </td>
              </tr>

              <tr>
                <td class="satu">NIK</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="nik" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Tempat Tanggal Lahir</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="ttl" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Asal Sekolah</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="as" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Nomor SKHU</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="skhu" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Tanggal Diterima Disekolah ini</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="tddi" placeholder="MM/DD/YYY">
                </td>
              </tr>

              <tr>
                <td class="satu">Agama</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="agama" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Alamat</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="almt" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Nomor Telepon</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="nt">
                </td>
              </tr>

              <tr>
                <td class="satu">No HP</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="nh" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Tinggal Bersama Dengan</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="tbd" required>
                </td>
              </tr>

              <tr>
                <td class="satu">Tranportasi Kesekolah</td>
                <td class="dua">:</td>
                <td>
                  <input type="radio" value="angkutan umum" name="tk" required>Angkutan Umum<br>
                  <input type="radio" value="motor" name="tk" required>Motor
                </td>
              </tr>

              <tr>
                <td class="satu">NO KPS(kartu perlindungan sosial)</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="kps" placeholder="bagi yang memiliki">
                </td>
              </tr>
            </table>
          </div>

            <div class="col-sm-4">
              <h1><center>DATA AYAH KANDUNG</center></h1>

              <table align="center" border="1px">

              <tr>
                <td class="satu">Nama</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="nma">
                </td>
              </tr>

              <tr>
                <td class="satu">Tahun Lahir</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="tla">
                </td>
              </tr>

              <tr>
                <td class="satu">Pendidikan</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="pdda">
                </td>
              </tr>

              <tr>
                <td class="satu">Pekerjaan</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="pka">
                </td>
              </tr>

              <tr>
                <td class="satu">Penghasilan Perbulan</td>
                <td class="dua">:</td>
                <td>
                  <input type="radio" name="ppa" value="dibawah 2.000.000" required>>2.000.000<br>
                  <input type="radio" name="ppa" value="diatas 2.000.000" required><2.000.000<br>
                </td>
              </tr>
            </table>
          </div>
                      <div class="col-sm-4">
              <h1><center>DATA IBU KANDUNG</center></h1>

              <table align="center" border="1px">

              <tr>
                <td class="satu">Nama</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="nmi">
                </td>
              </tr>

              <tr>
                <td class="satu">Tahun Lahir</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="tli">
                </td>
              </tr>

              <tr>
                <td class="satu">Pendidikan</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="pddi">
                </td>
              </tr>

              <tr>
                <td class="satu">Pekerjaan</td>
                <td class="dua">:</td>
                <td>
                  <input type="text" name="pki">
                </td>
              </tr>

              <tr>
                <td class="satu">Penghasilan Perbulan</td>
                <td class="dua">:</td>
                <td>
                  <input type="radio" name="ppi" value="dibawah 2.000.000" required>>2.000.000<br>
                  <input type="radio" name="ppi" value="diatas 2.000.000" required><2.000.000<br>
                </td>
              </tr>
            </table>
            <input class="btn btn-danger tombol1" type="reset" name="reset" value="reset">
            <input class="btn btn-success tombol2" type="submit" name="kirim" value="simpan">
          </div>
        </form>
      </div>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 