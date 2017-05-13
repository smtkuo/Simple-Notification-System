<?php 
$post = (isset($_POST["u"]) && isset($_POST["p"])) ? "" : exit;
simplenotification::add(array(array("message"=>"Invalid password","style"=>"danger"),array("message"=>"(Username: test,Password: test)","style"=>"info")));
simplenotification::redirect("index.php");
exit;
?>