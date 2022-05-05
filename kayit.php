<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/siparis.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php
include("ayarlar.php");

?>
<!-- InstanceBeginEditable name="doctitle" -->
<title>KIRTASİYE SİTESİ...</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="default.css"/>
<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
</head>
<body>
<div id="header">
	<h1>NET Kırtasiye</h1>
</div>
<!-- end header -->
<div id="page">
	
    <!--KODLAR  BU BÖLÜME YAZILACAK....-->
        <div id="content"><!-- InstanceBeginEditable name="EditRegion1" -->
        
        
        	<h2>KAYIT SAYFASI</h2>
	 <table border="1">
       <form action="" method="post">
        
       	<tr><td>KULLANICI ADI : </td><td><input name="kuladi" type="text" /></td></tr>
        <tr><td>SİFRE :</td><td> <input name="kulsifre" type="password" /></br></td></tr>
        <tr><td>EMAİL :</td><td> <span id="sprytextfield2">
        <input type="text" name="email" id="email" />
        </span></td></tr>
        <tr><td colspan="2"><div align="center"><input name="kaydet" type="submit" value="KAYDOL" /></div></td></tr>
       </form>
        </table>

            <?php
      		if(isset($_POST["kaydet"])){
			$kuladi=$_POST["kuladi"];
			$kulsifre=$_POST["kulsifre"];
			$email=$_POST["email"];
			mysql_query("INSERT INTO kullaniciler(email,kuladi,kulsifre) VALUES ('$email','$kuladi','$kulsifre')");
			echo "<h2> Kaydınız Basarıyla Tamamlandı Anasayfaya Dönmek İcin <a href='index.php'> Tıklayınız</a>";
			
			}
			?>
        
        <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {validateOn:["blur", "change"]});
        </script>

        <!-- InstanceEndEditable -->
        
	
		
	
    
    
    
    
    
  </div>
	<!-- end content -->
	<div id="sidebar">
		<ul>
			<li id="menu" class="bg6">
				<h2 class="bg1">Menu</h2>
				<ul>
					<li class="first"><a href="index2.php" accesskey="1" title="">Anasayfa</a></li>
					<li><a href="urunler.php" accesskey="2" title="">Ürünler</a></li>
					<li><a href="urunekle.php" accesskey="3" title="">Ürün Ekle</a></li>
					<li><a href="urunsil.php" accesskey="4" title="">Ürün Sil</a></li>
                    <li><a href="kisiler.php" accesskey="5" title="">Kişiler</a></li>
                    <li><a href="kisiekle.php" accesskey="6" title="">Kişi Ekle</a></li>
                    <li><a href="kisisil.php" accesskey="7" title="">Kişi Sil</a></li>
                    <li><a href="kisisatis.php" accesskey="7" title="">Kişi Satış</a></li>
                    <li><a href="satis.php" accesskey="7" title="">Satış</a></li>
                    <li><a href="logout.php" accesskey="7" title="">Çıkış</a></li>

				</ul>
			</li>
			<li id="news">
				<h2 class="bg2">Kategoriler</h2>
				<ul>
					<li class="first"></li>
				</ul>
			</li>
			<li id="archives">
				<h2 class="bg3">Archives</h2>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<div id="footer">
	<p id="legal"><strong>bu bölüme numara ad soyad-sınıf yazılacak</strong></p>
</div>
<!-- end footer -->
</body>
<!-- InstanceEnd --></html>
