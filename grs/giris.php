<?php
include('vt.inc');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Oyuncu Ekle</title>
<style type="text/css">
<!--
body {
	background-image:url(../images/arka_plan.jpg);
}
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
  <table width="750" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr style="background-image:url(../images/x_01.jpg)">
      <td height="20" colspan="4" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
    <tr>
      <td width="47" rowspan="3" valign="top" style="background-image:url(../images/x_02.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="306" height="87" valign="top" style="background-image:url(../images/x_03.jpg)" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="349" valign="top"  style="background-image:url(../images/x_06.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="48" rowspan="3" valign="top" style="background-image:url(../images/x_05.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
    <tr>
      <td height="474" colspan="2" valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-image:url(../images/x_07.jpg)">
        <!--DWLayoutTable-->
        <tr>
          <td width="169" height="24"></td>
          <td width="287">&nbsp;</td>
          <td width="199"></td>
          </tr>
        <tr>
          <td height="213"></td>
          <td valign="top"><img src="../images/pic.jpg" width="287" height="213" /></td>
          <td>&nbsp;</td>
          </tr>
        
        <tr>
          <td height="24"></td>
          <td valign="top"><a href="../index.php">Ana Sayfa</a><a href='javascript:history.back(-1)'>Geri</a></td>
          <td></td>
          </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td valign="top">
	        <div align="center">
	          <?php     
	$menu = $_GET[menu];
	  switch ($menu) {
	
	case "oyuncu_ekle":	
	$isle = mysql_query("INSERT INTO `hattrick`.`kimlik` (`id`,`no`,`tarih`,`sezon`,`hafta`,`adi`,`yas`,`mevki`,`o` ,`ayrica` ,`ve`) VALUES ('$_POST[t_id]','$_POST[no]', '$_POST[t_tarih]',  '$_POST[t_sezon]','$_POST[t_hafta]','$_POST[t_adi]', '$_POST[t_yas]', '$_POST[t_mevki]', '$_POST[t_o]',    '$_POST[t_ayrica]','$_POST[t_ve]')");
	if(!$isle){	echo "...!!!Islem Basarisiz Oldu!!!..."; } else {echo "...:::Isleminiz Gerçeklesti:::...";}
	break;
	case "form_ekle":	
	$isle = mysql_query("INSERT INTO `hattrick`.`form` (`id`,`no`,`tarih`,`sezon`,`hafta`,`form`,`kondisyon`,`tecrube` ,`liderlik`) VALUES('$_POST[t_id]', '$_POST[t_no]','$_POST[t_tarih]', '$_POST[t_sezon]','$_POST[t_hafta]', '$_POST[t_form]',  '$_POST[t_kondisyon]', '$_POST[t_tecrube]', '$_POST[t_liderlik]')");
	if(!$isle){	echo "...!!!Islem Basarisiz Oldu!!!..."; } else {echo "...:::Isleminiz Gerçeklesti:::...";}
	break;
	case "tsi_ekle":	
	$isle = mysql_query("INSERT INTO `hattrick`.`tsi` (`id`,`no`,`tarih`,`sezon`,`hafta`,`tsi`) VALUES('$_POST[t_id]', '$_POST[t_no]','$_POST[t_tarih]', '$_POST[t_sezon]', '$_POST[t_hafta]', '$_POST[t_tsi]')");
	if(!$isle){	echo "...!!!Islem Basarisiz Oldu!!!..."; } else {echo "...:::Isleminiz Gerçeklesti:::...";}
	break;
	case "yetenek_ekle":	
	$isle = mysql_query("INSERT INTO `hattrick`.`yetenek` (`id`,`no`,`tarih`,`sezon`,`hafta`, `kaleci`,`defans`,`okurucu`,`kanat`,`pas`,`golculuk`,`dtop`) VALUES('$_POST[t_id]','$_POST[t_no]', '$_POST[t_tarih]',  '$_POST[t_sezon]', '$_POST[t_hafta]',  '$_POST[t_kaleci]', '$_POST[t_defans]', '$_POST[t_okurucu]', '$_POST[t_kanat]','$_POST[t_pas]','$_POST[t_golculuk]','$_POST[t_dtop]')");
	if(!$isle){	echo "...!!!Islem Basarisiz Oldu!!!..."; } else {echo "...:::Isleminiz Gerçeklesti:::...";}
	break;
	case 'duzenle':
	$sorgu = mysql_query("UPDATE kimlik  SET id = '$_GET[t_id]',no=$_GET[t_no], tarih = '$_GET[t_tarih]',sezon=$_GET[t_sezon], hafta=$_GET[t_hafta], adi = '$_GET[t_adi]',yas=$_GET[t_yas],mevki = '$_GET[t_mevki]', o = '$_GET[t_o]',ayrica = '$_GET[t_ayrica]',ve = '$_GET[t_ve]' WHERE `id` =$_GET[t_id] LIMIT 1") ;

	if(!$sorgu){
			echo "Islem Gerçeklesemedi: 1. Veri tabanina erisim yok 2.Var olan ID veya Numara girmeye çalisiyorsunuz. ";
			} else {
			echo "Islem basarili bir sekilde gerçeklesti.";
			}
    case "gol":	
	$isle = mysql_query("INSERT INTO `hattrick`.`gol` (`id`,`no`,`tarih`,`sezon`,`hafta`,`kgol`,`hatrik`,`lig` ,`kupa`) VALUES('$_POST[t_id]', '$_POST[t_no]','$_POST[t_tarih]', '$_POST[t_sezon]','$_POST[t_hafta]', '$_POST[t_kgol]',  '$_POST[t_hatrik]', '$_POST[t_lig]', '$_POST[t_kupa]')");
	if(!$isle){	echo "...!!!Islem Basarisiz Oldu!!!..."; } else {echo "...:::Isleminiz Gerçeklesti:::...";}
	break;
			
	
}?>		  
            </div></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="188">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        
        

      </table>
      </td>
    </tr>
    
    
    <tr>
      <td height="69" colspan="2" valign="top" style="background-image:url(../images/x_08.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
