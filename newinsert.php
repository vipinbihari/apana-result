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



// getting the last element of the result section
$query  = "SELECT * FROM result ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
  {
    $resultlast = $row['generated_link'];
    
  }

// getting the last element of the answerkey section

$query  = "SELECT * FROM answerkey ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
  {
    $anslast = $row['generated_link'];
    
  }

$query  = "SELECT * FROM certificate ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
  {
    $certilast = $row['generated_link'];
    
  }

$query  = "SELECT * FROM admitcard ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
  {
    $admitlast = $row['generated_link'];
    
  }

$query  = "SELECT * FROM syllabus ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
  {
    $syllalast = $row['generated_link'];
    
  }

$query  = "SELECT * FROM important ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
  {
    $implast = $row['generated_link'];
    
  }

$query  = "SELECT * FROM latestjobs ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
  {
    $latestlast = $row['generated_link'];
    
  }

$query  = "SELECT * FROM admission ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result))
  {
    $admilast = $row['generated_link'];
    
  }
?>


<?php

// geting the url of the page of which data has to be extracted
$url  = 'https://sarkariresults.info';
$html = file_get_contents($url);
// create a new instance for name as doc


$html = stristr($html, '<table');
$html = stristr($html, '</table>');

$html = stristr($html, '<table');
$html = stristr($html, '</table>');

 $html = stristr($html, '<table');
 $html = stristr($html, '</table>', true);
 $html.='</table>';

$result = strstr($html,'Latest Results');
$result = strstr($result,'<ul>');
$result = strstr($result, '<div',true);
$doc  = new DOMDocument();
//load the html page of the url
$doc->loadHTML($result);
 $node4 = $doc->getElementsByTagName('ul');
        
        // eterate over the ul of the documnet this is the final loop and the step also
        
        $m = 0;
        foreach ($node4 as $value)
          {
            $value->getElementsByTagName('span')->item(0)->nodeValue = '';
            $node6 = $value->getElementsByTagName('li');
            foreach ($node6 as $node7)
              {
                $node8 = $node7->getElementsByTagName('a')->item(1);
                $href  = $node8->getAttribute('href');
              }
             
                $name = $value->nodeValue;
              if ($href != $resultlast)
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
            
             $select = 'result';
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

$answerkey = strstr($html,'Answer Key');
$answerkey = strstr($answerkey,'<ul>');
$answerkey = strstr($answerkey, '<div',true);

$doc  = new DOMDocument();
$doc->loadHTML($answerkey);
$node4 = $doc->getElementsByTagName('ul');
        
        // eterate over the ul of the documnet this is the final loop and the step also
        
        $m = 0;
        foreach ($node4 as $value)
          {
            $value->getElementsByTagName('span')->item(0)->nodeValue = '';
            $node6 = $value->getElementsByTagName('li');
            foreach ($node6 as $node7)
              {
                $node8 = $node7->getElementsByTagName('a')->item(1);
                $href  = $node8->getAttribute('href');
              }
             
                $name = $value->nodeValue;
              if ($href != $anslast)
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
            
             $select = 'answerkey';
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





$documents = strstr($html,'Documents');
$documents = strstr($documents,'<ul>');
$documents = strstr($documents, '<div',true);

$doc  = new DOMDocument();
$doc->loadHTML($documents);
$node4 = $doc->getElementsByTagName('ul');
        
        // eterate over the ul of the documnet this is the final loop and the step also
        
        $m = 0;
        foreach ($node4 as $value)
          {
            $value->getElementsByTagName('span')->item(0)->nodeValue = '';
            $node6 = $value->getElementsByTagName('li');
            foreach ($node6 as $node7)
              {
                $node8 = $node7->getElementsByTagName('a')->item(1);
                $href  = $node8->getAttribute('href');
              }
             
                $name = $value->nodeValue;
              if ($href != $certilast)
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
             $select = 'certificate';
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


$admitcard = strstr($html,'Admit Card');
$admitcard = strstr($admitcard,'<ul>');
$admitcard = strstr($admitcard, '<div',true);

$doc  = new DOMDocument();
$doc->loadHTML($admitcard);
$node4 = $doc->getElementsByTagName('ul');
        
        // eterate over the ul of the documnet this is the final loop and the step also
        
        $m = 0;
        foreach ($node4 as $value)
          {
            $value->getElementsByTagName('span')->item(0)->nodeValue = '';
            $node6 = $value->getElementsByTagName('li');
            foreach ($node6 as $node7)
              {
                $node8 = $node7->getElementsByTagName('a')->item(1);
                $href  = $node8->getAttribute('href');
              }
             
                $name = $value->nodeValue;
              if ($href != $admitlast)
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
            
             $select = 'admitcard';
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


$syllabus = strstr($html,'Syllabus');
$syllabus = strstr($syllabus,'<ul>');
$syllabus = strstr($syllabus, '<div',true);

$doc  = new DOMDocument();
$doc->loadHTML($syllabus);
$node4 = $doc->getElementsByTagName('ul');
        
        // eterate over the ul of the documnet this is the final loop and the step also
        
        $m = 0;
        foreach ($node4 as $value)
          {
            $value->getElementsByTagName('span')->item(0)->nodeValue = '';
            $node6 = $value->getElementsByTagName('li');
            foreach ($node6 as $node7)
              {
                $node8 = $node7->getElementsByTagName('a')->item(1);
                $href  = $node8->getAttribute('href');
              }
             
                $name = $value->nodeValue;
              if ($href != $syllalast)
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
             $select = 'syllabus';
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

$others = strstr($html,'Others');
$others = strstr($others,'<ul>');
$others = strstr($others, '<div',true);

$doc  = new DOMDocument();
$doc->loadHTML($others);
$node4 = $doc->getElementsByTagName('ul');
        
        // eterate over the ul of the documnet this is the final loop and the step also
        
        $m = 0;
        foreach ($node4 as $value)
          {
            $value->getElementsByTagName('span')->item(0)->nodeValue = '';
            $node6 = $value->getElementsByTagName('li');
            foreach ($node6 as $node7)
              {
                $node8 = $node7->getElementsByTagName('a')->item(1);
                $href  = $node8->getAttribute('href');
              }
             
                $name = $value->nodeValue;
              if ($href != $implast)
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
            
             $select = 'important';
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

$latestjobs = strstr($html,'Latest Jobs');
$latestjobs = strstr($latestjobs,'<ul>');
$latestjobs = strstr($latestjobs, '<div',true);

$doc  = new DOMDocument();
$doc->loadHTML($latestjobs);
$node4 = $doc->getElementsByTagName('ul');
        
        // eterate over the ul of the documnet this is the final loop and the step also
        
        $m = 0;
        foreach ($node4 as $value)
          {
            $value->getElementsByTagName('span')->item(0)->nodeValue = '';
            $node6 = $value->getElementsByTagName('li');
            foreach ($node6 as $node7)
              {
                $node8 = $node7->getElementsByTagName('a')->item(1);
                $href  = $node8->getAttribute('href');
              }
             
                $name = $value->nodeValue;
              if ($href != $latestlast)
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
            
             $select = 'latestjobs';
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

$admission = strstr($html,'Admission');
$admission = strstr($admission,'<ul>');
$admission = strstr($admission, '<div',true);

$doc  = new DOMDocument();
$doc->loadHTML($admission);
$node4 = $doc->getElementsByTagName('ul');
        
        // eterate over the ul of the documnet this is the final loop and the step also
        
        $m = 0;
        foreach ($node4 as $value)
          {
            $value->getElementsByTagName('span')->item(0)->nodeValue = '';
            $node6 = $value->getElementsByTagName('li');
            foreach ($node6 as $node7)
              {
                $node8 = $node7->getElementsByTagName('a')->item(1);
                $href  = $node8->getAttribute('href');
              }
             
                $name = $value->nodeValue;
              if ($href != $admilast)
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
            
             $select = 'admission';
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


$upcoming = strstr($html,'Upcoming');
$upcoming = strstr($upcoming,'<ul>');
$upcoming = strstr($upcoming, '</div',true);

$doc  = new DOMDocument();
$doc->loadHTML($upcoming);
$node4 = $doc->getElementsByTagName('ul');
        
        // eterate over the ul of the documnet this is the final loop and the step also
        echo '<b style="color:red;"> This is for upcoming</b>';
        $m = 0;
        foreach ($node4 as $value)
          {
            $value->getElementsByTagName('span')->item(0)->nodeValue = '';
            $node6 = $value->getElementsByTagName('li');
            foreach ($node6 as $node7)
              {
                $node8 = $node7->getElementsByTagName('a')->item(1);
                $href  = $node8->getAttribute('href');
              }
             
                $name = $value->nodeValue;
              
                    $n = 0;
                    $array[$m][$n] = $name;
                    $array[$m][$n + 1] = $href;
                    $m++;  
                
        }

      $array = array_reverse($array, true);
        foreach ($array as $print)
          {
            $name = $print[0];
            $href = $print[1];
            echo "<a href='" . $print[1] . "' target='_blank'>{$print[0]}</a>";
            echo '<br/>';
        }
        unset($array);
        echo '<br>';



?>

