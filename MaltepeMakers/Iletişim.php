<!doctype html>
<html><!-- InstanceBegin template="/Templates/maltepemakers-full-content.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Maltepe Makers - İletişim</title>
<!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="style.css">

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

  <a href="#"><img class="navbuton" src="images/Üye%20Ol.png" width="60" height="30" alt="uyeolbuton"></a>

  <img class="navbuton" src="images/Oturum%20Aç.png" width="86" height="30" alt="oturumacbuton" onClick="document.getElementById('id01').style.display='block'">
</div>
</div>


<div class="content">
<!-- InstanceBeginEditable name="content" -->
<h1>İletişim</h1><!-- InstanceEndEditable --></div>


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
    
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">İptal</button>
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

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
<!-- InstanceEnd --></html>