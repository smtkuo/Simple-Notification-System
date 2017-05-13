<?php 
$post = (isset($_POST["u"]) && isset($_POST["p"])) ? ((in_array(md5($_POST["u"]."::".$_POST["p"]),$loginusers)) ? ((file_exists(dirname( __FILE__ )."/loginsuccessful.php")) ? require(dirname( __FILE__ )."/loginsuccessful.php") : "Error") : ((file_exists(dirname( __FILE__ )."/loginfailed.php")) ? require(dirname( __FILE__ )."/loginfailed.php") : "Error")) : "Non"; 
$pagesettings = array("meta"=>array("title"=>"HomePage - Please Login","description"=>"Please Login"),"metarobots"=>"index,follow");
header('Content-Type: text/html; charset=utf-8');
(file_exists(dirname( __FILE__ ).'/template/tempa.php')) ? require(dirname( __FILE__ ).'/template/tempa.php') : ""; ?>
<div class="block">
<form method="post">
<input type="text" placeholder="Username: test" name="u">
<input type="password" placeholder="Password: test" name="p">
<input type="submit" value="Login">
</form>
</div>
<?php (file_exists(dirname( __FILE__ ).'/template/tempb.php')) ? require(dirname( __FILE__ ).'/template/tempb.php') : ""; ?>