<?php   
$name = trim(strip_tags($_GET['name']));
       $email_from = trim(strip_tags($_GET['email_from']));
       $message = htmlentities($_GET['message']);
        echo"name";
        echo "$name";
        echo "from";
        echo "$email_from";
        echo "message";
        echo "$message";
?>