
<?php
$request_options = array(
    'http' => array(
    'method' => 'GET',
    'header'=> "Authorization: Bearer 13e5891e524ca9d8f7208cf8458ea19b683558acf37f2efe98e108300976920d"
    )
);
$context = stream_context_create($request_options);

$url = 'https://api.shop-pro.jp/v1/products.json';
$response_body = file_get_contents($url, false, $context);
echo $response_body;
?>