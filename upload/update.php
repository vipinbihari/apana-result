<?php $conn = mysqli_connect('localhost', 'root', 'YES', 'apanaresult');

if (!$conn)
	{
	die("error connectig to the detabase" . mysqli_connect_error());
	}
?>

<?php 
$arr = array('result', 'admitcard', 'latestjobs','admission','answerkey','syllabus');
foreach( $arr as $arr){
$query = "select * from $arr ";
$result = mysqli_query($conn, $query);
$i=0;
while($row = mysqli_fetch_assoc($result)){
    
    $i++;
    $id = $row['id'];
    
    $query1= "UPDATE $arr SET id = $i WHERE id = $id ";
    
    $result1 = mysqli_query($conn, $query1);
    if($result1){
        echo 'success</br>';
    }

    
}

echo $arr;

}
?>

