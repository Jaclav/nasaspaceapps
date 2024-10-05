<?php
	$plik=fopen("log.php","a");
	fputs($plik,"\n".date("d/m/Y-H:i:s").":".$_SERVER['HTTP_USER_AGENT']." ".$_SERVER['REMOTE_ADDR']."\n");
	if(isset($_GET['name']))
		fputs($plik,$_GET['name']."\n");

	if(isset($_GET['surname']))
		fputs($plik,$_GET['surname']."\n");

	if(isset($_GET['body']))
		fputs($plik,$_GET['body']."\n");

	fclose($plik);
	header("Location:https://www.youtube.com/watch?v=dQw4w9WgXcQ");
?>
