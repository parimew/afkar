<?php 
	$ds = DIRECTORY_SEPARATOR;
	$storeFolder = 'uploads';
	
	if (!empty($_FILES)) {	     
	    $tempFile = $_FILES['file']['tmp_name'];
	    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
	    $newFileName = time() . '_' . $_FILES['file']['name'];
	    $targetFile =  $targetPath . $newFileName;
	    move_uploaded_file($tempFile,$targetFile);
	    echo $newFileName;
	}
?>