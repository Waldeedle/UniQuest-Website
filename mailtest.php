<?php
// multiple recipients
$to = 'princecloud@live.ca';

// subject
$subject = 'hellow sire this is test';

// message
$message = 'if this works that means our server can now send email';

// Additional headers
$headers = 'From: Uniquest <donotreplyuniquest@gmail.com>';

// Mail it
mail($to, $subject, $message, $headers);
echo "done";
?>