<?php
ob_start();
session_start();
if(!isset($_SESSION["kuladi"])){	
header( "Location: index.php");
}
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
        
        <?php
		$guid=$_GET["uid"];
		$sorgu=mysql_query("select uadi,ufiyat,uresim from urunler where uid='$guid'");
		$guadi=mysql_result($sorgu,0,0);
		$gufiyat=mysql_result($sorgu,0,1);
		$guresim=mysql_result($sorgu,0,2);
		?>
       	<h2>ÜRÜN EKLE</h2>
                <form action="" method="post">
          Urun:<input name="uadi" type="text" value="<?php echo $guadi; ?>"/><BR />
            Fiyatı:<input name="ufiyat" type="text" value="<?php echo $gufiyat ;?>"/><BR />
            Resim:<input name="uresim" type="text" value="<?php echo $guresim; ?>"/><BR />
          <input name="kaydet" type="submit" value="GÜNCELLE"  />
          </form>
          <?php
		  echo $_SESSION["secim"];
		  ?>
            <?php
			if(isset($_POST["kaydet"])){
			$uadi=$_POST["uadi"];
			$ufiyat=$_POST["ufiyat"];
			$uresim=$_POST["uresim"];
				mysql_query("update urunler set uadi='$uadi', ufiyat='$ufiyat' ,uresim='$uresim' where uid='$guid'");
			echo "<script>alert('ÜRÜN GÜNCELLENDİ');</script>";
			header("Location:urunler.php");
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
