
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="LGnetworkDesign Contant requestment">
	<meta name="author" content="LG Network Design">
	<title>LG Network Design</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="dist/assets/images/favicon-32x32.png" type="image/x-icon">
	

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="style.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="custom.css" rel="stylesheet">
    
        <script type="text/javascript">
    function delayedRedirect(){
        window.location = "/apply.html?success=1#form";
    }
    </script>

	

</head>
<body onLoad="setTimeout('delayedRedirect()', 100)" style="background-color:#fff;">
<?php

    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);
    
    	//Get uploaded file data using $_FILES array
	$tmp_name = $_FILES['file-upload']['tmp_name']; // get the temporary file name of the file on the server
	$filen   = $_FILES['file-upload']['name']; // get the name of the file
	$size	 = $_FILES['file-upload']['size']; // get size of the file for size validation
	$type	 = $_FILES['file-upload']['type']; // get type of the file
	$error	 = $_FILES['file-upload']['error']; // get the error (if any)
	
    // $file = $_FILES['file-upload']['name'];

    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL) or $error > 0) {
        header("Location:/apply.html?success=-1#form");
        exit;
    }
    
	//read from the uploaded file & base64_encode content
	$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
	$content = fread($handle, $size); // reading the file
	fclose($handle);				 // close upon completion
	
	$encoded_content = chunk_split(base64_encode($content));
	$boundary = md5("random"); // define boundary with a md5 hashed value

    $mail = $email;
    $to = "jurella1962@gmail.com";		/* YOUR EMAIL HERE */
    $subject = "New Applicant Email from Juice Up";
    
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
	$headers .= "From: Juice Up <noreply@Juice-uprgv.com>\r\n"; // Sender Email
	$headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
	$headers .= "boundary = $boundary\r\n"; //Defining the Boundary
    
	
    // inside body
    $message = "DETAILS\n";
    $message .= "\n1) Email: " . $_POST['email'] . "\n";
	$message .= "\n2) Name: " . $_POST['name'] . "\n";
	$message .= "\n2) Phone: " . $_POST['phone'] . "\n";
    $message .= "\n3) Position Applied: " . $_POST['dd-position'] . "\n";
	$message .= "\n4) Message info: " . $_POST['message'] . "\n";
    // $message .= "\n6) Attached File: " . $_FILES['file-upload']['name'] . "\n";
	
	//plain text
	$body = "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
	$body .= chunk_split(base64_encode($message));
		
	//attachment
	$body .= "--$boundary\r\n";
	$body .="Content-Type: $type; name=".$name."\r\n";
	$body .="Content-Disposition: attachment; filename=".$name."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
	$body .= $encoded_content; // Attaching the encoded file with email
	
    
                            
    //Receive Variable
    $sentOk = mail($to,$subject,$body,$headers,'-fjurella1962@gmail.com');
	
?>
<!-- END SEND MAIL SCRIPT -->  