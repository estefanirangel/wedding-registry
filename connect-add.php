<?php 
	define('DB_NAME', 'dbname');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

//test db connection
if (!$link) {
	die('Could not connect:'.mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);

//test db selection
if (!$db_selected) {
	die('cant use'.DB_NAME.':'.mysql_error());
}
//retrieve information from post method from form

$first_name_main_value = $_POST['first_name_main'];

if ($first_name_main_value = empty($_POST['first_name_main'])) {
	echo "Please, fill in First name";
}
$last_name_main_value = $_POST['last_name_main'];

if ($last_name_main_value = empty($_POST['last_name_main'])) {
	echo "Please, fill in second name";
}
$first_name_plus = $_POST['first_name_plus'];

$email = $_POST['email'];

if ($email_value = empty($_POST['email'])) {
	echo "Please, fill in email";
}
$phone = $_POST['phone'];

if ($phone_value = empty($_POST['phone'])) {
	echo "Please, fill in phone number";
}
$phone = $_POST['phone'];

if ($phone_value = empty($_POST['phone'])) {
	echo "Please, fill in phone number";
}

else {
	$first_name_main_value =  mysql_escape_string($_POST['first_name_main']);

	$last_name_main_value =  mysql_escape_string($_POST['last_name_main']);

	$first_name_plus_value =  mysql_escape_string($_POST['first_name_plus']);

	$last_name_plus_value =  mysql_escape_string($_POST['last_name_plus']);

	$email_value =  mysql_real_escape_string($_POST['email']);

	$phone_value =  mysql_real_escape_string($_POST['phone']);

	$diet_value =  mysql_real_escape_string($_POST['diet']);

	$message_for_value =  mysql_real_escape_string($_POST['message_for']);


	$sql = "INSERT INTO guests (first_name_main, last_name_main, first_name_plus, last_name_plus, email, phone, diet, message_for) VALUES ('$first_name_main_value', '$last_name_main_value', '$first_name_plus_value', '$last_name_plus_value', '$email_value', '$phone_value', '$diet_value', '$message_for_value')";

	if (!mysql_query($sql)) {
		die('Error'.mysql_error());
	}
	else {
		header( 'Location: http://wedding.estefanirangel.tk/thanks.php' ) ;
		
	}
}
mysql_close();




?>

