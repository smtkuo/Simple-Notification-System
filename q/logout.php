<?php 
(isset($_COOKIE["lgnscssfl"])) ? setcookie("lgnscssfl", "", time()-3600) : exit;
simplenotification::add(array(array("message"=>"Goodbye :)","style"=>"danger")));
simplenotification::redirect("index.php");
?>