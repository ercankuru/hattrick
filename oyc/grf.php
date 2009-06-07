<div align="center">
  <table width="650" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr>
      <td width="201" height="57" valign="top">

<!-- OYUNCU GENEL BÝLGÝLERÝ -->
<table width="200" border="1" cellpadding="2" cellspacing="0" >
  <?php 
include('vt.inc');
if($_GET[id] =="")
{ echo "Lütfen Ürün Giriniz<br><a href='javascript:history.back(-1)'>Geri</a>"; exit; } 
	$sorgu = mysql_query("SELECT * FROM kimlik WHERE id = '$_GET[id]'");
	$oyuncu = @mysql_fetch_row($sorgu);
	$kontrol = mysql_query("SELECT COUNT(*) FROM kimlik WHERE id = '$_GET[id]' ");
if(mysql_result($kontrol,0,0) <1) {
echo "Böyle Bir Ürün Bulunmamaktadir";
echo "<br><a href='javascript:history.back(-1)'>Geri</a>";
exit; }
?>
<?php 
  echo "
   <tr><td colspan='2'><div align='center'><strong> ...:::Oyuncu Kimlik Bilgisi:::...</strong></div></td>
<tr><td ><div align='center'><strong>Id:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[0]</strong></div></td></td>
<tr><td ><div align='center'><strong>No:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[1]</strong></div></td></td>
<tr><td ><div align='center'><strong>Sezon:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[3]</strong></div></td></td> 
<tr><td ><div align='center'><strong>Hafta:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[4]</strong></div></td></td> 
<tr><td ><div align='center'><strong>Adi:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[5]</strong></div></td></td>
<tr><td ><div align='center'><strong>Yasi:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[6]</strong></div></td></td>
<tr><td ><div align='center'><strong>Mevki:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[7]</strong></div></td></td> 
<tr><td colspan='2'><div align='left'><strong>O,$oyuncu[8]; Ayrýca,$oyuncu[9]; ve,$oyuncu[10]</strong></div> </td></tr>
   <tr><td colspan='2'><a href='oyuncu_ekle.php?menu=form_ekle&id=$oyuncu[0]'>Form Bilgileri</a>---<a href='oyuncu_ekle.php?menu=tsi_ekle&id=$oyuncu[0]'>Tsi Bilgileri</a>---<a href='oyuncu_ekle.php?menu=yetenek&id=$oyuncu[0]'>Yetenek</a></td></tr>
	  
   ";
  ?> 
</table></td>
   <!-- OYUNCU FORM BÝLGÝLERÝ-->

<td width="449" align="center" valign="top" > <table width="350" border="1"   cellpadding="2" cellspacing="0" >
  
  <?php
 
$sorgu = mysql_query("SELECT * FROM form WHERE id = '$_GET[id]' ");
$oyuncu = @mysql_fetch_row($sorgu);
 
?>
  
  <tr>
    <tr>    <td width="450" colspan="7"><div align="center"><strong>...:::FORM BILGILERI:::...</strong></div></td></tr>
  <td width="30"  height="30"><div align="center"><strong>Id</strong></div></td>
        <td width="30" height="30"><div align="center"><strong>Sezon</strong></div></td>
		<td width="30" height="30"><div align="center"><strong>Hafta</strong></div></td>
        <td width="80" height="30"><div align="center"><strong>Form</strong></div></td>
        <td width="80" height="30"><div align="center"><strong>Kondisyon</strong></div></td>
        <td width="80" height="30"><div align="center"><strong>Tecrübe</strong></div></td>
	    <td width="80" height="30"><div align="center"><strong>Liderlik</strong></div></td>
        
	</tr>
  
  <?php 
  echo " 

 <tr> <td width'50'><div align='center'><strong>$oyuncu[0]</strong></div></td>
      <td width'50'><div align='center'><strong>$oyuncu[2]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oyuncu[3]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oyuncu[4]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oyuncu[5]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oyuncu[6]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oyuncu[7]</strong></div></td>
	   </tr>  
   
  ";
  ?>

  
</table></td>
