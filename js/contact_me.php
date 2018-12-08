<?php
if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['message']))
	
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
$to = 'cribblservices@gmail.com'; 
$email_subject = "From  $name";
$email_body = "New message\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: webmail\n";
mail($to,$email_subject,$email_body,$headers);
return true;         

$sql="INSERT INTO contactForm (name, phone, message) VALUES ('$name', '$phone', '$message')";
if(!mysql_query($sql))
{
	echo "<script>alert('Error');</script>"
}

else{
	echo "<script>alert('Sent. Thank You!');</script>"
}

mysql_close();


?>
