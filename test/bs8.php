<?php
/*
$server =$_SERVER['PHP_SELF'];
echo <<<TEXT

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
 $type =$_GET['type'];
 $id = $_GET['id'];
  $idn = $id+4;
$query = "SELECT * FROM $type WHERE id BETWEEN $id AND $idn ORDER BY id DESC";
$result = mysqli_query($conn, $query);


while ($row = mysqli_fetch_assoc($result))
        {
    
     echo <<<EOT
                                                    <ul><li style="text-indent: -18.285714px;">
                                                    <i class="fa fa-dot-circle-o fa-lg" aria-hidden="true"></i> &nbsp&nbsp<a onclick="pop('{$type}',{$row['id']}, '{$type}{$row['id']}')" id="{$type}{$row['id']}">{$row['post_name']}</a></li></ul>

EOT;

                                         
    
    

        }

//isset ending down
}
?>

