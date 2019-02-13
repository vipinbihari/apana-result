<?php
// making connection to the database
$servername = "localhost";
$username   = "root";
$password   = "YES";
$dbname     = "apanaresult";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
// if it cannot established the connection then kill the page and do not show anything
if (!$conn)
  {
    die("Connection failed: " . mysqli_connect_error());
  }

  function getLinks($select){
    // getting the last 5 elements of the specified section
    global $conn;
    $query  = "SELECT * FROM {$select} ORDER BY id DESC LIMIT 5";
    $result = mysqli_query($conn, $query);
    $links = array();
    while ($row = mysqli_fetch_assoc($result))
      { //echo $row['generated_link'];
        array_push($links, $row['generated_link']);
      }
      return $links;
  }


  function mainScrapper($select,$type){
    global $conn;
    // getting the last element of the result section
    //and the same thing for the other section down
    $lastFiveLinks = getLinks($select);
    // create a new instance for name as doc
    $doc  = new DOMDocument();
    //load the html page of the url
    $doc->loadHTML($type);
    $node4 = $doc->getElementsByTagName('ul');
            // eterate over the ul of the documnet this is the final loop and the step also
            $m = 0;
            foreach ($node4 as $value)
              {
                $value->getElementsByTagName('span')->item(0)->nodeValue = '';
                $node6 = $value->getElementsByTagName('li')->item(0)->getElementsByTagName('a');
                if($node6->length ==2 )
                {
                $href = $node6->item(1)->getAttribute('href');

                }else{
                $href = $node6->item(0)->getAttribute('href');
                }

                    $name = $value->nodeValue;
                  if (!in_array($href,$lastFiveLinks))
                      {
                        $n = 0;
                        $array[$m][$n] = $name;
                        $array[$m][$n + 1] = $href;
                        $m++;
                  }else{
                      break;
                  }

            }

          $array = array_reverse($array, true);
            foreach ($array as $print)
              {
                $name = $print[0];
                $href = $print[1];
                echo "<a href='" . $print[1] . "' target='_blank'>{$print[0]}</a>";
                echo '<br/>';

                    $sql    = "INSERT INTO $select (post_name, generated_link)
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
            unset($array);
            echo '<br>';

  }

// geting the url of the page of which data has to be extracted
$url  = 'https://sarkariresults.info';
$html = file_get_contents($url);
$html = stristr($html, '<table');
$html = stristr($html, '</table>');
$html = stristr($html, '<table');
//the below line is not working in current due some change in there design
//$html = stristr($html, '</table>');
 $html = stristr($html, '<table');
 $html = stristr($html, '</table>', true);
 $html.='</table>';


$result = strstr($html,'Latest Results');
$result = strstr($result,'<ul>');
$result = strstr($result, '<div',true);

$answerkey = strstr($html,'Answer Key');
$answerkey = strstr($answerkey,'<ul>');
$answerkey = strstr($answerkey, '<div',true);

$documents = strstr($html,'Documents');
$documents = strstr($documents,'<ul>');
$documents = strstr($documents, '<div',true);

$admitcard = strstr($html,'Admit Card');
$admitcard = strstr($admitcard,'<ul>');
$admitcard = strstr($admitcard, '<div',true);

$syllabus = strstr($html,'Syllabus');
$syllabus = strstr($syllabus,'<ul>');
$syllabus = strstr($syllabus, '<div',true);

$others = strstr($html,'Others');
$others = strstr($others,'<ul>');
$others = strstr($others, '<div',true);

$latestjobs = strstr($html,'Latest Jobs');
$latestjobs = strstr($latestjobs,'<ul>');
$latestjobs = strstr($latestjobs, '<div',true);

$admission = strstr($html,'Admission');
$admission = strstr($admission,'<ul>');
$admission = strstr($admission, '<div',true);
/*
$upcoming = strstr($html,'Upcoming');
$upcoming = strstr($upcoming,'<ul>');
$upcoming = strstr($upcoming, '</div',true);
*/


mainScrapper('result',$result);
mainScrapper('answerkey',$answerkey);
mainScrapper('certificate',$documents);
mainScrapper('admitcard',$admitcard);
mainScrapper('syllabus',$syllabus);
mainScrapper('important',$others);
mainScrapper('latestjobs',$latestjobs);
mainScrapper('admission',$admission);

?>
