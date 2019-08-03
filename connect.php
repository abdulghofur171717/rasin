<?php
$link = mysql_connect('localhost','root','root') or die('tidak bisa terkoneksi ke database');
mysql_select_db('database', $link) or die('database belum dibuat');

$query = "INSERT INTO data(id,nama,category) VALUES('$_POST[id]','$_POST[nama]','$_POST[category]')";
$result = mysql_query($query, $link) or die('Errorquery:  '.$query);
?>