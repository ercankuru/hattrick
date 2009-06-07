<?php

@mysql_connect("localhost", "root", "") or die ("Giris Saglanamadi"); 
@mysql_select_db("hattrick") or die ("Veri Tabani Seçilemedi");
mysql_query("SET NAMES 'latin5'");
mysql_query("SET CHARACTER SET latin5");
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'"); 
?>