<?php
	$ds = DIRECTORY_SEPARATOR;
	$storeFolder = 'uploads';
	$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
	
	//Delete the file only if exists
	if (file_exists($targetPath . $_POST['filename'])){
		unlink($targetPath . $_POST['filename']);	
	}

?>