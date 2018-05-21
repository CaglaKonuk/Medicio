<?php

error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE); 
require("baglan.php");
if(!$baglan){
	die("Bağlantı Başarısız".mysqli_connect_error());
}
else{
	echo "Bağlantı Başarılı";
	
}
$semt1=$_POST["semt"];
$operasyon1=$_POST["operasyon"];
$cinsiyet1=$_POST["cinsiyet"];
$fiyatmin=$_POST["fiyatmin"];
$fiyatmax=$_POST["fiyatmax"];



$sorgu="SELECT doktor.doktor_ad,doktor.doktor_soyad, doktor.yas,doktor.cinsiyet,operasyon.operasyon_adi,
klinik_semti.semt_adi,muayene.muayene_fiyati,muayene.muayene_id, doktor.doktor_referans
FROM doktor ,klinik_semti , muayene , operasyon
 WHERE doktor.doktor_id=muayene.doktor_id AND klinik_semti.semt_id=muayene.semt_id AND 
operasyon.operasyon_id=muayene.operasyon_id and doktor.operasyon_id=operasyon.operasyon_id  and
 klinik_semti.semt_id='$semt1'
 AND operasyon.operasyon_id='$operasyon1' AND doktor.cinsiyet='$cinsiyet1' and  
 muayene.muayene_fiyati<='$fiyatmax'
 AND muayene.muayene_fiyati>='$fiyatmin'
 ORDER BY doktor.doktor_referans DESC";

  
 
echo"<font color='#cococo' >deneme</font>";


$a=mysqli_query($baglan,$sorgu);
if(mysqli_num_rows($a)>0){
	while($row=mysqli_fetch_assoc($a)){
		echo "<font color='#ececec'> <br>Doktor Ad: ".$row["doktor_ad"]."<br>Doktor Soyadı: ".$row["doktor_soyad"]."<br>Refersans sayısı:
		".$row["doktor_referans"]."<br>Doktorun Yaşı: ".$row["yas"]."<br> Doktorun Cinsiyeti: ".$row["cinsiyet"]."
		<br> Operasyonun Adı: ".$row["operasyon_adi"]."
		<br>Muayene Fiyatı: ".$row["muayene_fiyati"]."<br>Semtin Adı: ".$row["semt_adi"]."<br></font>";
	}
}
 else{
	echo "Kayıt Bulunamadı" ;
}
?>


<!DOCTYPE html>
<html lang="tr">



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <head>
	
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head/>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head/>
<body>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">

 
  <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<form class="form-signin" action="db_kontrol.php" method="POST"/> 

  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">SİZE EN UYGUN DOKTOR</p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
           
           
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

        <section id="arkaplan" class="arkaplan">
            
        </section>


        <section id="bigidea" class="bigidea">
            <div class="container">
                <div class="row">
                    <div class="main_bigidea_area">
					<table class="table table-hover table-bordered text-white bg-primary  ">
        <thead>
            <tr>
                <td>Doktorun Adı</td>
                <td>Doktorun Soyadı</td>
				<td>Doktorun Referans sayısı</td>
				<td>Yaş</td>
				<td>Cinsiyet</td>
				<td>Operasyonun Ad</td>
				<td>Muayene Fiyatı</td>
				<td>Semtin Adı</td>
			
				
            </tr>
			</thead>
<?php
$semt1=$_POST["semt"];
$operasyon1=$_POST["operasyon"];
$cinsiyet1=$_POST["cinsiyet"];
$fiyatmin=$_POST["fiyatmin"];
$fiyatmax=$_POST["fiyatmax"];



$sorgu="SELECT doktor.doktor_ad,doktor.doktor_soyad, doktor.yas,doktor.cinsiyet,operasyon.operasyon_adi,
klinik_semti.semt_adi,muayene.muayene_fiyati,muayene.muayene_id, doktor.doktor_referans FROM doktor ,klinik_semti 
, muayene , operasyon WHERE doktor.doktor_id=muayene.doktor_id AND klinik_semti.semt_id=muayene.semt_id AND 
operasyon.operasyon_id=muayene.operasyon_id and doktor.operasyon_id=operasyon.operasyon_id  and
 klinik_semti.semt_id='$semt1'
 AND operasyon.operasyon_id='$operasyon1' AND doktor.cinsiyet='$cinsiyet1' and  
 muayene.muayene_fiyati<='$fiyatmax'
 AND muayene.muayene_fiyati>='$fiyatmin'";
  $connect=mysqli_connect("localhost","root","","doctor");
			mysqli_query($connect,"SET CHARACTER SET 'utf8'");
			mysqli_query($connect,"SET SESSION collation_connection ='utf8_unicode_ci'");
			if (!$connect) {
                die(mysqli_error());
            }
            
            $results = mysqli_query($connect,$sorgu);
            while($row = mysqli_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['doktor_ad']?></td>
                    <td><?php echo $row['doktor_soyad']?></td>
					<td><?php echo $row['doktor_referans']?></td>
					<td><?php echo $row['yas']?></td>
					<td><?php echo $row['cinsiyet']?></td>
                    <td><?php echo $row['operasyon_adi']?></td>
					<td><?php echo $row['muayene_fiyati']?></td>
					<td><?php echo $row['semt_adi']?></td>
									
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
					
                    </div>
					
                </div>
            </div>
        </section>




    




    

    

    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5</h5>
                <p>
                 
                </p>
              </div>
            </div>
            
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  
                </div>
              </div>
            </div>
           
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>
  


  
  
</body>

</html>









