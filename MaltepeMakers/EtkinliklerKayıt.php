<!doctype html>
<html><!-- InstanceBegin template="/Templates/maltepemakers-full-content.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta charset="utf-8">
<link rel="icon" href="images/MaltepeMakersLogo1.PNG">
<meta name="viewport" content="width=device-width">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Maltepe Makers - Etkinlikler</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="style.css">
<script src="js/imageMapResizer.min.js"></script>
<script>
x = 0;
$(window).on('scroll', function () {
    if ($(this).scrollTop() > x) {
        if (!$('.navbar').hasClass('expand')) {
            $('.navbar').addClass('expand');
        }
      	x = $(this).scrollTop();
    } else {
        if ($('.navbar').hasClass('expand')) {
            $('.navbar').removeClass('expand');
        }
      x = $(this).scrollTop();
    }
});
	</script>
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>
<body>
<div class="navbar">
<div class="nav"> <a href="index.php"><img class="navbuton" src="images/MaltepeMakersLogo.png" width="140" height="48" alt="maltepemakersbuton"></a>

  <a href="index.php"><img class="navbuton" src="images/Anasayfa.png" width="88" height="32" alt="anasayfabuton"></a>

  <a href="EtkinliklerKayıt.php"><img class="navbuton" src="images/Etkinlikler%20Kayıt.png" width="124" height="32" alt="etkinliklerbuton"></a>

  <a href="Projelerimiz.php"><img class="navbuton" src="images/Projelerimiz.png" width="88" height="32" alt="projelerimizbuton"></a>

  <a href="Blog.php"><img class="navbuton" src="images/Blog.png" width="62" height="32" alt="blogbuton"></a>

  <a href="Hakkımızda.php"><img class="navbuton" src="images/Hakkımızda.png" width="80" height="32" alt="hakkımızdabuton"></a>

  <a href="Iletişim.php"><img class="navbuton" src="images/İletişim.png" width="63" height="32" alt="iletisimbuton"></a>

  <img class="navbuton" src="images/Üye%20Ol.png" width="60" height="30" alt="uyeolbuton" onClick="document.getElementById('id01').style.display='none'; document.getElementById('id02').style.display='block';">

  <img class="navbuton" src="images/Oturum%20Aç.png" width="86" height="30" alt="oturumacbuton" onClick="document.getElementById('id01').style.display='block'; document.getElementById('id02').style.display='none';">
</div>
</div>


<div class="content">
<!-- InstanceBeginEditable name="content" -->

<!-- Karıştır mutfakta -->

<h1 align="center">Etkinliklerimiz</h1>
<img name="Çarşamba1Plan" src="images/Çarşamba1Plan.png" width="2748" height="3639" id="Çarşamba1Plan" usemap="#Çarşamba1Plan" alt="" /><map name="Çarşamba1Plan" id="Çarşamba1Plan">
<area shape="rect" coords="1680,3006,2718,3460" href="Etkinlikler/etkinliktemplate.php" title="VEX IQ ile STEM+A Robotik Kodlama" alt="VEX IQ ile STEM+A Robotik Kodlama" />
<area shape="rect" coords="516,3006,1616,3460" href="Etkinlikler/etkinliktemplate.php" title="VEX IQ ile STEM+A Robotik Kodlama" alt="VEX IQ ile STEM+A Robotik Kodlama" />
<area shape="rect" coords="1680,2558,2222,3006" href="Etkinlikler/etkinliktemplate.php" title="NetLogo Bilimsel Simülasyona Giriş" alt="NetLogo Bilimsel Simülasyona Giriş" />
<area shape="rect" coords="516,2558,1616,3006" href="Etkinlikler/etkinliktemplate.php" title="NetLogo Bilimsel Simülasyona Giriş" alt="NetLogo Bilimsel Simülasyona Giriş" />
<area shape="rect" coords="1680,2094,2718,2558" href="Etkinlikler/etkinliktemplate.php" title="Bluedinio" alt="Bluedinio" />
<area shape="rect" coords="516,2094,1616,2558" href="Etkinlikler/etkinliktemplate.php" title="Sumo Robotu Atölyesi" alt="Sumo Robotu Atölyesi" />
<area shape="rect" coords="1680,1640,2718,2094" href="Etkinlikler/etkinliktemplate.php" title="Arduino ile Python Atölyesi" alt="Arduino ile Python Atölyesi" />
<area shape="rect" coords="516,1640,1616,2094" href="Etkinlikler/etkinliktemplate.php" title="Scratch ile Oyunumu Programlıyorum" alt="Scratch ile Oyunumu Programlıyorum" />
<area shape="rect" coords="2222,1182,2718,1640" href="Etkinlikler/etkinliktemplate.php" title="Kendi Logomu Tasarlıyorum" alt="Kendi Logomu Tasarlıyorum" />
<area shape="rect" coords="1680,1182,2222,1640" href="Etkinlikler/etkinliktemplate.php" title="Giyilebilir Teknoloji Atölyesi" alt="Giyilebilir Teknoloji Atölyesi" />
<area shape="rect" coords="516,1182,1616,1640" href="Etkinlikler/etkinliktemplate.php" title="Siber Uzayda Hayatta Kalmak" alt="Siber Uzayda Hayatta Kalmak" />
</map>


<script>

	$('map').imageMapResize();

</script>



<!-- InstanceEndEditable --></div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
   
    </div>

    <div class="container2">
      <label for="uname"><b>E-Mail Adresi</b></label>
      <input type="text" placeholder="E-Mail adresinizi girin..." name="uname" required>

      <label for="psw"><b>Şifre</b></label>
      <input type="password" placeholder="Şifrenizi girin..." name="psw" required>
        
      <button type="submit">Giriş Yap</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Beni hatırla
      </label>
      
      <p>Hesabınız yok mu? <a href="#" onClick="document.getElementById('id01').style.display='none'; document.getElementById('id02').style.display='block';">Üye Olun</a></p>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">İptal</button>
    </div>
  </form>
</div>



<div id="id02" class="modal2">
  
  <form class="modal2-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
   
    </div>

    <div class="container2">
      <label for="name"><b>İsim</b></label>
      <input type="text" placeholder="İsminizi girin..." name="name" required>
      
      <label for="surename"><b>Soyisim</b></label>
      <input type="text" placeholder="Soyisminizi girin..." name="surename" required>
      
      <label for="bday"><b>Doğum Tarihi</b></label><br />
      <input type="date" name?"bday"required><br />
      
      <label for="uname"><b>E-Mail Adresi</b></label>
      <input type="text" placeholder="E-Mail adresinizi girin..." name="uname" required>

      <label for="psw"><b>Şifre</b></label>
      <input type="password" placeholder="Şifrenizi girin..." name="psw" required>
	  
	  <label for="psw-repeat"><b>Şifre Tekrar</b></label>
      <input type="password" placeholder="Şifrenizi tekrar girin..." name="psw" required>
        
      <button type="submit">Üye Ol</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Beni hatırla
      </label>
	  
	  <p>Bir hesap oluşturarak <a href="#">Hizmet Şartları'nı</a> kabul etmiş olursunuz.</p>
      
      <p>Zaten hesabınız var mı? <a href="#" onClick="document.getElementById('id02').style.display='none'; document.getElementById('id01').style.display='block';">Oturum Açın</a></p>
	  
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">İptal</button>
    </div>
  </form>
</div>




<footer class="footer">
    <div class="container" id="sec4">

<a href="https://tr-tr.facebook.com/maltepemakers/"><img class="social" src="images/facebook.png" alt="facebookbuton" width="40" height="40"></a>
<a href="https://twitter.com/maltepemaker"><img class="social" src="images/twitter.png" alt="twitterbuton" width="40" height="40"></a>
<a href="https://www.instagram.com/maltepemakers/"><img class="social" src="images/instagram.png" alt="instagrambuton" width="40" height="40"></a>
<a href="https://www.linkedin.com/maltepemakers"><img class="social" src="images/linkedin.png" alt="linkedInbuton" width="40" height="40"></a>
<a href="https://plus.google.com/maltepemakers"><img class="social" src="images/googlep.png" alt="googleplusbuton" width="40" height="40"></a>
  </div>
  
  <div class="container">
  © MaltepeMakers Her Hakkı Saklıdır.
  </div>
</footer>


<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal || event.target == modal2) {
        modal.style.display = "none";
		modal2.style.display = "none";
    }
}
</script>
</body>
<!-- InstanceEnd --></html>