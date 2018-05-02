<?php
$i = "http://localhost/";
if( isset($_SERVER['QUERY_STRING']) )
{
	$i = urldecode($_SERVER['QUERY_STRING']);
}

$ch = curl_init($i);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);

$result = curl_exec( $ch );

if( $result === FALSE ) 
{
  die( curl_error($ch) );
}

$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

curl_close($ch);
header("Content-Type: $contentType");
echo $result;
