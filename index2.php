
</table>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Oyuncu Ekle</title>
<style type="text/css">
<!--
body {
	background-image:url(images/arka_plan.jpg);
}
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center">
  <table width="750" border="0" cellpadding="0" cellspacing="0">
    <!--DWLayoutTable-->
    <tr style="background-image:url(images/x_01.jpg)">
      <td height="20" colspan="4" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
    <tr>
      <td width="47" rowspan="3" valign="top"  style="background-image:url(images/x_02.jpg)" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="306" height="87" valign="top" style="background-image:url(images/x_03.jpg)" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="349" valign="top"  style="background-image:url(images/x_06.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="48" rowspan="3" valign="top" style="background-image:url(images/x_05.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
    <tr>
      <td height=" 0" colspan="2" valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-image:url(images/x_07.jpg)">
        <!--DWLayoutTable-->
        <tr>
          <td width="655" height="42" valign="top">
	       <?php 
		  $menu =$_GET[menu];
		  switch ($menu)
	  {
		case 'liste':
      		  include('lst/tablo.php');
			    break;
	  	case 'detay':
      		  include('lst/veri.php');
			    break;
			
		case 'duzen': 
			include('oyuncu_ekle.php?duzen');
		    break;
		case 'oyuncu': 
			include('oyc/liste.php');
		    break;
	
		}
			?>	
			
			
			
			</td>
          </tr>
        <tr>
          <td height="432"></td>
        </tr>
              
        
      </table>
      </td>
    </tr>
    
    
    <tr>
      <td height="69" colspan="2" valign="top" style="background-image:url(images/x_08.jpg)"></td>
    </tr>
  </table>
  
</div>
</body>
</html>
