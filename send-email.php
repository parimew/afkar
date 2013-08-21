<?php
	
	//Variables
	$message = '';
	$headers = '';
	
	$message = "<p>Hello Admin! A new apply has been uploaded through the Afkar Website.<br />";
	$message .= "Here are the details:</p>";
	$message .= "<p>=== YOUR IDEA/PROJECT ==============================================================</p>";
	$message .= "<b>Describe your idea/project in 500 characters:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtMyIdea'] . "</p>";
	$message .= "<b>What problem or customer pain does your idea/project intend to solve?:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtProblem'] . "</p>";
	$message .= "<b>Who is your target audience and what makes your solution unique?:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtTarget'] . "</p>";
	$message .= "<b>What stage is your business at?:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['opStage'] . "</p>";
	$message .= "<b>How will you get revenue?:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['opRevenue'] . "</p>";
	$message .= "<b>Explain the logic behind your selections:</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtLogic'] . "</p>";
	$message .= "<b>Why do you think your idea/project is suitable for the MENA Market?</b><br/><p style='margin:0 0 20px 0;'>" . $_POST['txtMena'] . "</p>";
	$message .= "<b>Name some similar products in regional or international markets</b><br/>";
		$message .= "<div style='margin-bottom:20px;padding:10px 0 0 50px;'>";
			$message .= "<span style='display:inline-block; margin-right:5px'><b>Producto 1:</b></span><br />";
			$message .= "<span style='display:inline-block; margin-right:5px'>" . $_POST['txtProduct1'] . "</span>";
			$message .= "<span style='display:inline-block; margin-right:5px'>" . $_POST['txtUrl1'] . "</span><br />";
			
			$message .= "<span style='display:inline-block; margin:5px 5px 0 0;'><b>Producto 2:</b></span><br />";
			$message .= "<span style='display:inline-block; margin-right:5px'>" . $_POST['txtProduct2'] . "</span>";
			$message .= "<span style='display:inline-block; margin-right:5px'>" . $_POST['txtUrl2'] . "</span><br />";
			
			$message .= "<span style='display:inline-block; margin:5px 5px 0 0;'><b>Producto 3:</b></b></span><br />";
			$message .= "<span style='display:inline-block; margin-right:5px'>" . $_POST['txtProduct3'] . "</span>";
			$message .= "<span style='display:inline-block; margin-right:5px'>" . $_POST['txtUrl3'] . "</span>";
		$message .= "</div>";
	$message .= "<b>Upload documents if you consider they will help us get a better understanding of your project</b><br/>";
	$message .= "<div style='margin-bottom:20px;'>" . stripslashes($_POST['pFiles']) . "</div>";
	$message .= "<p>=== ABOUT YOU AND YOUR TEAM ==============================================================</p>";
	
	
	$message .= "<p style='margin:0;'><b>URL</b>: " . $_POST['txtUrlShortVideo'] . "</p>";
	$message .= "<p style='margin:0;'><b>Please provide the password if any</b>: " . $_POST['videoPass'] . "</p>";
	$message .= "<p style='margin:0;'><b>How many people are there in your team?</b>: " . $_POST['txtPeopleInTeam'] . "</p>";
	$message .= "<p style='margin:0;'><b>What is your name? (Full name)</b>: " . $_POST['txtFullName'] . "</p>";
	$message .= "<p style='margin:0;'><b>Date of birth</b>: " . $_POST['pDateBirth'] . " (mm/dd/yyyy)</p>";
	$message .= "<p style='margin:0;'><b>Country of residence</b>: " . $_POST['pResidence'] . "</p>";
	$message .= "<p style='margin:0;'><b>What is your phone number and email?</b>: " . $_POST['txtPrefix'] . " - " . $_POST['txtPhoneNumber'] . "</p>";
	$message .= "<p style='margin:0;'><b>What is your Linkedin Profile URL?</b>: " . $_POST['txtLinkedin'] . "</p>";
	$message .= "<p style='margin:0;'><b>What is your Skype username?</b>: " . $_POST['txtSkype'] . "</p>";
		
	$headers = "From:" . $email_from;
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	try{
    	//Send the email
    	mail($email_to,$email_subject,$message,$headers);	
	}
	catch(Exception $e){
		//re-throw exception
		throw new customException($e.getMessage());
	}
?>