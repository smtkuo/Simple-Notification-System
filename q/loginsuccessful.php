<?php 
$loginx = (isset($_POST["u"]) && isset($_POST["p"])) ? ((in_array(md5($_POST["u"]."::".$_POST["p"]),$loginusers)) ? md5($_POST["u"]."::".$_POST["p"]) : header('Location: index.php')) : header('Location: index.php');
$loginusername = (isset($loginusersinfo[$loginx])) ? $loginusersinfo[$loginx]["Username"] : header('Location: index.php');
simplenotification::add(array(array("message"=>"Welcome $loginusername :)","style"=>"success")));
setcookie("lgnscssfl", $loginx, time()+3600);
simplenotification::redirect("index.php?q=profile");
exit; 
?>