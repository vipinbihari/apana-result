<?php
 curlPost('http://upresults.nic.in/NET18IN/InterResDisplay.asp', [
    'regno' => '1313305',
    'schcode' => '1104',
]);


function curlPost($url, $data) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    if (curl_error($ch)) {
        throw new \Exception(curl_error($ch));
    }
    curl_close($ch);

    return $response;
}
?>
