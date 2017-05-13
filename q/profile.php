<?php 
$checkprofile = (isset($_COOKIE["lgnscssfl"])) ? ((in_array($_COOKIE["lgnscssfl"],$loginusers)) ? "" : header('Location: index.php')) : header('Location: index.php');
$pagesettings = array("meta"=>array("title"=>"Welcome :)","description"=>"Hello :)"),"metarobots"=>"index,follow");
header('Content-Type: text/html; charset=utf-8');
(file_exists(dirname( __FILE__ ).'/template/tempa.php')) ? require(dirname( __FILE__ ).'/template/tempa.php') : ""; ?>
<div class="block">
Hello :)
</div>
<?php (file_exists(dirname( __FILE__ ).'/template/tempb.php')) ? require(dirname( __FILE__ ).'/template/tempb.php') : ""; ?>