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
  	<section>
    	<div class="container-fluid">
      		 <div class="row">
       			 <div class="col-sm-4">
       			 	<h1><center>DATA MURID</center></h1>
    	
					<table align="center" border="1px">
						<tr>
							<td class="satu">Nama Lengkap</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['nl'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Nama Panggilan</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['np'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Jenis Kelamin</td>
							<td class="dua">:</td>
							<td>
								<?php
								if(isset($_POST['kirim'])){
									echo ''.$_POST['jk'].'<br/>';
										if(isset($jk) && $jk == "laki-laki")
										echo "jenis kelamin: $jk";
										if(isset($jk) && $jk == "perempuan")
										echo "checked";
								}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
								}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">NISN</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['nisn'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">NIK</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['nik'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Tempat Tanggal Lahir</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['ttl'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Asal Sekolah</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['as'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Nomor SKHU</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['skhu'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Tanggal Diterima Disekolah ini</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['tddi'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Agama</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['agama'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Alamat</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['almt'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Nomor Telepon</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['nt'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">No HP</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['nh'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Tinggal Bersama Dengan</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['tbd'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">Tranportasi Kesekolah</td>
							<td class="dua">:</td>
							<td>
								<?php
								if(isset($_POST['kirim'])){
									echo ''.$_POST['tk'].'<br/>';
										if(isset($tk) && $tk == "Angkutan Umun")
										echo "jenis kelamin: $jk";
										if(isset($tk) && $tk == "Motor")
										echo "checked";
								}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
								}
								?>
							</td>
						</tr>

						<tr>
							<td class="satu">NO KPS(kartu perlindungan sosial)</td>
							<td class="dua">:</td>
							<td>
								<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['kps'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
							</td>
						</tr>
					</table>
    			</div>
    			<div class="col-sm-4">
	              	<h1><center>DATA AYAH KANDUNG</center></h1>

	             	<table align="center" border="1px">

	              		<tr>
			                <td class="satu">Nama Ayah</td>
			                <td class="dua">:</td>
			                <td>
	                  			<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['nma'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
	                		</td>
	              		</tr>

	             		<tr>
			                <td class="satu">Tahun Lahir</td>
			                <td class="dua">:</td>
			                <td>
			                    <?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['tla'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
			                </td>
	            		</tr>

	             		<tr>
			                <td class="satu">Pendidikan</td>
			                <td class="dua">:</td>
			                <td>
			                	<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['pdda'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
			                </td>
	              		</tr>

	             		<tr>
			                <td class="satu">Pekerjaan</td>
			                <td class="dua">:</td>
			                <td>
			                    <?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['pka'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
			                </td>
	              		</tr>

	              		<tr>
			                <td class="satu">Penghasilan Perbulan</td>
			                <td class="dua">:</td>
			                <td>
				                <?php
								if(isset($_POST['kirim'])){
									echo ''.$_POST['ppa'].'<br/>';
										if(isset($ppa) && $ppa == "Dibawah 2.000.000")
										echo "jenis kelamin: $jk";
										if(isset($ppa) && $ppa == "diatas 2.000.000")
										echo "checked";
								}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
								}
								?>
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
	                  			<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['nmi'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
	                		</td>
	              		</tr>

	             		<tr>
			                <td class="satu">Tahun Lahir</td>
			                <td class="dua">:</td>
			                <td>
			                    <?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['tli'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
			                </td>
	            		</tr>

	             		<tr>
			                <td class="satu">Pendidikan</td>
			                <td class="dua">:</td>
			                <td>
			                  	<?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['pddi'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
			                </td>
	              		</tr>

	             		<tr>
			                <td class="satu">Pekerjaan</td>
			                <td class="dua">:</td>
			                <td>
			                    <?php
									if(isset($_POST['kirim'])){
										echo ''.$_POST['pki'].'<br/>';
												}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
									}
								?>
			                </td>
	              		</tr>

	              		<tr>
			                <td class="satu">Penghasilan Perbulan</td>
			                <td class="dua">:</td>
			                <td>
				                <?php
								if(isset($_POST['kirim'])){
									echo ''.$_POST['ppi'].'<br/>';
										if(isset($ppi) && $ppi == "Dibawah 2.000.000")
										echo "jenis kelamin: $ppi";
										if(isset($ppi) && $ppi == "diatas 2.000.000")
										echo "checked";
								}else{
									echo 'Tidak ada aksi klik pada tombol form<br/>';
								}
								?>
			                </td>
			            </tr>
	            	</table>
	          	</div>
    		</div>
    	</div>
	</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 