<?php
	$dataToSave = $_POST['dataToSave'];
	$path = "../".$_POST['path'];
	echo $dataToSave;
	chmod($path, 0777);
	$file = fopen($path, "w+") or die("fopen failed");
	fwrite($file,$dataToSave);
	fclose($file);
?>