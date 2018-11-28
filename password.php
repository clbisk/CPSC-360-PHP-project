<html><body>

<?php
$password = $_POST['password'];

echo( $password);

$db = new mysqli('localhost', 'wordsroot', $password, 'words');

if ($db-> connect_errno) {
	echo("Can't connect");
} else {
	echo("Hello");
}

?>

</body></html>