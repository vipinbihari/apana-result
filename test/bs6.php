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
    <ul><li style="padding-left:35.285714px; text-indent: -18.285714px;"><i class="fa fa-dot-circle-o fa-lg" aria-hidden="true" onmouseover="tooltip.pop(this,'#n', {position:1, offsetX:-20, effect:'slide'});pop('{$type}',{$row['id']}, '{$type}{$row['id']}')"></i>&nbsp&nbsp<a target="_blank" onclick="modal('{$row['generated_link']}');" id="{$type}{$row['id']}" style="color:blue;cursor:pointer;">{$row['post_name']}</a></li></ul>
    

EOT;
                                         
    
    

        }

//isset ending down
}
?>


