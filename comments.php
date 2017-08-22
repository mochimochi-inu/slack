<?php

    require_once(__DIR__ . '/config.php');

    $data = array(
        "text" => "hello, world from php2"
    );
    $data_json = json_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, WEBHOOK_URL);
    $result=curl_exec($ch);
    echo 'RETURN:' . $result ;
    curl_close($ch);

?>
