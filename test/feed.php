<?php 

if(isset($_POST['fdetail'])&&isset($_POST['ftype'])&&isset($_POST['fid'])){

  $conn = mysqli_connect('localhost', 'root', 'YES', 'query');

                                                if(!$conn){
                                                    die("error connectig to the detabase". mysqli_connect_error());
                                                }
    
 $type =$_POST['ftype'];
    $type = mysqli_real_escape_string($conn,$type);
 $id =$_POST['fid'];
    $id = mysqli_real_escape_string($conn,$id);
 $detail =$_POST['fdetail'];
    $detail = mysqli_real_escape_string($conn,$detail);

    
    				$sql = "INSERT INTO question (query, fid, ftype)
VALUES ('$detail', '$id','$type')";
				if (mysqli_query($conn, $sql))
					{
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}



}

?>
