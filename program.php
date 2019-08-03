<?php
$link = mysql_connect('localhost','root','root') or die('tidak bisa terkoneksi ke database');
mysql_select_db('database', $link) or die('database belum dibuat');

$query = "SELECT * FROM data";
$result = mysql_query($query, $link) or die('Errorquery:  '.$query);

$rows = array();
while ($r = mysql_fetch_assoc($result)) {
    $rows[] = $r;
}
$data = "{data:".json_encode($rows)."}";
echo $data;
?>