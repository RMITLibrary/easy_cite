<?php 

require_once '../Parsedown.php';
$parsedown = new Parsedown();

$toplevel = file_get_contents('easycite.md');
$apa = file_get_contents('apa.md');

echo $parsedown->text($toplevel);
echo $parsedown->text($apa);
?>