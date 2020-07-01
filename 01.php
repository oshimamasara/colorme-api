<?php
  define("OAUTH2_SITE", 'https://api.shop-pro.jp');
  define("OAUTH2_CLIENT_ID",'62f3191221b851d6fc117e054b4d68d1e3f144db55aea877ff9fc2cd36817ad5'); // id
  define("OAUTH2_CLIENT_SECRET", 'd00b66fbc687393093eaab8c238f59a197cdac13b3be79bda77de2cd54f2a9cf'); // key
  define("OAUTH2_REDIRECT_URI", 'https://codecamp.o-namae.com/colorme_api/01.php'); // リダイレクトURLを入力

  $code = $_GET['code'];
  echo $code;

  $params = array(
    'client_id' => OAUTH2_CLIENT_ID,
    'client_secret' => OAUTH2_CLIENT_SECRET,
    'code' => $code,
    'grant_type' => 'authorization_code',
    'redirect_uri' => OAUTH2_REDIRECT_URI
  );
  $request_options = array(
    'http' => array(
    'method' => 'POST',
    'content' => http_build_query($params)
    )
  );
  $context = stream_context_create($request_options);

  $token_url = 'https://api.shop-pro.jp/oauth/token';
  $response_body = file_get_contents($token_url, false, $context);

  //echo $response_body;

  // save file
  $myfile = fopen("color-me-token.txt", "w");
  echo $response_body;
  fwrite($myfile, $response_body);
  fclose($myfile);

?>