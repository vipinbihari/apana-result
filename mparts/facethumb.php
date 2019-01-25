<?php
if(isset($_GET['type']) && isset($_GET['id'])){
$type =$_GET['type'];
$id = $_GET['id'];
$query = "SELECT * FROM $type WHERE id=$id";
$result = mysqli_query($conn, $query);  

while ($row = mysqli_fetch_assoc($result))
	{
	 $q=$row['post_name'];	
    $id =$row['id'];
    $link=$row['img_thumb'];

if($link==NULL){

        $url = 'https://www.google.co.in/search?tbm=isch&q='. urlencode($q);
    
    
    
// disguises the curl using fake headers and a fake user agent. 
function disguise_curl($url) 
{ 
  $curl = curl_init(); 

  // Setup headers - I used the same headers from Firefox version 2.0.0.6 
  // below was split up because php.net said the line was too long. :/ 
  $header[0] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8"; 
  $header[] = "Cache-Control: max-age=0"; 
  $header[] = "Connection: keep-alive"; 
  $header[] = "Keep-Alive: 300"; 
  $header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7"; 
  $header[] = "Accept-Language: en-US,en;q=0.9,fr;q=0.8,hi;q=0.7,ru;q=0.6"; 
//  $header[] = "Pragma: "; // browsers keep this blank. 

  curl_setopt($curl, CURLOPT_URL, $url); 
  curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.140 Safari/537.36'); 
  curl_setopt($curl, CURLOPT_HTTPHEADER, 'https://www.google.co.in/'); 
  curl_setopt($curl, CURLOPT_ENCODING, 'gzip,deflate'); 
  curl_setopt($curl, CURLOPT_AUTOREFERER, true); 
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
  curl_setopt($curl, CURLOPT_TIMEOUT, 10); 

  $html = curl_exec($curl); // execute the curl command 
  return $html; // and finally, return $html 
} 

// uses the function and displays the text off the website 
$text = disguise_curl($url); 
//echo $text; 
$html1 = strstr($text, '"ou":"');
$html2 = strstr($html1,'",', true);
$link = strstr($html2,'http');
//NULL condition ending down
}
//echo "<img src=$link>";

    
$value = mysqli_real_escape_string($conn, $link);
                 
$query1 = "UPDATE $type SET img_thumb='$value' WHERE id='$id'";
$ins = mysqli_query($conn, $query1);
if($ins){
//echo 'it was created ';
}
    
}
//ifisset is ending down
}
                                                ?>
