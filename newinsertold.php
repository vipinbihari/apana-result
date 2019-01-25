<?php
// making connection to the database
$servername = "localhost";
$username = "root";
$password = "YES";
$dbname = "apanaresult";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if it cannot established the connection then kill the page and do not show anything
if (!$conn)
	{
	die("Connection failed: " . mysqli_connect_error());
	}


// getting the last element of the result section
$query = "SELECT * FROM result ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    $resultlast = $row['generated_link'];

}

// getting the last element of the answerkey section

$query = "SELECT * FROM answerkey ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    $anslast = $row['generated_link'];

}

$query = "SELECT * FROM certificate ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    $certilast = $row['generated_link'];

}

$query = "SELECT * FROM admitcard ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    $admitlast = $row['generated_link'];

}

$query = "SELECT * FROM syllabus ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    $syllalast = $row['generated_link'];

}

$query = "SELECT * FROM important ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    $implast = $row['generated_link'];

}

$query = "SELECT * FROM latestjobs ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    $latestlast = $row['generated_link'];

}

$query = "SELECT * FROM admission ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
	{
    $admilast = $row['generated_link'];

}


// geting the url of the page of which data has to be extracted
$url = 'https://sarkariresults.info';
$html = file_get_contents($url);
// create a new instance for name as doc
$doc = new DOMDocument();
//load the html page of the url
$doc->loadHTML($html);
//move to the second table in the result's site's html page
$node1 = $doc->getElementsByTagName('table')->item(1);

// echo $node1->nodeName;

for ($j = 0; $j < 3; $j++)
	{

	// selecting first column of the page at index 0

	$node2 = $node1->getElementsByTagName('td')->item($j);

	// echo $node2->nodeName;

	$x = $node2->getElementsByTagName('div')->length;

	// selecting rows of the table

	for ($k = 0; $k < $x; $k++)
		{
		$node3 = $node2->getElementsByTagName('div')->item($k);
		// remove the reapeating nodes

		if (($j == 1 || $j == 2) && ($k == 3 || $k == 8 || $k == 13))
			{
			continue;
			}

		// echo $node3->nodeName;

		$node4 = $node3->getElementsByTagName('ul');

		// eterate over the ul of the documnet this is the final loop and the step also

		$m = 0;
		foreach($node4 as $value)
			{
			$value->getElementsByTagName('span')->item(0)->nodeValue = '';
			$node6 = $value->getElementsByTagName('li');
			foreach($node6 as $node7)
				{
				$node8 = $node7->getElementsByTagName('a')->item(1);
				$href = $node8->getAttribute('href');
				}


			
            // condition for the result column
            if ($j == 0 && $k == 0)
				{
                
                			$name = $value->nodeValue;
                if($href != $resultlast){
                    $n = 0;
			$array[$m][$n] = $name;
			$array[$m][$n + 1] = $href;
			$m++;

                }else{ break;}

            }
            
            //condition for answerkey
if ($j == 0 && $k == 4)
				{
                
    $name = $value->nodeValue;
                if($href != $anslast){
                    $n = 0;
			$array[$m][$n] = $name;
			$array[$m][$n + 1] = $href;
			$m++;

                }else{ break;}
            }
            
            //condition for certificate
if ($j == 0 && $k == 8)
				{
                
    $name = $value->nodeValue;
                if($href != $certilast){
                    $n = 0;
			$array[$m][$n] = $name;
			$array[$m][$n + 1] = $href;
			$m++;

                }else{ break;}
            }
            
           //condition for admit card 
if ($j == 1 && $k == 0)
				{
                
    $name = $value->nodeValue;
                if($href != $admitlast){
                    $n = 0;
			$array[$m][$n] = $name;
			$array[$m][$n + 1] = $href;
			$m++;

                }else{ break;}
            }
            
            //condition for syllabus
if ($j == 1 && $k == 5)
				{
                
    $name = $value->nodeValue;
                if($href != $syllalast){
                    $n = 0;
			$array[$m][$n] = $name;
			$array[$m][$n + 1] = $href;
			$m++;

                }else{ break;}
            }
            
            //condition for important
if ($j == 1 && $k == 10)
				{
                
    $name = $value->nodeValue;
                if($href != $implast){
                    $n = 0;
			$array[$m][$n] = $name;
			$array[$m][$n + 1] = $href;
			$m++;

                }else{ break;}
            }
            
            //condition for admission
if ($j == 2 && $k == 5)
				{
                
    $name = $value->nodeValue;
                if($href != $admilast){
                    $n = 0;
			$array[$m][$n] = $name;
			$array[$m][$n + 1] = $href;
			$m++;

                }else{ break;}
            }
            
            //condition for latestjobs
if ($j == 2 && $k == 0)
				{
                
    $name = $value->nodeValue;
                if($href != $latestlast){
                    $n = 0;
			$array[$m][$n] = $name;
			$array[$m][$n + 1] = $href;
			$m++;

                }else{ break;}
            }
            

			}

        // checking wheather the array is empty 
        if(empty($array)){
            
            continue;
        }
        
		$array = array_reverse($array, true);
		foreach($array as $print)
			{
			$name = $print[0];
			$href = $print[1];
			echo "<a href='" . $print[1] . "' target='_blank'>{$print[0]}</a>";
			echo '<br/>';
			if ($j == 0 && $k == 0)
				{
				$select = 'result';
				$sql = "INSERT INTO $select (post_name, generated_link)
VALUES ('$name', '$href')";
				if (mysqli_query($conn, $sql))
					{
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}
				}

			if ($j == 0 && $k == 4)
				{
				$select = 'answerkey';
				$sql = "INSERT INTO $select (post_name, generated_link)
VALUES ('$name', '$href')";
				if (mysqli_query($conn, $sql))
					{
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}
				}

			if ($j == 0 && $k == 8)
				{
				$select = 'certificate';
				$sql = "INSERT INTO $select (post_name, generated_link)
VALUES ('$name', '$href')";
				if (mysqli_query($conn, $sql))
					{
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}
				}

			if ($j == 1 && $k == 0)
				{
				$select = 'admitcard';
				$sql = "INSERT INTO $select (post_name, generated_link)
VALUES ('$name', '$href')";
				if (mysqli_query($conn, $sql))
					{
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}
				}

			if ($j == 1 && $k == 5)
				{
				$select = 'syllabus';
				$sql = "INSERT INTO $select (post_name, generated_link)
VALUES ('$name', '$href')";
				if (mysqli_query($conn, $sql))
					{
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}
				}

			if ($j == 1 && $k == 10)
				{
				$select = 'important';
				$sql = "INSERT INTO $select (post_name, generated_link)
VALUES ('$name', '$href')";
				if (mysqli_query($conn, $sql))
					{
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}
				}

			if ($j == 2 && $k == 5)
				{
				$select = 'admission';
				$sql = "INSERT INTO $select (post_name, generated_link)
VALUES ('$name', '$href')";
				if (mysqli_query($conn, $sql))
					{
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}
				}

			if ($j == 2 && $k == 0)
				{
				$select = 'latestjobs';
				$sql = "INSERT INTO $select (post_name, generated_link)
VALUES ('$name', '$href')";
				if (mysqli_query($conn, $sql))
					{
					echo "New record created successfully";
					}
				  else
					{
					echo "Error: " . $sql . "<br />" . mysqli_error($conn);
					}
				}

			// print loop is ending down foreach

			}
        

		// k loop is ending doen

		unset($array);
		}

	echo '<br /><br /><br />';

	// j ending loop is down

	}

mysqli_close($conn);
?>



