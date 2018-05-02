<?php
$i = 0;
if( isset($_GET['id']) )
{
	$i = $_GET['id'] + 0;
}
$dirs = scandir( "." );
$items = array();
foreach($dirs as $dir)
{
	if(strpos($dir,".")===0)
		continue;
	if(is_dir($dir))
		$items[]=$dir;
}
sort($items);
$len = count($items);
$path = dirname($_SERVER['REQUEST_URI']);
$proto  = $_SERVER['REQUEST_SCHEME'];
if( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) )
{
	$proto  = "https";
}
$host = "localhost";
if( isset($_SERVER['SERVER_NAME']) )
{
	$host = $_SERVER['SERVER_NAME'];
}

echo '"'.$items[ $i %$len ] . '"' ;
