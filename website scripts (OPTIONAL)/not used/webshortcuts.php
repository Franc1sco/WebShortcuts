<html>
 <head>
  <title>Script by Franc1sco franug</title>
 </head>
 <body oncontextmenu="return false" onkeydown="return false">
<?php
	// statistics
	$datei = fopen("ws_countlog.txt","r");
	$count = fgets($datei,1000);
	fclose($datei);
	$count=$count + 1 ;

	$datei = fopen("ws_countlog.txt","w");
	fwrite($datei, $count);
	fclose($datei);
	
	// end of statistics code
	
function dameURL(){
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
return $url;
}

	$url2=DameURL();
	
	$url_final = str_replace("http://www.cola-team.com/franug/webshortcuts.php?web=", "", $url2);
	//echo $url_final;
?>
<script type="text/javascript">
	var popup=window.open("<?php echo $url_final; ?>","Script by Franc1sco franug","height=720,width=1280");
	// my script ;)
</script>
 </body>
</html>