<?php session_start();
include 'database/config.php';

// declare post fields
if(isset($_POST['submit'])){
$post_username = trim($_POST['username']);
$post_password = trim($_POST['password']);

//$post_autologin = $_POST['autologin'];

$admin = mysql_query("SELECT * FROM user WHERE (username = '" .addslashes($post_username) . "') and (password = '" .$post_password. "')");

if($row=mysql_fetch_array($admin)){
	
$_SESSION['username'] = $row['username'];

// Autologin Requested?

echo "OK";
}
else
{
echo '<div id="error_notification">Invalid username and password.</div>';
}

}
?>