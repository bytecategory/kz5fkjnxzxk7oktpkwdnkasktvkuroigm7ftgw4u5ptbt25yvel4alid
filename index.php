<?php
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';
$now_ua = array("curl",'CensysInspect','python-requests','Go-http-client','CMS-Checker','InternetMeasurement',
    'CheckMarkNetwork','GPTBot','l9tcpid','-','Nmap','masscan','okhttp','GenomeCrawlerd','HTTP Banner Detection','python-httpx',
    'fasthttp','libwww-perl','masscan-ng','ModatScanner'
);

if(empty($ua)) {
    http_response_code(404);
    ob_end_clean();
}
foreach($now_ua as $value)
      if(stripos($ua,$value) !== false) {
      http_response_code(404);
      header("Content-Type: text/actionscript3");
      ob_end_clean();
      exit;
      }
$host = strtolower($_SERVER['HTTP_HOST']);
if (strpos($host, '.onion') !== false) {
	readfile(__DIR__ . '/LET.html');
	exit;
}
echo file_get_contents(__DIR__ . '/index.html')
?>
