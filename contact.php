<?php
$name = $_REQUEST['Your Name'];
$email = $_REQUEST['Your Email'];
$subject = $_REQUEST['Subject'];
$message = $_REQUEST['Message'];

if (empty($name) || empty($email) || empty($subject) || empty($message))
{
echo "Please fill all the fields";
}
else
{
mail("sushantkumarrai6@gmail.com", "Message From Sushant Website", $message, "From: $name <$email>");
echo "<script type='text/javascript'>alert('Message sent successfully!');
window.history.go(-1);
</script>";