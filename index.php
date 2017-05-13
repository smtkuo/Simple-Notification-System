<?php 
/* 
.---..-.-.-..---..-.,-..-..-..----.
 \ \ | | | |`| |'| . < | || || || |
`---'`-'-'-' `-' `-'`-'`----'`----'
*/
ini_set('default_charset', 'utf-8' );
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1); 
$mainsettings = array("url"=>((isset($_SERVER['HTTP_HOST']) && isset($_SERVER["REQUEST_URI"])) ? "http://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"] : ""));
$loginusers = array(md5("test::test"),md5("user::password")); 
$loginusersinfo = array(
md5("test::test")=>array(
"Username"=>"test",
"Password"=>"test",
"Country"=>"Turkey",
"Language"=>"Turkish"
),
md5("user::password")=>array(
"Username"=>"user",
"Password"=>"password",
"Country"=>"Turkey",
"Language"=>"Turkish"
)); 
$login = (isset($_COOKIE["lgnscssfl"])) ? ((in_array($_COOKIE["lgnscssfl"],$loginusers)) ? "successful" : "") : ""; 
(file_exists(dirname( __FILE__ ).'/class.php')) ? require(dirname( __FILE__ ).'/class.php') : exit;
simplenotification::delete();
$result = (isset($_GET["q"]) && $_GET["q"] != "" && strip_tags($_GET["q"]) != "loginsuccessful" && strip_tags($_GET["q"]) != "loginfailed") ? ((file_exists(dirname( __FILE__ )."/q/".strip_tags($_GET["q"]).".php")) ? require(dirname( __FILE__ )."/q/".strip_tags($_GET["q"]).".php") : "Error") : (($login == "successful") ? ((file_exists(dirname( __FILE__ )."/q/profile.php")) ? require(dirname( __FILE__ )."/q/profile.php") : "Error") : ((file_exists(dirname( __FILE__ )."/q/homepage.php")) ? require(dirname( __FILE__ )."/q/homepage.php") : "Error")); 
?>
