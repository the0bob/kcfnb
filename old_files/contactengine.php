<?php
//$EmailTo = "robert.daniel.palmer@gmail.com";

$Name = Trim(stripslashes($_POST['Name']));
$Subject = Trim(stripslashes($_POST['Subject']));
$Email = Trim(stripslashes($_POST['Email']));
$Location = Trim(stripslashes($_POST['Location']));
$Message = Trim(stripslashes($_POST['Message']));
switch ($Location){
  case "Downtown":
    $EmailTo = "fnbdowntownkc@gmail.com";
    break;
  case "Northeast":
    $EmailTo = "alisha_232@hotmail.com";
    break;
  case "Any":
    $EmailTo = "alisha_232@hotmail.com,fnbdowntownkc@gmail.com";
    break;
}


//check recaptcha
//https://developers.google.com/recaptcha/docs/verify
$g_recaptcha_response = $_POST['g-recaptcha-response'];
$g_recaptcha_secret = "6LeI5x8UAAAAADW3N8-gDDZthfoq56f7W2jRx9ho";
$reCaptcha = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$g_recaptcha_secret}&response={$g_recaptcha_response}"),true);


// filter out the weird spam messages; 13 character hex numbers as names
if((strlen($Name) != 13) && (!preg_match("/^[A-Fa-f0-9]{13}$/",$Name))){
  // prepare email body text
  $Body = "For {$Location} location:";
  $Body .= "\n";
  $Body .= "--------------------------------------------------------------------------------\n\n";
  $Body .= "\n";
  $Body .= $Message;
  $Body .= "\n";
  $Body .= "-";
  $Body .= $Name;
  $Body .= "\n";
  $Body .= "--------------------------------------------------------------------------------\n\n";
  $Body .= "This email was generated from the contact form on the KC Food Not Bombs Website.";
  // send email
  $success = mail($EmailTo, $Subject, $Body, "From: ".$Email."\r\nBcc: bob@bobpalmer.info");
}else{
  $success = false;
}



// redirect to success page
if ($success && $reCaptcha['success']){
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
