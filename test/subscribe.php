<?php 

if(isset($_POST['sname'])&&isset($_POST['semail'])){

  $conn = mysqli_connect('localhost', 'root', 'YES', 'users');

                                                if(!$conn){
                                                    die("error connectig to the detabase". mysqli_connect_error());
                                                }
    
 $sname =$_POST['sname'];
    $sname = mysqli_real_escape_string($conn,$sname);
 $semail =$_POST['semail'];
    $semail = mysqli_real_escape_string($conn,$semail);
 
    				$sql = "INSERT INTO detail (name, email)
VALUES ('$sname', '$semail')";
				if (mysqli_query($conn, $sql))
					{
    setcookie("subscribed", 'done', time()+3600*24*15);
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}



}

?>

