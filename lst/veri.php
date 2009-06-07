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
	$sorgu = mysql_query("SELECT * FROM kimlik WHERE id='$_GET[id]' ");
	$oyuncu = @mysql_fetch_row($sorgu);
	$kontrol = mysql_query("SELECT COUNT(*) FROM kimlik  WHERE id='$_GET[id]' ");
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
<tr><td ><div align='center'><strong>Szn/Hft:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[3]/$oyuncu[4]</strong></div></td></td> 
<tr><td ><div align='center'><strong>Adi:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[5]</strong></div></td></td>
<tr><td ><div align='center'><strong>Yasi:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[6]</strong></div></td></td>
<tr><td ><div align='center'><strong>Mevki:</strong></div></td><td width'50'><div align='center'><strong>$oyuncu[7]</strong></div></td></td> 
<tr><td colspan='2'><div align='left'><strong>O,$oyuncu[8]; Ayrýca,$oyuncu[9]; ve,$oyuncu[10]</strong></div> </td></tr>
   <tr><td colspan='2'>
   <a href='oyuncu_ekle.php?menu=form_ekle&id=$oyuncu[0]&no=$oyuncu[1]'>Form Bilgileri</a>---
   <a href='oyuncu_ekle.php?menu=tsi_ekle&id=$oyuncu[0]&no=$oyuncu[1]'>Tsi Bilgileri</a>---
   <a href='oyuncu_ekle.php?menu=yetenek&id=$oyuncu[0]&no=$oyuncu[1]'>Yetenek</a>---
   <a href='oyuncu_ekle.php?menu=gol&id=$oyuncu[0]&no=$oyuncu[1]'>Goller</a></td></tr>
	  
   ";
  ?> 
</table></td>
   <!-- OYUNCU FORM BÝLGÝLERÝ-->

<td width="449" align="center" valign="top" > <table width="350" border="1"   cellpadding="2" cellspacing="0" >
  
  <?php

?>
  
  <tr>
    <tr>    <td width="450" colspan="8"><div align="center"><strong>...:::FORM BILGILERI:::...</strong></div></td></tr>
		 
        <td width="30" height="30"><div align="center"><strong>Szn/Hft</strong></div></td>
	 
        <td width="80" height="30"><div align="center"><strong>Form</strong></div></td>
        <td width="80" height="30"><div align="center"><strong>Kondisyon</strong></div></td>
        <td width="80" height="30"><div align="center"><strong>Tecrübe</strong></div></td>
	    <td width="80" height="30"><div align="center"><strong>Liderlik</strong></div></td>
        
	</tr>
  
  <?php 
   $tablo="SELECT * FROM form WHERE id='$_GET[id]' ORDER BY tarih DESC";

$sorgu=mysql_query($tablo);
       while ($oku1 = mysql_fetch_assoc($sorgu)) {
 
  echo " 

<tr>  
      <td width'50'><div align='center'><strong>$oku1[sezon]/$oku1[hafta]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oku1[form]</strong></div></td>
	    <td width'50'><div align='center'><strong>$oku1[kondisyon]</strong></div></td>
		 <td width'50'><div align='center'><strong>$oku1[tecrube]</strong></div></td>
		  <td width'50'><div align='center'><strong>$oku1[liderlik]</strong></div></td>


  ";
  }
  ?>
  <tr>
  
 <td width="450" colspan="3"><div align="center"><strong>...:::TSI BILGILERI:::...</strong></div></td><td width="450" colspan="3"><div align="center"><strong>...:::GOL BILGILERI:::...</strong></div></td></tr>
 	 
    <td width="30" height="30"><div align="center"><strong>Szn/Hft</strong></div></td>
	<td width="80" height="30"><div align="center"><strong>Tsi</strong></div></td>
	<td width="80" height="30"><div align="center"><strong>Hattick</strong></div></td>
	<td width="80" height="30"><div align="center"><strong>Lig Golleri</strong></div></td>
	<td width="80" height="30"><div align="center"><strong>Kupa Golleri</strong></div></td>
    
<?php
 
 $tablo1="SELECT * FROM gol WHERE id='$_GET[id]' ORDER BY tarih DESC";
 $tablo="SELECT * FROM tsi WHERE id='$_GET[id]' ORDER BY tarih DESC";
 $sorgu=mysql_query($tablo);
 $sorgu1=mysql_query($tablo1);
     
	   while ($oku1 = mysql_fetch_assoc($sorgu1)) {
	   while ($oku = mysql_fetch_assoc($sorgu)) {
echo "
  
 <tr>  
      <td width'50'><div align='center'><strong>$oku[sezon]/$oku[hafta]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oku[tsi]</strong></div></td>
	   <td width'50'><div align='center'><strong>$oku1[hatrik]</strong></div></td>
	   <td width'50'><div align='center'><strong>$oku1[lig]</strong></div></td>
	   <td width'50'><div align='center'><strong>$oku1[kupa]</strong></div></td>
	   
	   </tr>  
   




";
}
}
  ?>
  
</table></td>
<!-- OYUNCU YETENEK BILGILERI -->
    </tr>
    <tr>
      <td height="56" colspan="2" valign="top"><table width="650" border="1" cellpadding="2" cellspacing="0">
        <!--DWLayoutTable-->
 <td width="450" colspan="9"><div align="center"><strong>...:::YETENEK BILGILERI:::...</strong></div></td></tr>
 	<td width="30"  height="30"><div align="center"><strong>Id</strong></div></td>
 	 
    <td width="30" height="30"><div align="center"><strong>Szn/Hft</strong></div></td>
	<td width="80" height="30"><div align="center"><strong>Kalecilik</strong></div></td>     
	<td width="30"  height="30"><div align="center"><strong>Defans</strong></div></td>
 	<td width="30" height="30"><div align="center"><strong>O.Kurucu</strong></div></td>
    <td width="30" height="30"><div align="center"><strong>Kanat</strong></div></td>
	<td width="80" height="30"><div align="center"><strong>Pas</strong></div></td>  
	   <td width="30" height="30"><div align="center"><strong>Golcülük</strong></div></td>
	<td width="80" height="30"><div align="center"><strong>D.Toplar</strong></div></td>  
 
 <?php
  $tablo="SELECT * FROM yetenek WHERE id='$_GET[id]' ORDER BY tarih DESC";
  $sorgu=mysql_query($tablo);
       while ($oku = mysql_fetch_assoc($sorgu)) {
echo "<tr> <td width'50'><div align='center'><strong>$oku[id]</strong></div></td>
       
      <td width'50'><div align='center'><strong>$oku[sezon]/$oku[hafta]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oku[kaleci]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oku[defans]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oku[okurucu]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oku[kanat]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oku[pas]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oku[golculuk]</strong></div></td>
	  <td width'50'><div align='center'><strong>$oku[dtop]</strong></div></td>
      </tr>  
   ";
}
  ?>       
        







      </table></td>
    </tr>
    <tr>
      <td height="178" valign="top"><table width="150" border="1" cellpadding="2" cellspacing="0">
       
	    <?php
if($_GET[id] ==""){
echo "Lütfen Ürün Giriniz<br><a href='javascript:history.back(-1)'>Geri</a>";
exit;
}
$sorgu = mysql_query("SELECT * FROM gol WHERE id = '$_GET[id]' ORDER BY tarih DESC");
$oyuncu = @mysql_fetch_row($sorgu);
$kontrol = mysql_query("SELECT COUNT(*) FROM gol WHERE id = '$_GET[id]' ORDER BY tarih DESC");

if(mysql_result($kontrol,0,0) <1)
{
echo "Böyle Bir Ürün Bulunmamaktadir";
echo "<br><a href='javascript:history.back(-1)'>Geri</a>";
exit;
}
?>
        
            
        <?php 
  echo " 
    <tr><td colspan='2'><strong><div align='center'>...:::Gol Kariyeri:::...</div></strong></td></tr>
	 
	<tr><td><strong><div align='center'>K.Golleri:</td><td><div align='center'><strong>$oyuncu[5]</strong></div></td></tr>
	 
   
  ";
  ?> 
	   
	   
	   
	   
	   
	   
       
  </table>
</div>
