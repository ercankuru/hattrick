<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Oyuncu Ekle</title>
<style type="text/css">
<!--
body {
	background-image:url(images/arka_plan.jpg);
}
.style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
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
      <td width="47" rowspan="3" valign="top" style="background-image:url(images/x_02.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="306" height="87" valign="top" style="background-image:url(images/x_03.jpg)" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="349" valign="top"  style="background-image:url(images/x_06.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="48" rowspan="3" valign="top" style="background-image:url(images/x_05.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
    <tr>
      <td height="475" colspan="2" valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-image:url(images/x_07.jpg)">
        <!--DWLayoutTable-->
        <tr>
          <td width="368" rowspan="2" valign="top"><table width="20" border="0" cellpadding="0" cellspacing="0">
            <?php
	 
	 
	  $menu = $_GET[menu];
	  
	  switch ($menu)
	  {
	 
	  case "oyuncu_ekle":
	  echo "<div align='center'<strong>...:::Yeni Oyuncu Ekleme:::...<br><br>
<form name='oyuncuekleme' action='grs/giris.php?menu=oyuncu_ekle' method='POST'>
  <tr><td><strong>Id:</td><td><input type='text' name='t_id'  id='t_id'></td></tr>
  <tr><td><strong>No:</td><td><input type='text' name='t_no'  id='t_no'></td></tr>
  <tr><td><strong>Tarih:</td><td><input type='text' name='t_tarih' id='t_tarih'></td></tr>
  <tr><td><strong><strong>Sezon:</td><td><select name='t_sezon'>
      <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
	  <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option></td></tr>
  <tr><td><strong>Hafta:</td><td><select name='t_hafta'>
      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>      <option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14
	  </option></td></tr>
  <tr><td><strong>Adi:</td><td><input type='text' name='t_adi' id='t_adi'></td><tr>
  <tr><td><strong>Yasi:</td><td><input type='text' name='t_yas' id='t_yas'></td><tr>
  <tr><td><strong>Mevki:</td><td><select name='t_mevki'>
  	  <option selected='selected'>Seçiniz</option><option>Kaleci</option><option>Bek</option><option>Stoper</option>
	  <option>Orta Saha</option><option>Kanat</option><option>Forvet</option> </td></tr>
  <tr><td><strong>O:</td><td><select name='t_o'>
  	  <option selected='selected'>Seçiniz</option><option>sevilen takim arkadasi</option><option>popüler bir oyuncu</option>		
	  <option>sempatik bir oyuncu</option><option>canayakin bir oyuncu</option><option>kavgaci bir oyuncu</option>
	  <option>pislik bir oyuncu</option> </td></tr>
  <tr><td><strong>Ayrica:</td><td><select name='t_ayrica'>
      <option selected='selected'>Seçiniz</option><option>dengesiz</option><option>atesli</option><option>huysuz</option>		
	  <option>dengeli</option><option>sakin</option><option>durgun</option> </td></tr>	
  <tr><td><strong>Ve:</td><td><select name='t_ve'>
      <option selected='selected'>Seçiniz</option><option>aziz gibi</option><option>erdemli</option><option>güvenilir</option>		
	  <option>dürüst</option><option>sahtekar</option><option>çirkef</option></td></tr>	
<tr><td colspan='2' align='right'><input type='submit' value='gönder' /></tr></td>
</form>"; break;
	  case "form_ekle":
	  echo "Oyuncu Formu Ekleme:<br>
<form method='post' name='duzeltme' action='grs/giris.php?menu=form_ekle'  >
  <tr><td>Id:</td><td><input type='text' name='t_id' id='t_id' value='$_GET[id]'></td></tr>
  <tr><td>No:</td><td><input type='text' name='t_no' id='t_id' value='$_GET[no]'></td></tr>
  <tr><td>Tarih:</td><td><input type='text' name ='t_tarih' id='t_tarih'></td></tr>
  <tr><td>Sezon:</td><td><select name='t_sezon'>
      <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
	  <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option></td></tr>
  <tr><td>Hafta:</td><td><select name='t_hafta'>
      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>      <option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14
	  </option></td></tr>
  <tr><td>Form:</td><td><select name='t_form'>
  	  <option selected='selected'>Seçiniz</option><option> çok iyi</option><option>kaliteli</option><option>yeterli</option>
      <option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option><option>felaket</option>
      <option>kazma</option></td></tr>
  <tr><td>Kondisyon:</td><td><select name='t_kondisyon'>
      <option selected='selected'>Seçiniz</option><option> çok iyi</option><option>kaliteli</option><option>yeterli</option>
      <option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option><option>felaket</option>
	  <option>kazma</option></td></tr>
  <tr><td>Tecrübe:</td><td><select name='t_tecrube'>
  	  <option selected='selected'>Seçiniz</option><option>mucizevi</option><option>ütopik</option><option>sihirli</option>
	  <option>efsanevi</option><option>dünya disi</option><option>devasa</option><option>doga üstü</option>
	  <option>dünya çapinda</option><option>muhtesem</option><option>görkemli</option><option>mükemmel</option>
	  <option>üstün</option><option>çok iyi</option><option>kaliteli</option><option>yeterli</option><option>vasat</option>
	  <option>zayif</option><option>kötü</option><option>berbat</option><option>felaket</option><option>kazma</option>	</td></tr>
  <tr><td>Liderlik:</td><td>  <select name='t_liderlik'  >
      <option selected='selected'>Seçiniz</option><option> çok iyi</option><option>kaliteli</option><option>yeterli</option>,
	  <option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option><option>felaket</option>
	  <option>kazma</option></td></tr>
  <tr><td><input type='submit' value='gönder' /></tr></td> 
</form>";break;
	  
	  case "tsi_ekle":
	  echo "Oyuncu TSI Ekleme:<br>
	  		<form method='post' name='duzeltme' action='grs/giris.php?menu=tsi_ekle'  >
  <tr><td>Id:</td><td><input type='text' name='t_id' id='t_id' value='$_GET[id]'></td></tr>
  <tr><td>No:</td><td><input type='text' name='t_no' id='t_no' value='$_GET[no]'></td></tr>
  <tr><td>Tarih:</td><td><input type='text' name ='t_tarih' id='t_tarih'></td></tr>
  <tr><td>Sezon:</td><td><select name='t_sezon'>
      <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
	  <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option></td></tr>
  <tr><td>Hafta:</td><td><select name='t_hafta'>
  	  <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option>
	  <option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option>
	  <option>13</option><option>14</option></td></tr>
  <tr><td>TSI:</td><td><input type='text' name ='t_tsi' id='t_tsi'></td></tr>
  <tr><td><input type='submit' value='gönder' /></tr></td> 
</form>"; break;
case "yetenek":
	  echo "Oyuncu Yetenek Ekleme:<br>
	  		<form method='post' name='duzeltme' action='grs/giris.php?menu=yetenek_ekle'  >
  <tr><td>Id:</td><td><input type='text' name='t_id' id='t_id' value='$_GET[id]'></td></tr>
  <tr><td>No:</td><td><input type='text' name='t_no' id='t_no' value='$_GET[no]'></td></tr>
  <tr><td>Tarih:</td><td><input type='text' name ='t_tarih' id='t_tarih'></td></tr>
  <tr><td>Sezon:</td><td><select name='t_sezon'>
      <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
	  <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option></td></tr>
  <tr><td>Hafta:</td><td><select name='t_hafta'>
      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
	  <option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option>
	  <option>14</option></td></tr>
  <tr><td>Kalecilik:</td><td><select name='t_kaleci'>
      <option>mucizevi</option><option>topik</option><option>sihirli</option><option>efsanevi</option><option>dünya disi</option>
      <option>devasa</option><option>doga üstü</option><option>dünya çapinda</option><option>muhtesem</option>
	  <option>görkemli</option><option>mükemmel</option><option>üstün</option><option>çok iyi</option><option>kaliteli</option>
	  <option>yeterli</option><option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option>
	  <option>felaket</option><option>kazma</option></td></tr>
  <tr><td>Defans:</td><td><select name='t_defans'>
      <option>mucizevi</option><option>topik</option><option>sihirli</option><option>efsanevi</option><option>dünya disi</option>
      <option>devasa</option><option>doga üstü</option><option>dünya çapinda</option><option>muhtesem</option>
	  <option>görkemli</option><option>mükemmel</option><option>üstün</option><option>çok iyi</option><option>kaliteli</option>
	  <option>yeterli</option><option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option>
	  <option>felaket</option><option>kazma</option></td></tr>
  <tr><td>O.Kurucu:</td><td><select name='t_okurucu'>
      <option>mucizevi</option><option>topik</option><option>sihirli</option><option>efsanevi</option><option>dünya disi</option>
      <option>devasa</option><option>doga üstü</option><option>dünya çapinda</option><option>muhtesem</option>
	  <option>görkemli</option><option>mükemmel</option><option>üstün</option><option>çok iyi</option><option>kaliteli</option>   
	  <option>yeterli</option><option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option>
	  <option>felaket</option><option>kazma</option></td></tr>
  <tr><td>Kanat:</td><td><select name='t_kanat'>
      <option>mucizevi</option><option>topik</option><option>sihirli</option><option>efsanevi</option><option>dünya disi</option>
      <option>devasa</option><option>doga üstü</option><option>dünya çapinda</option><option>muhtesem</option>
	  <option>görkemli</option><option>mükemmel</option><option>üstün</option><option>çok iyi</option><option>kaliteli</option>      <option>yeterli</option><option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option>
	  <option>felaket</option><option>kazma</option></td></tr>
  <tr><td>Pas:</td><td><select name='t_pas'>
      <option>mucizevi</option><option>topik</option><option>sihirli</option><option>efsanevi</option><option>dünya disi</option>
      <option>devasa</option><option>doga üstü</option><option>dünya çapinda</option><option>muhtesem</option>
	  <option>görkemli</option><option>mükemmel</option><option>üstün</option><option>çok iyi</option><option>kaliteli</option>     
	  <option>yeterli</option><option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option>
	  <option>felaket</option><option>kazma</option></td></tr>
  <tr><td>Golculuk:</td><td><select name='t_golculuk'>
      <option>mucizevi</option><option>topik</option><option>sihirli</option><option>efsanevi</option><option>dünya disi</option>
      <option>devasa</option><option>doga üstü</option><option>dünya çapinda</option><option>muhtesem</option>
	  <option>görkemli</option><option>mükemmel</option><option>üstün</option><option>çok iyi</option><option>kaliteli</option>
	  <option>yeterli</option><option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option>
	  <option>felaket</option><option>kazma</option></td></tr>
  <tr><td>D.Toplar:</td><td><select name='t_dtop'>
      <option>mucizevi</option><option>topik</option><option>sihirli</option><option>efsanevi</option><option>dünya disi</option>
      <option>devasa</option><option>doga üstü</option><option>dünya çapinda</option><option>muhtesem</option>
	  <option>görkemli</option><option>mükemmel</option><option>üstün</option><option>çok iyi</option><option>kaliteli</option>
	  <option>yeterli</option><option>vasat</option><option>zayif</option><option>kötü</option><option>berbat</option>
	  <option>felaket</option><option>kazma</option></td></tr>
<tr><td><input type='submit' value='gönder' /></tr></td> 
</form>"; break;

case "gol":
	  echo "...:::Oyuncu Golleri:::...<br>
	  		<form method='post' name='duzeltme' action='grs/giris.php?menu=gol'  >
  <tr><td>Id:</td><td><input type='text' name='t_id' id='t_id' value='$_GET[id]'></td></tr>
  <tr><td>No:</td><td><input type='text' name='t_no' id='t_no' value='$_GET[no]'></td></tr>
  <tr><td>Tarih:</td><td><input type='text' name ='t_tarih' id='t_tarih'></td></tr>
  <tr><td>Sezon:</td><td><select name='t_sezon'>
      <option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
	  <option>26</option><option>27</option><option>28</option><option>29</option><option>30</option></td></tr>
  <tr><td>Hafta:</td><td><select name='t_hafta'>
      <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option>
	  <option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option>
	  <option>14</option></td></tr>
   <tr><td>K.Golleri:</td><td><input type='text' name ='t_kgol' id='t_kgol'></td></tr>
   <tr><td>Hattrick:</td><td><input type='text' name ='t_hatrik' id='t_hatrik'></td></tr>
   <tr><td>Lig Golleri:</td><td><input type='text' name ='t_lig' id='t_lig'></td></tr>
   <tr><td>Kupa Golleri:</td><td><input type='text' name ='t_kupa' id='t_kupa'></td></tr>
   <tr><td><input type='submit' value='gönder' /></tr></td> 
</form>"; break;
	
 }
  ?>
  
	 
	 
	 
	  
		
          
		   
		  
		  
		  
		  
		  
            <tr>
              <td width="368" height="475">&nbsp;</td>
              </tr>
            
            
            
            
          </table></td>
            <td width="287" height="213" valign="top"><img src="images/pic.jpg" width="287" height="213" /></td>
          </tr>
        <tr>
          <td height="262">&nbsp;</td>
        </tr>
        
        
        
        
        

        
        
        
        
        
        
        
      </table></td>
    </tr>
    <tr>
      <td height="69" colspan="2" valign="top" style="background-image:url(images/x_08.jpg)" ><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
