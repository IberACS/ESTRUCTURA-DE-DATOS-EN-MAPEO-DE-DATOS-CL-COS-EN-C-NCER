<?php
$db = new PDO('mysql:host=localhost;dbname=simpledata','root','pidie')

$jsondata = file_get_contents('data.json');
$data =json_decode($jsondata, true);

$stnt = $db->prepare("insert into json values()");

?>
