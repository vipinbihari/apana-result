<?php
header("Content-Type: application/json; charset=UTF-8");
if(isset($_GET['submit'])){
  $conn = mysqli_connect('localhost', 'root', 'YES', 'apanaresult');
          if(!$conn){
              die("error connectig to the detabase". mysqli_connect_error());
          }
$type =$_GET['type'];
$id = $_GET['id'];
$query = "SELECT sort_info FROM $type WHERE id=$id LIMIT 1";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result))
        {
          echo $row['sort_info'];

}
?>
