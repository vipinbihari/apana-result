<?php
header("Content-Type: application/json; charset=UTF-8");
$server =$_SERVER['PHP_SELF'];
/*echo <<<TEXT

<form action=$server method=get >
<input type=text name=type >
<input type=number name=id>
<input type=submit name=submit>
</form>

TEXT;
*/

if(isset($_GET['submit'])){

  $conn = mysqli_connect('localhost', 'root', 'YES', 'apanaresult');

                                                if(!$conn){
                                                    die("error connectig to the detabase". mysqli_connect_error());
                                                }
		$count =1;
$type =$_GET['type'];
$id = $_GET['id'];
$query = "SELECT sort_info,generated_link FROM $type WHERE id=$id ";
$result = mysqli_query($conn, $query);
echo '{"sort_info":{';
while ($row = mysqli_fetch_assoc($result))
        {
	$q = $row['generated_link'];
        $html = $row['sort_info'];
        $doc = new DOMDocument();
        $doc->loadHTML($html);
        $a = $doc->getElementsByTagName('a');
        foreach($a as $a)
                {
                $name = $a->nodeValue;
                $href = $a->getAttribute('href');
                $href = str_replace(' ', '', $href);
               $name = preg_replace('/\s\s+/', ' ', $name);

		if($count == 1){

$count++;

echo <<<RAM
"$href":"$name"
RAM;
}else{
echo <<<RAM
,"$href":"$name"
RAM;

}          }

        }
echo '}, "link":"'.$q.'"}';
//isset ending down
}
?>
