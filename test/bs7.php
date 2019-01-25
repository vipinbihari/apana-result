<?php

$url = $_GET['q'];
         $html = file_get_contents($url);

         $html1 =strstr($html, '</table>');
                 $html2 = strstr($html1, '<table');
                $html3 = strstr($html2, '</table>', true);


$one =1;
            $html3 = str_replace('<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>', '', $html3);
            $html3 = str_replace('ca-pub-2316796696573690', '', $html3);

                $html4 = str_replace('SARKARIRESULTS.INFO', 'APANARESULT.COM </br><center><ins class="adsbygoogle" style="display:inline-block;width:970px;height:90px" data-ad-client="ca-pub-1135685717282401" data-ad-slot="6034027443"></ins>
</center><script>(adsbygoogle=window.adsbygoogle||[]).push({});</script> ', $html3);
		$html5 = str_replace('750px', 'auto', $html4, $one);
        echo $html5;

        $doc = new DOMDocument();
        $doc->loadHTML($html3);

?>

