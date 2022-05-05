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
          <h2>ANASAYFA</h2>
          <div id="kutu1">
          <table border="1">
        <form action="" method="post">
        
       	<tr><td>KULLANICI ADI : </td><td><input name="kuladi" type="text" /></td></tr>
        <tr><td>SİFRE :</td><td> <input name="kulsifre" type="password" /></br></td></tr>
        <tr><td colspan="2"><div align="center"><input name="kaydet" type="submit" value="GİRİS" /></div></td></tr>
        <tr><td colspan="2"><div align="center"><a href=kayit.php>Kayıt Olmak İcin Tıklayınız</a></div></td></tr>
        </form>
        </table>
        </div>
		<?php
		if(isset($_POST["kaydet"])){
		$kuladi=$_POST["kuladi"];
		$kulsifre=$_POST["kulsifre"];
		$sorgu=mysql_query("select * from kullaniciler where kuladi='$kuladi' and kulsifre='$kulsifre'");
		if(mysql_num_rows($sorgu)==0){
		echo "Kullanıcı Adı Veya Sifre Yanlış !!";	
		}else{
		session_start();
		$_SESSION["kulid"]=mysql_result($sorgu,0,1);
		$_SESSION["kuladi"]=mysql_result($sorgu,0,2);
		header( "Location: index2.php");
		}
		}
				?>
        
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
