<?php
	include_once('settings.php');
	include_once('lib/swift_required.php');
	
	//Variables
	$message = '';
	$callbackEmail ='';
	$emailErrorMessage = '';
	
	$message = "<p>Hello Admin! A new apply has been uploaded through the Afkar Website.<br />Here are the details:</p><p>=== YOUR IDEA/PROJECT ==============================================================</p><b>Describe your idea/project in 500 characters:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtMyIdea'] . "</p><b>What problem or customer pain does your idea/project intend to solve?:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtProblem'] . "</p><b>Who is your target audience and what makes your solution unique?:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtTarget'] . "</p><b>What stage is your business at?:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['opStage'] . "</p><b>How will you get revenue?:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['opRevenue'] . "</p><b>Explain the logic behind your selections:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtLogic'] . "</p><b>Why do you think your idea/project is suitable for the MENA Market?</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtMena'] . "</p><b>Name some similar products in regional or international markets</b><br/><div style='margin-bottom:20px;padding:10px 0 0 50px;'><span style='display:inline-block; margin-right:5px'><b>Producto 1:</b></span><br /><span style='display:inline-block; margin-right:5px'>" . $_POST['txtProduct1'] . "</span><span style='display:inline-block; margin-right:5px'>" . $_POST['txtUrl1'] . "</span><br /><span style='display:inline-block; margin:5px 5px 0 0;'><b>Producto 2:</b></span><br /><span style='display:inline-block; margin-right:5px'>" . $_POST['txtProduct2'] . "</span><span style='display:inline-block; margin-right:5px'>" . $_POST['txtUrl2'] . "</span><br /><span style='display:inline-block; margin:5px 5px 0 0;'><b>Producto 3:</b></b></span><br /><span style='display:inline-block; margin-right:5px'>" . $_POST['txtProduct3'] . "</span><span style='display:inline-block; margin-right:5px'>" . $_POST['txtUrl3'] . "</span></div><b>Upload documents if you consider they will help us get a better understanding of your project</b><br/><div style='margin-bottom:20px;'>" . stripslashes($_POST['pFiles']) . "</div><p>=== ABOUT YOU AND YOUR TEAM ========</p><p style='margin:0;'><b>URL</b>: " . $_POST['txtUrlShortVideo'] . "</p><p style='margin:0;'><b>Please provide the password if any</b>: " . $_POST['videoPass'] . "</p><p style='margin:0;'><b>How many people are there in your team?</b>: " . $_POST['txtPeopleInTeam'] . "</p><p style='margin:0;'><b>What is your name? (Full name)</b>: " . $_POST['txtFullName'] . "</p><p style='margin:0;'><b>Date of birth</b>: " . $_POST['pDateBirth'] . " (mm/dd/yyyy)</p><p style='margin:0;'><b>Country of residence</b>: " . $_POST['pResidence'] . "</p><p style='margin:0;'><b>What is your phone number and email?</b>: " . $_POST['txtPrefix'] . " - " . $_POST['txtPhoneNumber'] . ", email: " . $_POST['txtEmail'] . "</p><p style='margin:0;'><b>What is your Linkedin Profile URL?</b>: " . $_POST['txtLinkedin'] . "</p><p style='margin:0;'><b>What is your Skype username?</b>: " . $_POST['txtSkype'] . "</p>";

	//Email for the user
	$ACKMessage = "<p>Thank you for applying to <a href='http://afkar.me'>afkar.me</a> , we have successfully received your application and will get back to you with a response in Mid-November</p><p>To stay up to date with our latest news please visit our website : www.afkar.me and our facebook page <a href='http://www.facebook.com/afkar.me'>www.facebook.com/afkar.me</a>.</p><p>Please feel free to contact us on the following mail afkar@intigral.net for any inquiry.</p><p>Good Luck,</p><p>The Afkar.me Team</p>";
		
	
	//Just in case, we save the apply in a log
	$filedate = date ("Ymd");
	file_put_contents ( "logs/" . $filedate . ".html" , $message . '\n\n\n\n', FILE_APPEND);
	
	$transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587);
	$transport->setUsername('mgelves@gmail.com');
	$transport->setPassword('-OkVYzRhFInKPvKq0LJ5CQ');
	$swift = Swift_Mailer::newInstance($transport);
	
	
	//Email to Afkar with the user apply
	$from = array($email_from => $name_from);
	$to = array($email_to  => 'Afkar Website');
	$emailToAfkar = new Swift_Message($email_subject);
	$emailToAfkar->setFrom($from);
	$emailToAfkar->setBody($message, 'text/html');
	$emailToAfkar->setTo($to);
	$status = $swift->send($emailToAfkar, $failures);
	
	//Check the status
	if(!$status){
		//Email to the user with the ACK
		$emailToUser = new Swift_Message("Afkar.me - we've received your message");
		$emailToUser->setFrom($from);
		$emailToUser->setBody($ACKMessage, 'text/html');
		$emailToUser->setTo(array($_POST['txtEmail'] => $_POST['txtFullName']);	
		$status = $swift->send($emailToUser, $failures);
	}
	
	if (!$status)
	{
		$emailErrorMessage = $failures;
	}
	else{
		$emailErrorMessage = "";
	}
	
	
	
	
	
	
?>