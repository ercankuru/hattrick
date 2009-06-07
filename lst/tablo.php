<?php 
include('vt.inc');
$sorgu = mysql_query("SELECT * FROM kimlik WHERE mevki= '$_GET[mevki]' ");
$sorgu1 = mysql_query("SELECT * FROM kimlik  ");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"  >
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<table width="650" border="1" cellpadding="2" cellspacing="0">
<td colspan="4"> <form method="get" name="mevki" action="liste.php">
<select name="mevki" id="mevki">
      <option selected="selected">Mevki Seçiniz</option>
	  <option> Kaleci</option>
	  <option> Bek</option>
	  <option> Stoper</option>
	  <option> Orta Saha</option>
	  <option> Kanat</option>
      <option> Forvet</option>
      </select> <input type="submit" value="gönder" /></form></td>
	  <form method="get"  method="post"  action="liste.php"><input type="submit" value="gönder" /></form>
	 
	 <td colspan="6"><a href="../hattrick/index.php">Ana Sayfa</a></td>
  <tr>
    <td width="30"  height="30"><div align="center"><strong>Id</strong></div></td>
	<td width="30"  height="30"><div align="center"><strong>No</strong></div></td>
	<td width="20" height="30"><div align="center"><strong>Szn/Hft</strong></div></td>
    <td width="140" height="30"><div align="center"><strong>Adı - Soyadı</strong></div></td>
	<td width="20" height="30"><div align="center"><strong>Yaşı</strong></div></td>
    <td width="30" height="30"><div align="center"><strong>Mevki</strong></div></td>
    <td width="100" height="30"><div align="center"><strong>Geçinirlik</strong></div></td>
	<td width="100" height="30"><div align="center"><strong>Saldırganlık</strong></div></td>
    <td width="100" height="30"><div align="center"><strong>Dürüstlük</strong></div></td>
    <td width="100" height="30"><div align="center"><strong>İşlemler</strong></div></td>
	</tr>
  	<?php 
  while($oyuncu = mysql_fetch_row($sorgu)){
  echo "
  <tr>
    <td><div align='center'><strong>".strtoupper($oyuncu[0])."</strong></div></td></td>
	<td><div align='center'><strong>".strtoupper($oyuncu[1])."</strong></div></td></td>
    <td><div align='center'><strong>".strtoupper($oyuncu[3])."/".strtoupper($oyuncu[4])."</strong></div></td>
    <td><div align='center'><strong>".strtoupper($oyuncu[5])."</strong></div></td>
	<td><div align='center'><strong>".strtoupper($oyuncu[6])."</strong></div></td>
	<td><div align='center'><strong>".strtoupper($oyuncu[7])."</strong></div></td>
    <td><div align='center'><strong>".strtoupper($oyuncu[8])."</strong></div></td>
	<td><div align='center'><strong>".strtoupper($oyuncu[9])."</strong></div></td>
	<td><div align='center'><strong>".strtoupper($oyuncu[10])."</strong></div></td>
 
	<td><a href='dzn/duzen.php?id=$oyuncu[0]'>Düzenle</a>-
	<a href='index2.php?menu=detay&id=$oyuncu[0]'>Detay </a>
	<a href='index2.php?menu=grf&id=$oyuncu[0]'>grf</td>

	  </tr> ";
  }
  ?>
</table> 