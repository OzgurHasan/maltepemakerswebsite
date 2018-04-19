<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta charset="utf-8">

<title>Maltepe Makers - Anasayfa</title>

<link rel="stylesheet" type="text/css" href="../style.css">

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


document.getElementById('foto').style.right=screen.width()/17;

document.getElementById('logo').style.right=screen.width()/10;
document.getElementById('logo').style.top=screen.width()/18;


	</script>
    
</head>
<body>
<div class="navbar">
<div class="nav"> <a href="../index.php"><img class="navbuton" src="../images/MaltepeMakersLogo.png" width="140" height="48" alt="maltepemakersbuton"></a>

  <a href="../index.php"><img class="navbuton" src="../images/Anasayfa.png" width="88" height="32" alt="anasayfabuton"></a>

  <a href="../EtkinliklerKayıt.php"><img class="navbuton" src="../images/Etkinlikler Kayıt.png" width="124" height="32" alt="etkinliklerbuton"></a>

  <a href="../Projelerimiz.php"><img class="navbuton" src="../images/Projelerimiz.png" width="88" height="32" alt="projelerimizbuton"></a>

  <a href="../Blog.php"><img class="navbuton" src="../images/Blog.png" width="62" height="32" alt="blogbuton"></a>

  <a href="../Hakkımızda.php"><img class="navbuton" src="../images/Hakkımızda.png" width="80" height="32" alt="hakkımızdabuton"></a>

  <a href="../Iletişim.php"><img class="navbuton" src="../images/İletişim.png" width="63" height="32" alt="iletisimbuton"></a>

  <img class="navbuton" src="../images/Üye Ol.png" width="60" height="30" alt="uyeolbuton" onClick="document.getElementById('id01').style.display='none'; document.getElementById('id02').style.display='block';">

  <img class="navbuton" src="../images/Oturum Aç.png" width="86" height="30" alt="oturumacbuton" onClick="document.getElementById('id01').style.display='block'; document.getElementById('id02').style.display='none';">
</div>
</div>


<div class="content">

<img src="../images/logo.png" width="7%" class="logo"><img class="foto" src="https://www.w3schools.com/howto/img_avatar.png"></img></img>

<div class="kriter">
<img src="../images/Kriterler.png" id="kriterbg">

<h2 id="baslik">KRİTERLER</h2>

<p id="kriteryazi"> Barış Poyraz hariç herkes girebilir.</p>

</div>

<div class="bilgi">
	<img src="../images/AtolyeBilgileri.png" id="bilgibg">
    
    <h2 id="baslik">ATÖLYE BİLGİSİ</h2>
    
    <p id="bilgiyazi"> Barış Poyraz'ı kovma atölyesi.</p>
</div>

<button type="button" class="cancelbtn" onClick="document.getElementById('id01').style.display='block'">Etkinliğe kayıt ol</button>

</div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page1.php">
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
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">İptal</button>
    </div>
  </form>
</div>



<div id="id02" class="modal2">
  
  <form class="modal2-content animate" action="/action_page2.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
   
    </div>

    <div class="container2">
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
	  
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">İptal</button>
    </div>
  </form>
</div>




<footer class="footer" style="position:absolute; bottom:0px; width: 100%;">
    <div class="container" id="sec4">

<a href="https://tr-tr.facebook.com/maltepemakers/" target="_blank"><img class="social" src="../images/facebook.png" alt="facebookbuton" width="40" height="40"></a>
<a href="https://twitter.com/maltepemaker" target="_blank"><img class="social" src="../images/twitter.png" alt="twitterbuton" width="40" height="40"></a>
<a href="https://www.instagram.com/maltepemakers/" target="_blank"><img class="social" src="../images/instagram.png" alt="instagrambuton" width="40" height="40"></a>
<a href="https://www.linkedin.com/maltepemakers" target="_blank"><img class="social" src="../images/linkedin.png" alt="linkedInbuton" width="40" height="40"></a>
<a href="https://plus.google.com/maltepemakers" target="_blank"><img class="social" src="../images/googlep.png" alt="googleplusbuton" width="40" height="40"></a>
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
</html>