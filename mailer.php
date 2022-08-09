
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
        window.location = "index.php?success=1#form";
    }
    </script>

	

</head>
<body onLoad="setTimeout('delayedRedirect()', 100)" style="background-color:#fff;">>
<?php
        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);
  
        if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:index.php?success=-1#form");
        exit;
    }
						$mail = $_POST['email'];

						/*$subject = "".$_POST['subject'];*/
//						$to = "leog4za@gmail.com";		/* YOUR EMAIL HERE */
						$to = "jurella1962@gmail.com";		/* YOUR EMAIL HERE */
						$subject = "Information Email from Juice Up";
						$headers = "From: Juice Up <noreply@Juice-uprgv.com>";
						$message = "DETAILS\n";
    				    $message .= "\n1) Email: " . $_POST['email'] . "\n";
						$message .= "\n2) Name: " . $_POST['name'] . "\n";
    				    $message .= "\n3) Find-Us: " . $_POST['find-us'] . "\n";
						$message .= "\n4) Message info: " . $_POST['message'];
						
												
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers,'-fjurella1962@gmail.com');
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Your Requested Information";
						$userheaders = "From: admin@juice-uprgv.com". "\r\n".
                                        "Content-type: text/html; charset=iso-8859-1";						
    
//                        $userheaders = "From: admin@lgnetworkdesign.com". "\r\n".
//                            "Reply-To: Leog4za@gmail.com". "\r\n".
//                            "Content-type: text/html; charset=iso-8859-1";
    
						/*$usermessage = "Thank you for your time. Your quotation request is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
      <title>[SUBJECT]</title>
      <style type='text/css'>
      body {
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       padding-top: 0 !important;
       padding-bottom: 0 !important;
       margin:0 !important;
       width: 100% !important;
       -webkit-text-size-adjust: 100% !important;
       -ms-text-size-adjust: 100% !important;
       -webkit-font-smoothing: antialiased !important;
     }
     .tableContent img {
       border: 0 !important;
       display: block !important;
       outline: none !important;
     }
     a{
      color:#382F2E;
    }

    p, h1{
      color:#382F2E;
      margin:0;
    }
 p{
      text-align:left;
      color:#999999;
      font-size:14px;
      font-weight:normal;
      line-height:19px;
    }

    a.link1{
      color:#382F2E;
    }
    a.link2{
      font-size:16px;
      text-decoration:none;
      color:#ffffff;
    }

    h2{
      text-align:left;
       color:#222222; 
       font-size:19px;
      font-weight:normal;
    }
    div,p,ul,h1{
      margin:0;
    }

    .bgBody{
      background: #ffffff;
    }
    .bgItem{
      background: #ffffff;
    }
	
@media only screen and (max-width:480px)
		
{
		
table[class='MainContainer'], td[class='cell'] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class='specbundle'] 
	{
		width:100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}
		
td[class='spechide'] 
	{
		display:none !important;
	}
	    img[class='banner'] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
		td[class='left_pad'] 
	{
			padding-left:15px !important;
			padding-right:15px !important;
	}
		 
}
	
@media only screen and (max-width:540px) 

{
		
table[class='MainContainer'], td[class='cell'] 
	{
		width: 100% !important;
		height:auto !important; 
	}
td[class='specbundle'] 
	{
		width:100% !important;
		float:left !important;
		font-size:13px !important;
		line-height:17px !important;
		display:block !important;
		padding-bottom:15px !important;
	}
		
td[class='spechide'] 
	{
		display:none !important;
	}
	    img[class='banner'] 
	{
	          width: 100% !important;
	          height: auto !important;
	}
	.font {
		font-size:18px !important;
		line-height:22px !important;
		
		}
		.font1 {
		font-size:18px !important;
		line-height:22px !important;
		
		}
}

    </style>
<script type='colorScheme' class='swatch active'>
{
    'name':'Default',
    'bgBody':'ffffff',
    'link':'382F2E',
    'color':'999999',
    'bgItem':'ffffff',
    'title':'222222'
}
</script>
  </head>
  <body paddingwidth='0' paddingheight='0'   style='padding-top: 0; padding-bottom: 0; padding-top: 0; padding-bottom: 0; background-repeat: repeat; width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;' offset='0' toppadding='0' leftpadding='0'>
    <table bgcolor='#ffffff' width='100%' border='0' cellspacing='0' cellpadding='0' class='tableContent' align='center'  style='font-family:Helvetica, Arial,serif;'>
  <tbody>
    <tr>
      <td><table width='600' border='0' cellspacing='0' cellpadding='0' align='center' bgcolor='#ffffff' class='MainContainer'>
  <tbody>
    <tr>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td valign='top' width='40'>&nbsp;</td>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
  <!-- =============================== Header ====================================== -->   
    <tr>
    	<td height='75' class='spechide'></td>
        
        <!-- =============================== Body ====================================== -->
    </tr>
    <tr>
      <td class='movableContentContainer ' valign='top'>
      	<div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
        	<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td height='35'></td>
    </tr>
    <tr>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td valign='top' align='center' class='specbundle'><div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable'>
                                <img src='http://juice-uprgv.com/Recources/img/JuiceUpLogo.png'>
                                </div>
                              </div>
        </td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
        </div>
        <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
        	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr>
                            <td valign='top' align='center'>
                              <div class='contentEditableContainer contentImageEditable'>
                                <div class='contentEditable'>
                                  <img src='#' width='251' height='43' alt='' data-default='placeholder' data-max-width='560'>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </table>
        </div>
        <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
        	<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
                          <tr><td height='55'></td></tr>
                          <tr>
                            <td align='left'>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable' align='center'>
                                  <h2 >So whats next?</h2>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height='15'> </td></tr>

                          <tr>
                            <td align='left'>
                              <div class='contentEditableContainer contentTextEditable'>
                                <div class='contentEditable' align='center'>
                                  <p >
                                   Thanks for signing up " . $_POST['firstname'] . "! We will review your message and should be reaching out to you via phone or email. If you haven't heard back from us, feel free to give us a call or open up your spam email.
                                    <br>
                                    <br>
                                    Have questions? Get in touch with us via Facebook or Twitter, or email our support team.
                                    <br>
                                    <br>
                                    Cheers,
                                    <br>
                                    <span style='color:#222222;'>Juice Up</span>
                                  </p>
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr><td height='55'></td></tr>

                          <tr>
                            <td align='center'>
                              <table>
                                <tr>
                                  <td align='center' bgcolor='#289CDC' style='background:#1A54BA; padding:15px 18px;-webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;'>
                                    <div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='center'>
                                        <a target='_blank' href='http://juice-uprgv.com' class='link2' style='color:#ffffff;'>View Website</a>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                            </td>
                          </tr>
                          <tr><td height='20'></td></tr>
                        </table>
        </div>
        <div class='movableContent' style='border: 0px; padding-top: 0px; position: relative;'>
        	<table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td height='65'>
    </tr>
    <tr>
      <td  style='border-bottom:1px solid #DDDDDD;'></td>
    </tr>
    <tr><td height='25'></td></tr>
    <tr>
      <td><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td valign='top' class='specbundle'><div class='contentEditableContainer contentTextEditable'>
                                      <div class='contentEditable' align='center'>
                                        <p  style='text-align:left;color:#CCCCCC;font-size:12px;font-weight:normal;line-height:20px;'>
                                          <span style='font-weight:bold;'></span>
                                          <br>
                                          <br>
                                          <a target='_blank' href='[FORWARD]'></a><br>
                                          <a target='_blank' class='link1' class='color:#382F2E;' href='[UNSUBSCRIBE]'>''</a>
                                          <br>
                                          <a target='_blank' class='link1' class='color:#382F2E;' href='[SHOWEMAIL]'></a>
                                        </p>
                                      </div>
                                    </div></td>
      <td valign='top' width='30' class='specbundle'>&nbsp;</td>
      <td valign='top' class='specbundle'><table width='100%' border='0' cellspacing='0' cellpadding='0'>
  <tbody>
    <tr>
      <td valign='top' width='52'>
                                    <div class='contentEditableContainer contentFacebookEditable'>
                                      <div class='contentEditable'>
                                        <a target='_blank' href='#'><img src='http://www.lgnetworkdesign.com/images/facebook.png' width='52' height='53' alt='facebook icon' data-default='placeholder' data-max-width='52' data-customIcon='true'></a>
                                      </div>
                                    </div>
                                  </td>
      <td valign='top' width='16'>&nbsp;</td>
      <td valign='top' width='52'>
                                    <div class='contentEditableContainer contentTwitterEditable'>
                                      <div class='contentEditable'>
                                        <a target='_blank' href='#'><img src='http://www.lgnetworkdesign.com/images/twitter.png' width='52' height='53' alt='twitter icon' data-default='placeholder' data-max-width='52' data-customIcon='true'></a>
                                      </div>
                                    </div>
                                  </td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
    <tr><td height='88'></td></tr>
  </tbody>
</table>

        </div>
        
        <!-- =============================== footer ====================================== -->
      
      </td>
    </tr>
  </tbody>
</table>
</td>
      <td valign='top' width='40'>&nbsp;</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
</td>
    </tr>
  </tbody>
</table>
      </body>
      </html>

";  
    
    
    
    
						mail($user,$usersubject,$usermessage,$userheaders,'-fadmin@juice-uprgv.com');
//						mail($user,$usersubject,$usermessage,$userheaders,'-fadmin@juice-uprgv.com');
	
?>
<!-- END SEND MAIL SCRIPT -->  