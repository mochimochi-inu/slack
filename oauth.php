<?php

    // OAuth id
    // xoxp-228399782976-229110622852-229188842965-ea0a52a187dcf17adeb48f83ecda8340

    $data = array(
        "text" => "hello, world from php2"
    );
    $data_json = json_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, '');
    $result=curl_exec($ch);
    echo 'RETURN:' . $result ;
    curl_close($ch);

?>
