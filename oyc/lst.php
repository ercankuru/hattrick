<?php
include('vt.inc');
?>
<table border="1">
<TR>
<TD>No</TD>
<td>Kalecik</td>
<td>Defans</td>
<td>O.Kuruculuk</td>
<td>Kanat</td>
<td>Pas</td>
<td>Golcülük</td>
<td>D.Toplar</td>
<?php
  $tablo="SELECT * FROM yetenek WHERE defans='yeterli' ORDER BY no ";
  $sorgu=mysql_query($tablo);
       while ($oku = mysql_fetch_assoc($sorgu)) {
echo "<tr> <td width'50'><div align='center'><strong>$oku[no]</strong></div></td>
         
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


</TR></table>