<?php $conn = mysqli_connect('localhost', 'root', 'YES', 'apanaresult');

if (!$conn)
	{
	die("error connectig to the detabase" . mysqli_connect_error());
	}
?>

<?php

if (isset($_GET['type']) && isset($_GET['id']))
{
	$type = $_GET['type'];
	$id = $_GET['id'];
	$query = "SELECT thumbnail_json, selected FROM thumbnails WHERE type_id=$id AND type='$type'";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($result))
	{
		$thumbnail_obj = json_decode($row['thumbnail_json']);
		$selected = $row['selected'];
	}
	//var_dump($thumbnail_obj);
if($thumbnail_obj != null){
switch($selected){
case 0:
$thumbnail_link = $thumbnail_obj->default;
break;
case 1:
$thumbnail_link = $thumbnail_obj->image1;
break;
case 2:
$thumbnail_link = $thumbnail_obj->image2;
break;
case 3:
$thumbnail_link = $thumbnail_obj->image3;
break;
case 4:
$thumbnail_link = $thumbnail_obj->image4;
break;
default:

}

}

	$query = "SELECT post_name FROM $type WHERE id=$id";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($result)){
		$post_name = $row['post_name'];
	}
}

//echo $post_name;
//echo $thumbnail_link;
?>
