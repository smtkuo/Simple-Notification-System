<!DOCTYPE html>
<html>
<head>
<title><?php echo (isset($pagesettings["meta"]["title"]) && $pagesettings["meta"]["title"] != "") ? $pagesettings["meta"]["title"] : "Title"; ?></title>
<meta name="description" content="<?php echo (isset($pagesettings["meta"]["description"]) && $pagesettings["meta"]["description"] != "") ? $pagesettings["meta"]["description"] : "Description"; ?>">
<meta name="robots" content="<?php echo (isset($pagesettings["metarobots"]) && $pagesettings["metarobots"] != "") ? $pagesettings["metarobots"] : "noindex,nofollow"; ?>">
<?php echo (isset($mainsettings["url"])) ? '<link rel="canonical" href="'.$mainsettings["url"].'">' : ''; ?>
<style>
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td { margin: 0; padding: 0; border: 0; outline: 0; font-weight: inherit; font-style: inherit; font-size: 100%; font-family: inherit; vertical-align: baseline; }html, body { height: 100%; margin: 0;color:black;}
body{background:#2C82C9;font-size:19px;font-family: 'Roboto', sans-serif;background: linear-gradient(168deg, #f50000, #3c00f5, #00b2f5, #fb8700, #1e5bb0, #fffa00); background-size: 1200% 1200%; -webkit-animation: BodyColorfulBackground 50s ease infinite; -moz-animation: BodyColorfulBackground 50s ease infinite; animation: BodyColorfulBackground 50s ease infinite;}
.main{background:#ecf0f1;color:#000;width:90%;max-width:1200px;margin:auto auto;border-radius:5px;border:3px #ddd;padding:5px;text-align:center;margin-top:5%;}
.main .title{font-size:25px;color:#c0392b;border-bottom:2px solid #c0392b;padding-bottom:5px;}
.main .block{display:block;margin-bottom:20px;}
.main .block input{padding:10px;border:0px;border-radius:5px;margin:5px;}
.main .block .menu a{text-decoration:none;color:#2980b9;background:#ecf0f1;border-raidus:5px;border:1px solid #ddd;padding:5px;}
@-webkit-keyframes BodyColorfulBackground { 0%{background-position:0% 50%} 50%{background-position:100% 50%} 100%{background-position:0% 50%} } @-moz-keyframes BodyColorfulBackground { 0%{background-position:0% 50%} 50%{background-position:100% 50%} 100%{background-position:0% 50%} } @keyframes BodyColorfulBackground { 0%{background-position:0% 50%} 50%{background-position:100% 50%} 100%{background-position:0% 50%} }
</style>
<link rel='stylesheet' id='google_font_roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A500%2C400italic%2C700%2C900%2C500italic%2C400%2C300&#038;ver=4.7.4' type='text/css' media='all' /><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="google" value="notranslate">
</head>
<body>
<div class="main"> 
<div class="block">
<div class="title"><?php echo (isset($pagesettings["meta"]["title"]) && $pagesettings["meta"]["title"] != "") ? $pagesettings["meta"]["title"] : "Title"; ?></div>
</div>
<div class="block">
<div class="notifications">
<?php simplenotification::write(); ?>
</div>
</div>
<div class="block">
<div class="menu">
<?php echo (isset($login) && $login == "successful") ? '<a href="index.php?q=profile">Profile</a>' : ''; ?> 
<a href="index.php">Homepage</a>
<?php echo (isset($login) && $login == "successful") ? '<a href="index.php?q=logout">Logout</a>' : ''; ?>
</div>
</div>