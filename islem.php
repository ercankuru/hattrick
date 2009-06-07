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
      <td height="474" colspan="2" valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-image:url(images/x_07.jpg)">
        <!--DWLayoutTable-->
        <tr>
          <td width="19" height="15"></td>
          <td width="57"></td>
          <td width="171"></td>
          <td width="62"></td>
          <td width="43"></td>
          <td width="287"></td>
          <td width="16"></td>
        </tr>
        <tr>
          <td height="55"></td>
          <td valign="top"><img src="images/logo.png" width="57" height="55" /></td>
          <td valign="top"><br />
            <span class="style1">OYUNCU &#304;&#350;LEMLER&#304; </span></td>
          <td valign="top"><div align="center"><a href="index.php"><img src="images/home.png" width="44" height="44" border="0" /></a></div></td>
          <td>&nbsp;</td>
          <td rowspan="2" valign="top"><img src="images/pic.jpg" width="287" height="213" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="158"></td>
          <td colspan="4" rowspan="2" valign="top"><div align="right">
            
            
            
            
            <form action="islem/islem.php" method="post">
              <p>ID
                <input type="text" name="id" id="id"  />   
                <br />
                Tarih
                <input type="text" name="tarih" />                
                <br />
                Oyunucu Ad&#305;
                <input type="text" name="adi" />
                <br />
                Form
                
                <select name="form" id="form" >
                  <option selected="selected">Seçiniz</option>
				  <option>&ccedil;ok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zay&#305;f</option>
                  <option>k&ouml;t&uuml;</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>			 
                   </select>
                <br />
                Kondisyoni     
                
                <select name="kondisyon" id="kondisyon">
                  <option  selected="selected">Seçiniz</option>
				  <option>&ccedil;ok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zay&#305;f</option>
                  <option>k&ouml;t&uuml;</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>
                    </select>
                <br />
                Tsi
                <input name="tsi" type="text" id="tsi" />
                <br />
                Tecr&uuml;be
                <select name="tecrube" id="tecrube" >
                  <option selected="selected">Seçiniz</option>
				  <option>mucizevi</option>
                  <option>ütopik</option>
                  <option>sihirli</option>
                  <option>efsanevi</option>
                  <option>dünya disi</option>
                  <option>devasa</option>
                  <option>doga üstü</option>
                  <option>dünya çapinda</option>
                  <option>muhtesem</option>
                  <option>görkemli</option>
                  <option>mükemmel</option>
                  <option>üstün</option>
                  <option>çok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zayif</option>
                  <option>kötü</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>
                  </select>
                <br />
                Kalecilik
                <select name="kalecilik" id="kalecilik"  >
                  <option selected="selected">Se&ccedil;iniz</option>
                  <option>mucizevi</option>
                  <option>&uuml;topik</option>
                  <option>sihirli</option>
                  <option>efsanevi</option>
                  <option>d&uuml;nya d&#305;&#351;&#305;</option>
                  <option>devasa</option>
                  <option>do&#287;a &uuml;st&uuml;</option>
                  <option>d&uuml;nya &ccedil;ap&#305;nda</option>
                  <option>muhte&#351;em</option>
                  <option>g&ouml;rkemli</option>
                  <option>m&uuml;kemmel</option>
                  <option>&uuml;st&uuml;n</option>
                  <option>&ccedil;ok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zay&#305;f</option>
                  <option>k&ouml;t&uuml;</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>
                </select>
                <br />
                Defans
                <select name="defans" id="defans"  >
                  <option selected="selected">Se&ccedil;iniz</option>
                  <option>mucizevi</option>
                  <option>&uuml;topik</option>
                  <option>sihirli</option>
                  <option>efsanevi</option>
                  <option>d&uuml;nya d&#305;&#351;&#305;</option>
                  <option>devasa</option>
                  <option>do&#287;a &uuml;st&uuml;</option>
                  <option>d&uuml;nya &ccedil;ap&#305;nda</option>
                  <option>muhte&#351;em</option>
                  <option>g&ouml;rkemli</option>
                  <option>m&uuml;kemmel</option>
                  <option>&uuml;st&uuml;n</option>
                  <option>&ccedil;ok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zay&#305;f</option>
                  <option>k&ouml;t&uuml;</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>
                </select>
                <br />
                Oyun Kurucu
                <select name="okurucu" id="okurucu"  >
                  <option selected="selected">Se&ccedil;iniz</option>
                  <option>mucizevi</option>
                  <option>&uuml;topik</option>
                  <option>sihirli</option>
                  <option>efsanevi</option>
                  <option>d&uuml;nya d&#305;&#351;&#305;</option>
                  <option>devasa</option>
                  <option>do&#287;a &uuml;st&uuml;</option>
                  <option>d&uuml;nya &ccedil;ap&#305;nda</option>
                  <option>muhte&#351;em</option>
                  <option>g&ouml;rkemli</option>
                  <option>m&uuml;kemmel</option>
                  <option>&uuml;st&uuml;n</option>
                  <option>&ccedil;ok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zay&#305;f</option>
                  <option>k&ouml;t&uuml;</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>
                </select>
                <br />
                Kanat
                <select name="kanat" id="kanat"  >
                  <option selected="selected">Se&ccedil;iniz</option>
                  <option>mucizevi</option>
                  <option>&uuml;topik</option>
                  <option>sihirli</option>
                  <option>efsanevi</option>
                  <option>d&uuml;nya d&#305;&#351;&#305;</option>
                  <option>devasa</option>
                  <option>do&#287;a &uuml;st&uuml;</option>
                  <option>d&uuml;nya &ccedil;ap&#305;nda</option>
                  <option>muhte&#351;em</option>
                  <option>g&ouml;rkemli</option>
                  <option>m&uuml;kemmel</option>
                  <option>&uuml;st&uuml;n</option>
                  <option>&ccedil;ok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zay&#305;f</option>
                  <option>k&ouml;t&uuml;</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>
                </select>
                <br />
                Pas
                <select name="pas" id="pas"  >
                  <option selected="selected">Se&ccedil;iniz</option>
                  <option>mucizevi</option>
                  <option>&uuml;topik</option>
                  <option>sihirli</option>
                  <option>efsanevi</option>
                  <option>d&uuml;nya d&#305;&#351;&#305;</option>
                  <option>devasa</option>
                  <option>do&#287;a &uuml;st&uuml;</option>
                  <option>d&uuml;nya &ccedil;ap&#305;nda</option>
                  <option>muhte&#351;em</option>
                  <option>g&ouml;rkemli</option>
                  <option>m&uuml;kemmel</option>
                  <option>&uuml;st&uuml;n</option>
                  <option>&ccedil;ok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zay&#305;f</option>
                  <option>k&ouml;t&uuml;</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>
                </select>
                <br />
                Golc&uuml;l&uuml;k
                <select name="golculuk" id="golculuk"  >
                  <option selected="selected">Se&ccedil;iniz</option>
                  <option>mucizevi</option>
                  <option>&uuml;topik</option>
                  <option>sihirli</option>
                  <option>efsanevi</option>
                  <option>d&uuml;nya d&#305;&#351;&#305;</option>
                  <option>devasa</option>
                  <option>do&#287;a &uuml;st&uuml;</option>
                  <option>d&uuml;nya &ccedil;ap&#305;nda</option>
                  <option>muhte&#351;em</option>
                  <option>g&ouml;rkemli</option>
                  <option>m&uuml;kemmel</option>
                  <option>&uuml;st&uuml;n</option>
                  <option>&ccedil;ok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zay&#305;f</option>
                  <option>k&ouml;t&uuml;</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>
                </select>
                <br />
                Duran Toplar
                <select name="dtoplar" id="dtoplar"  >
                  <option selected="selected">Se&ccedil;iniz</option>
                  <option>mucizevi</option>
                  <option>&uuml;topik</option>
                  <option>sihirli</option>
                  <option>efsanevi</option>
                  <option>d&uuml;nya d&#305;&#351;&#305;</option>
                  <option>devasa</option>
                  <option>do&#287;a &uuml;st&uuml;</option>
                  <option>d&uuml;nya &ccedil;ap&#305;nda</option>
                  <option>muhte&#351;em</option>
                  <option>g&ouml;rkemli</option>
                  <option>m&uuml;kemmel</option>
                  <option>&uuml;st&uuml;n</option>
                  <option>&ccedil;ok iyi</option>
                  <option>kaliteli</option>
                  <option>yeterli</option>
                  <option>vasat</option>
                  <option>zay&#305;f</option>
                  <option>k&ouml;t&uuml;</option>
                  <option>berbat</option>
                  <option>felaket</option>
                  <option>kazma</option>
                </select>
                <br />
                Y&#305;ld&#305;z
                <input name="yildiz" type="text" id="yildiz" />
                <br />
                Kart Uyar&#305;s&#305;
                <input name="kart" type="text" id="kart" />
                <br />
                Sa&#287;l&#305;k Durumu
                <input name="saglik" type="text" id="saglik" />
                <br />
                Durum
                <input name="durum" type="checkbox" id="durum" value="yedek" />
                Yedek
                <input name="durum1" type="checkbox" id="durum1" value="as" />
                As
                <input name="durum2" type="checkbox" id="durum2" value="cezal&#305;" />
                Cezal&#305;
                <input name="durum3" type="checkbox" id="durum3" value="sat&#305;ld&#305;" />
                Sat&#305;ld&#305;
                <input name="durum" type="checkbox" id="durum" value="sakat" />
                Sakat
                <br />
                <br />
                <input type="submit" name="Submit" value="G&ouml;nder" />
                <input type="reset" name="Submit2" value="Temizle" />
                </p>
                </form>
                <br />
            <br />
          </div></td>
          <td></td>
        </tr>
        <tr>
          <td height="285"></td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
        <tr>
          <td height="159"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td></td>
        </tr>
        
        
        
        
        
        

      </table>
      </td>
    </tr>
    
    
    <tr>
      <td height="69" colspan="2" valign="top" style="background-image:url(images/x_08.jpg)"><!--DWLayoutEmptyCell-->&nbsp;</td>
    </tr>
  </table>
</div>
</body>
</html>
