<?php

$ch = curl_init('https://data.ntpc.gov.tw/api/datasets/71CD1490-A2DF-4198-BEF1-318479775E8A/json?page=0&size=10');
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
// curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:28.0) Gecko/20100101 Firefox/28.0");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);


$output = curl_exec($ch);

// var_dump($output);
curl_close($ch);

echo $output;
?>