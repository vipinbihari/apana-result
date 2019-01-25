<?php 
// geting the url of the page of which data has to be extracted
$url  = 'https://sarkariresults.info';
$html = file_get_contents($url);
// create a new instance for name as doc


$html = stristr($html, '<table');
$html = stristr($html, '<table');
echo $html = stristr($html, '<table');
$html = stristr($html, '</table>', true);
$html+='</table>';
// echo $html;


?>
