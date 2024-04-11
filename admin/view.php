<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include '../cek.php';
    if($role!=='Admin'){
        header("location:../login.php");
    };

    $userid = $_GET['u'];

    //cek dulu sudah pernah submit belum
    $cekdulu = mysqli_query($conn,"select * from userdata where userid='$userid'");
    $ambil = mysqli_fetch_array($cekdulu);

	?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dinkominfo: Tampilkan Pendaftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/logo.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                    <a href="index.php"><img src="../logo.png" alt="logo" width="100%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                    <ul class="metismenu" id="menu">
							<li><a href="index.php"><span>Dashboard</span></a></li>
                            <li class="active">
                                <a href="form.php"><i class="ti-layout"></i><span>Formulir</span></a>
                            </li>
                            <li>
                                <a href="indexpres.php?halaman=presensi" target="_blank"><i class="ti-layout"></i><span>Presensi</span></a>
                            </li>
                            <li>
                                <a href="user.php"><i class="ti-layout"></i><span>User Terdaftar</span></a>
                            </li>
                            <li>
                                <a href="admin.php"><i class="ti-layout"></i><span>Kelola Admin</span></a>
                            </li>
                            <li>
                                <a href="../logout.php"><span>Logout</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
			
            <!-- page title area end -->
            <div class="main-content-inner">

                <!-- panduan -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                    <a href="form.php" class="btn btn-info" style="margin-bottom:2%;">Kembali</a>
                        
                                


<!------------------ Pisahin ------------------->


                <form method="post" enctype="multipart/form-data">
                <!-- formulir -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Sekolah / Perguruan Tinggi</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Sekolah / Perguruan Tinggi</label>
                                                <input name="namainstansi" type="text" class="form-control" maxlength="50" value="<?php echo $ambil['namainstansi']?>" disabled>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Email Sekolah / Perguruan Tinggi</label>
                                                <input name="emailinstansi" type="text" class="form-control" maxlength="50" value="<?php echo $ambil['emailinstansi']?>" disabled>
                                            </div>
                                            </div>
                                        </div>

                                            <div class="form-group">
                                                <label>Alamat Sekolah / Perguruan Tinggi</label>
                                                <input name="alamat" type="text" class="form-control" placeholder="Alamat" value="<?php echo $ambil['alamat']?>" disabled>
                                            </div>

                                            <?php
                                            //get alamat
                                            $ambilprov = $ambil['provinsi'];
                                            $prov1 = mysqli_query($conn,"select name from provinces where id='$ambilprov'");
                                            $prov = mysqli_fetch_array($prov1)['name'];
                                            $ambilkota = $ambil['kabupaten'];
                                            $kab1 = mysqli_query($conn,"select name from regencies where id='$ambilkota'");
                                            $kab = mysqli_fetch_array($kab1)['name'];
                                            $ambilkec = $ambil['kecamatan'];
                                            $kec1 = mysqli_query($conn,"select name from districts where id='$ambilkec'");
                                            $kec = mysqli_fetch_array($kec1)['name'];
                                            $ambilkel = $ambil['kelurahan'];
                                            $kel1 = mysqli_query($conn,"select name from villages where id='$ambilkel'");
                                            $kel = mysqli_fetch_array($kel1)['name'];

                                            ?>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                            <label>Provinsi:</label>
                                            <input type="text" class="form-control" value="<?php echo $prov; ?>" disabled>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                            <label>Kota/Kabupaten:</label>
                                            <input type="text" class="form-control" value="<?php echo $kab; ?>" disabled>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                        <div class="form-group">
                                            <label>Kecamatan:</label>
                                            <input type="text" class="form-control" value="<?php echo $kec; ?>" disabled>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                            <label>Kelurahan:</label>
                                            <input type="text" class="form-control" value="<?php echo $kel; ?>" disabled>
                                        </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col">
                                        <div class="form-group">
                                            <label>Nomor Telepon Sekolah / Perguruan Tinggi</label>
                                            <input name="tlpinstansi" type="text" class="form-control" maxlength="16" value="<?php echo $ambil['tlpinstansi']?>" disabled>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col">
                                        <div class="form-group">
                                            <label>Pilihan Bidang</label>
                                            <input type="text" class="form-control" value="<?php echo $ambil['bidangpkl']?>" disabled>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                        <div class="col">
                                        <div class="form-group">
                                            <label>Mulai PKL</label>
                                            <input name="mulaipkl" type="date" class="form-control" value="<?php echo $ambil['mulaipkl']?>" disabled>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="form-group">
                                            <label>Selesai PKL</label>
                                            <input name="selesaipkl" type="date" class="form-control" value="<?php echo $ambil['selesaipkl']?>" disabled>
                                        </div>
                                        </div>
                                    </div>
                                        <div class="market-status-table mt-4">
                                    <div class="table-responsive">
                                    <doc src="../user/<?php echo $ambil['suratpermohonan']?>">        
                                    <div class="market-status-table mt-4">
                                    <div class="table-responsive">
                                    <doc src="../user/<?php echo $ambil['proposal']?>">        
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

                    <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Peserta</h2>
                                </div>
                                <h2>Peserta 1</h2>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>NIS/NIM Peserta</label>
                                                <input name="nim1" type="text" class="form-control" value="<?php echo $ambil['nim1']?>" disabled>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Peserta</label>
                                                <input name="nama1" type="text" class="form-control" value="<?php echo $ambil['nama1']?>" disabled>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Jurusan Peserta</label>
                                                <input name="jurusan1" type="text" class="form-control" value="<?php echo $ambil['jurusan1']?>" disabled>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nomor Telepon Peserta</label>
                                                <input name="tlp1" type="text" class="form-control" value="<?php echo $ambil['tlp1']?>" disabled>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Email Peserta</label>
                                                <input name="email1" type="text" class="form-control" value="<?php echo $ambil['email1']?>" disabled>
                                            </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <h2>Peserta 2</h2>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>NIS/NIM Peserta</label>
                                                <input name="nim2" type="text" class="form-control" value="<?php echo $ambil['nim2']?>" disabled>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Peserta</label>
                                                <input name="nama2" type="text" class="form-control" value="<?php echo $ambil['nama2']?>" disabled>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Jurusan Peserta</label>
                                                <input name="jurusan2" type="text" class="form-control" value="<?php echo $ambil['jurusan2']?>" disabled>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nomor Telepon Peserta</label>
                                                <input name="tlp2" type="text" class="form-control" value="<?php echo $ambil['tlp2']?>" disabled>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Email Peserta</label>
                                                <input name="email2" type="text" class="form-control" value="<?php echo $ambil['email2']?>" disabled>
                                            </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <h2>Peserta 3</h2>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>NIS/NIM Peserta</label>
                                                <input name="nim3" type="text" class="form-control" value="<?php echo $ambil['nim3']?>" disabled>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nama Peserta</label>
                                                <input name="nama3" type="text" class="form-control" value="<?php echo $ambil['nama3']?>" disabled>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Jurusan Peserta</label>
                                                <input name="jurusan3" type="text" class="form-control" value="<?php echo $ambil['jurusan3']?>" disabled>
                                            </div>
                                            </div>
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Nomor Telepon Peserta</label>
                                                <input name="tlp3" type="text" class="form-control" value="<?php echo $ambil['tlp3']?>" disabled>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                            <div class="form-group">
                                                <label>Email Peserta</label>
                                                <input name="email3" type="text" class="form-control" value="<?php echo $ambil['email3']?>" disabled>
                                                <input type="hidden" value="<?=$userid;?>" name="id">
                                            </div>
                                            </div>
                                        </div>
                                        
                            </div>
                        </div>
                    </div>
                </div>

                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Seleksi</button>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

                </div>
         

                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Copyright © 2023 Dinas Komunikasi dan Informatika Kabupaten Blora</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- modal input -->
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Seleksi Peserta PKL</h4>
						</div><form method="post">
						<div class="modal-body">
							
								<div class="form-group">
                                    <label>Pilihan Seleksi</label>
                                    <select class="form-control" name="seleksi">
                                    <option value="Diterima">Diterima</option>
                                    <option value="Tidak Diterima">Tidak Diterima</option>
                                    </select>
								</div>
                                <input type="hidden" value="<?=$userid;?>" name="id">
								<div class="form-group">
									<label for="suratbalasan" class=" form-control-label">Surat Balasan (PDF), maks 4Mb</label>
									<input type="file" id="suratbalasan" name="suratbalasan" class="form-control-file">
								</div>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
								<input type="submit" class="btn btn-primary" name="sel" value="Seleksi">
							</div>
						</form>
					</div>
				</div>
			</div>
   
    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="../assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="../assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>

<?php
include '../dbconnect.php';

if (isset($_POST['sel'])) {
    $seleksi = $_POST['seleksi'];
    $suratbalasan = ['suratbalasan'];
    
            mysqli_query($conn, "update userdata set seleksi = '$seleksi', suratbalasan = '$suratbalasan' where userid='$userid'");

    
    }
         
?>