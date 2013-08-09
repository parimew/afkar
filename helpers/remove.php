<?php
	$ds = DIRECTORY_SEPARATOR;
	$storeFolder = 'uploads';
	$targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
	unlink($targetPath . $_POST['filename']);

?>