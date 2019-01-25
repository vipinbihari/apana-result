<?php 

if(isset($_GET['search'])){
$conn = mysqli_connect('localhost', 'root', 'YES', 'apanaresult');

if (!$conn)
	{
	die("error connectig to the detabase" . mysqli_connect_error());
	}

$queried = mysqli_real_escape_string($conn,$_GET['search']); // always escape
$type = mysqli_real_escape_string($conn,$_GET['type']); // always escape

$keys = explode(" ",$queried);

$sql = "SELECT * FROM $type WHERE post_name LIKE '%$queried%' ";
foreach($keys as $k){
    $sql .= " OR post_name LIKE '%$k%' ";
}
//echo $sql;

$result = mysqli_query($conn,$sql);
echo <<<EOT
<div id="box7"><div id="heading"><div id="font" align="center">Searched Results</div></div><div id="post"><div id="extra">    

EOT;
    
while($row = mysqli_fetch_assoc($result)){

    echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('{$type}',{$row['id']}, '{$type}{$row['id']}')" id="{$type}{$row['id']}">{$row['post_name']}</a></li></ul>

EOT;

}
    
    echo <<<EOT
     </div>
</div>
</div>

EOT;

}
?>
