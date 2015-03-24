<?php
if(isset($_POST['email'])){
    
        function died($error) { 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. "; 
        echo "These errors appear below.<br /><br />"; 
        echo $error."<br /><br />"; 
        echo "Please go back and fix these errors.<br /><br />"; 
        die(); 
    }
     
    if(!isset($_POST['name']) || 
        !isset($_POST['email']) || 
        !isset($_POST['message']) || 
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $message = htmlentities($_POST['message']);

        $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/'; 
  if(!preg_match($email_exp,$email_from)) {
     $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
       
        
    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href"); 
      return str_replace($bad,"",$string);
     }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n"; 
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Message: ".clean_string(message)."\n";
       // set here
       $subject = "Contact form submitted!";
       $to = 'Nic.Capdevila@gmail.com';

       
       $headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($to, $subject, $email_message, $headers);  
 
?>
     
    

 
}
?>