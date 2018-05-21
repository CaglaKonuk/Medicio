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

  <title>Plastik ve Estetik Cerrahi</title>

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

  
  
  		<style>
		.multi-range, .multi-range * { box-sizing: border-box; padding: 100; float:right;   background-color: white;}
.multi-range { 
    position: relative; width: 160px; height:28px; margin-right:176px;
    border: 1px solid #ddd; font-family: arial;
	background-color: white;
}
.multi-range > hr { position: absolute; width: 100%; top: 50%; background-color: white; }
.multi-range > input[type=range] {
    width: calc(100% - 16px); 
    position: absolute; bottom: 6px; left: 0;
	background-color: white;
}
.multi-range > input[type=range]:last-of-type { margin-left: 10px; background-color: white; }
.multi-range > input[type=range]::-webkit-slider-thumb { transform: translateY(-18px); background-color: white; }
.multi-range > input[type=range]::-webkit-slider-runnable-track { -webkit-appearance: none; height: 0px;  background-color: white;}
.multi-range > input[type=range]::-moz-range-thumb { transform: translateY(-18px); background-color: white; }
.multi-range > input[type=range]::-moz-range-track { -webkit-appearance: none; height: 0px; background-color: white; }
.multi-range > input[type=range]::-ms-thumb { transform: translateY(-18px); background-color: white; }
.multi-range > input[type=range]::-ms-track { -webkit-appearance: none; height: 0px; background-color: white; }
.multi-range::after { 
    content: attr(data-lbound) ' - ' attr(data-ubound); 
    position: absolute; top: 0; left: 100%; white-space: nowrap;
    display: block; padding: 0px 4px; margin: -1px 2px;
    height: 26px; width: auto; border: 1px solid #ddd; 
    font-size: 13px; line-height: 26px;
	background-color: white;
}
		</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<form class="form-signin" action="db_kontrol.php" method="POST"/> 

  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">7/24 hizmet</p>
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

    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">Uzman Doktor Seçim Sistemi</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Doktorunuza siz karar verin</h4>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">
					<div>
<label> <p>Klinik için semt seçiniz</p></label>
<select name="semt" id="semt" class="form-control" type="number" style="padding: 0px 12px;">
  <option value="0"></option>
  <option value="1">Buca</option>
  <option value="2">Bornova</option>
  <option value="3">Balçova</option>
  <option value="4">Konak</option>
  <option value="5">Bayraklı</option>
  <option value="6">Karşıyaka</option>
  <option value="7">Alsancak</option>
  <option value="8">Güzelbahçe</option>
</select>
</br>


<label>İlgilendiğiniz Operasyonu Seçiniz</label>
<select name="operasyon" id="operasyon" class="form-control" type="number" style="padding: 0px 12px;">
  <option value="0"></option>
  <option value="1">Burun Estetiği</option>
  <option value="2">Yağ Emme</option>
  <option value="3">Yüz Germe/Alın Germe</option>
  <option value="4">Karın Germe</option>
  <option value="5">Meme Büyütme</option>
  <option value="6">Dudak Yarıkları</option>
  <option value="7">Lazer Lipoliz</option>
  <option value="8">Lazer Liposuction</option>
  <option value="9">Göz Kapağı Estetiği </option>
  <option value="10">Yüz Kemiği Estetiği</option>
  <option value="11">Kulak Estetiği</option>
  <option value="12">Dolgu, yüze yağ enjeksiyonu</option>
  <option value="13"></option>
</select>
</br>

<label>Doktorunuz için özel bir cinsiyet tercihiniz var ise belirtiniz </label>
<select name="cinsiyet" id="cinsiyet" class="form-control" type="number" style="padding: 0px 12px;">
  <option value="0"></option>
  <option value="Kadın">Kadın</option>
  <option value="Erkek">Erkek</option>

   </select>
   <label><p class="text-white-50">Muayene için belirlediğiniz fiyatın maximumu ve minumum değerlerini belirtiniz</p></label>
<div class='multi-range bg-light' data-lbound='0' data-ubound='500'>
    <hr />
    <input name="fiyatmin" id="fiyatmin"  type='range'  
           min='0' max='495' step='5' value='0' 
           oninput='this.parentNode.dataset.lbound=this.value;'
    />
    <input name="fiyatmax" id="fiyatmax"  type='range' 
           min='5' max='500' step='5' value='500' 
           oninput='this.parentNode.dataset.ubound=this.value;'
    />
	 
</div>





</br>
<INPUT type="reset" class="btn btn-lg btn-blue btn-block" value=" Seçimi Sil" onclick="Silme()" /></br>	
<button class="btn btn-lg btn-primary btn-block"  type="submit"> Doktor ara </button>
	
</div>
                  <ul class="lead-list">
                    
                  </ul>
                  <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                   
                  </p>
                </div>
              </div>


            </div>
            <div class="col-lg-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <img src="img/dummy/img-1.png" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    


    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3></h3>
                      <p>Saç Ekimi, Plastik Cerrahi ve Estetik Birimi seçimlerimiz ile sizlere en iyi hizmeti bulmak adına buradayız. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
                <h5>Medicio Hakkında</h5>
                <p>
                  Geniş veritabanı ile operasyonunuz için en uygun doktorları karşılaştırmanızı sağlar.
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

  


  
  
</body>

</html>





