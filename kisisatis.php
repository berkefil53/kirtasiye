
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
        
        
        	<h2>Kişi Satış</h2>
        <form action="" method="post">
        KİŞİ SEC:<select name="kid">
        <?php
		$sorgu=mysql_query("select * from kisiler");
        while($satir=mysql_fetch_array($sorgu)){
		echo "<option value='".$satir["kisid"]."'>".$satir["kisiadi"]." ".$satir["kisisoyadi"]."</option>";
		}
		?>
        </select>
        <input name="goster" type="submit" value="GOSTER" />
        </form>
        <?php
		if(isset($_POST["goster"])){
			$kisid=$_POST["kid"];
			echo "<table border='1'>";
			echo "<tr><td>URUN ADI</td><td>URUN FİYATI</td><td>URUN ADETİ</td><td>TUTAR</td><td>TARIH</td>";
			?>
           <?php
			$toplam=0;
						$sorgu1=mysql_query("select * from satis s,urunler u where u.uid=s.uid and kisid=$kisid");
			while ($satir1=mysql_fetch_array($sorgu1)){

			echo "</tr>";
			echo "<td>".$satir1["uadi"]."</td>";
			echo "<td>".$satir1["ufiyat"]." TL</td>";
			echo "<td>".$satir1["adet"]."</td>";
			$toplam+=$satir1["ufiyat"]*$satir1["adet"];
			echo "<td>".($satir1["ufiyat"]*$satir1["adet"])." TL</td>";
			echo "<td>".date("d.m.Y h:i",$satir1["zaman"])."</td>";
			echo"</tr>";
			}
		
		?>
        </table><br />
		<?php
		echo "TOPLAM ALISVERİS=".$toplam." TL";
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
