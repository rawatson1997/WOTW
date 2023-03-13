<?PHP
$email = $_POST["email"];
$name = $_POST['name'];
$input_message = $_POST['message'];
$to = "wineoftheweekblog@gmail.com";
$subject = "New Message from WOTW";
$headers = "From: $email\n";
$message = "A message from $name:\n $input_message";


$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: you@youremailaddress.com\n";
$usermessage = "Thank you for subscribing to our mailing list.";
mail($to,$subject,$message,$headers);
//mail($user,$usersubject,$usermessage,$userheaders);
?>