<?php 
include('vt.inc');

if($_GET[id] =="")
{
echo "Lütfen Ürün Giriniz<br><a href='javascript:history.back(-1)'>Geri</a>";
exit;
}
$sorgu = mysql_query("SELECT * FROM kimlik WHERE id = '$_GET[id]'");
$oyuncu = @mysql_fetch_row($sorgu);
$kontrol = mysql_query("SELECT COUNT(*) FROM kimlik WHERE id = '$_GET[id]'");
$sorgu2 = mysql_query("SELECT * FROM kimlik WHERE id = '$oyuncu[0]' ORDER BY id DESC");
if(mysql_result($kontrol,0,0) <1)
{
echo "Böyle Bir Ürün Bulunmamaktadir";
echo "<br><a href='javascript:history.back(-1)'>Geri</a>";
exit;

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<link href="../css/style.css" rel="stylesheet" type="text/css" />
<table width="300" height="26" border="1">

  
     <?php 

  echo "
  <form method='get' name='duzeltme' action='islem.php'>

   <tr><td>Id:</td><td><input type='text' name='t_id' value='$oyuncu[0]'></td></tr>
   <tr><td>No:</td><td><input type='text' name='t_no' value='$oyuncu[1]'></td></tr>
   <tr><td>Tarih:</td><td><input type='text' name ='t_tarih' value='$oyuncu[2]'></td></tr>
   <tr><td>Sezon:</td><td><input type='text' name ='t_sezon' value='$oyuncu[3]'></td></tr>
   <tr><td>Hafta:</td><td><input type='text' name ='t_hafta' value='$oyuncu[4]'></td></tr>	
   <tr><td>ADI & SOYADI:</td><td><input type='text' name ='t_adi' value='$oyuncu[5]'></td></tr>
   <tr><td>Yaşı:</td><td><input type='text' name ='t_yas' value='$oyuncu[6]'></td></tr>
   <tr><td>Mevki:</td><td><input type='text' name ='t_mevki' value='$oyuncu[7]'></td></tr>
   <tr><td>O:</td><td><input type='text' name ='t_o' value='$oyuncu[8]'></td></tr>
   <tr><td>Ayrıca:</td><td><input type='text' name ='t_ayrica' value='$oyuncu[9]'></td></tr> 
   <tr><td>Ve:</td><td><input type='text' name ='t_ve' value='$oyuncu[10]'></td></tr>
   <tr><td><input type='submit' value='gönder' /></td><td><a href='javascript:history.back(-1)'>Geri</a></td></td>";
  
 
  ?>
  
  
</table>
<p>&nbsp;</p>
