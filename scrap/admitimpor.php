

<?php
$conn = mysqli_connect('localhost', 'root', 'YES', 'apanaresult');

if (!$conn)
	{
	die("error connectig to the detabase" . mysqli_connect_error());
	}

?>



<?php



        $array = array('admitcard', 'important');
        foreach($array as $link){

        $query = "SELECT * FROM $link ORDER BY id DESC LIMIT 10";
                             $result = mysqli_query($conn, $query);
                             while($row = mysqli_fetch_assoc($result)){
                                 
        //getting the url of which sort_info is to be updated
        $url = $row['generated_link'];
        //getting the id of which sort_info is to be updated
        $id = $row['id'];
        //getting the information weather the sort_info have to to updated or not                  
        if($row['dnd']==1){
            continue;
        }
    $insert ='';


	$html = file_get_contents($url);
	$html1 = stristr($html, 'IMPORTANT LINKS');
	if(!$html1) {


$html1 = stristr($html, 'IMPORTANT');

}

	$html2 = stristr($html1, '</tbody>', true);

	$html3 = stristr($html2, '<tr>');
                                 
	$doc = new DOMDocument();
	$doc->loadHTML($html3);
	$tr = $doc->getElementsByTagName('tr');
	foreach($tr as $tr1)
		{
		$td = $tr1->getElementsByTagName('td');

		// copied td

		$tdc = $td;
		$tdl = $td->length;
		foreach($td as $td)
			{
			if ($tdl == 1)
				{
                
				$al = $td->getElementsByTagName('a')->length;
               
                if($al != 1){
                    continue;
                }
                
                $a = $td->getElementsByTagName('a')->item(0);
				$href = $a->getAttribute('href');
                $href = str_replace(' ', '', $href);
				$name = $a->nodeValue;
                $name = trim(preg_replace('/\s\s+/', ' ', $name));
				$insert .= "<a href='" . $href . "'>{$name}</a>";
				//echo '<br />';
				}

			elseif ($tdl == 2)
				{
				$a = $td->getElementsByTagName('a');

				// check the no of links in the single row

				$al = $a->length;

				// echo $al;
                
				// loping through all a tags in a documents

				foreach($a as $a)
					{

					// IF THE LINKS ARE IN A SIMPLE FORm

					if ($al == 1)
						{
						$href = $a->getAttribute('href');
                        $href = str_replace(' ', '', $href);
						$name = $tdc->item(0)->nodeValue;
                        $name = trim(preg_replace('/\s\s+/', ' ', $name));
						 $insert .="<a href='" . $href . "'>{$name}</a>";
						//echo '<br />';
						}

					// if these links are not in the standard form

					if ($al > 1)
						{
						$name = $tdc->item(0)->nodeValue;
						$href = $a->getAttribute('href');
                        $href = str_replace(' ', '', $href);
						$name = $name . $a->nodeValue;
                        $name = trim(preg_replace('/\s\s+/', ' ', $name));
						$insert .= "<a href='" . $href . "'>{$name}</a>";
					//	echo '<br />';
						}
                    // some other cases which are not to be known
                    if($al < 1){
                        
                        continue;
                    }

					// a foreach loop ending down

					}

				// tdl == 2 condition ending down

				}else{ 
                // if tld is neither 1 nor 2
                    continue;
                        }

			// td loop is ending down

			}

		// tr loop is ending down

		}
                     echo $insert;
            echo '<br>';   
                                                                                   
$insert = mysqli_real_escape_string($conn, $insert);
                 
$query1 = "UPDATE $link SET sort_info='$insert' WHERE id='$id'";
$ins = mysqli_query($conn, $query1);

if($ins) echo 'operation success <br>';
                                             
                                 // mysqli brace ending down
                             }
           
// array brace ending down
                        echo '<br><br><br>';             // mysqli brace ending down

            
            //array link loop is ending down 
        }

?>


