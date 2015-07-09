<?php
/* Set e-mail recipient */
$myemail = "charlie@crg.io";

/* Check all form inputs using check_input function */
$full_name = check_input($_POST['full_name'], "Enter your full name (first and last)");
$email = check_input($_POST['email']);
$telephone = check_input($_POST['telephone'], "Enter your telephone number");
$comments = check_input($_POST['comments'], "Write your message");
$subject = "crg.io email inquiry";

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$comments = "
Name: $full_name
E-mail: $email
Telephone: $telephone
Comments: $comments
";

/* Send the message using mail() function */
mail('charlie@crg.io',$subject,$telephone,$comments);
/* Redirect visitor to the thank you page */
header('Location: thanks.php');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
	<body>
	<p>Please correct the following error:</p>
	<strong><?php echo $myError; ?></strong>
	<p>Hit the back button and try again</p>
	</body>
</html>

<?php
exit();
}

?>