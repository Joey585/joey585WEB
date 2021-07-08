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
$json_data = json_encode([
  // Message
  "content" => "Testy",
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init( $url );
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
$response = curl_exec($ch);
curl_close( $ch );
?>
