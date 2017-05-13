<?php 
class simplenotification{
public static function add($array=null){ 
	if(isset($array) && is_array($array)){
		if(empty($_COOKIE["simplenotice"])){
			setcookie("simplenotice",json_encode($array),time()+3600,"/");
		}
		if(empty($_COOKIE["simplenoticecount"])){
			setcookie("simplenoticecount",1,time()+3600,"/");
		}
	}
}

public static function delete($array=null){ 
	if(isset($_COOKIE["simplenotice"])){ 
		if(isset($_COOKIE["simplenoticecount"])){ 
			if($_COOKIE["simplenoticecount"]>0){ 
				setcookie("simplenotice","",time()-3600,"/"); 
				setcookie("simplenoticecount","",time()-3600,"/");
			}else{
		setcookie("simplenoticecount",$_COOKIE["simplenoticecount"]+1,time()+3600,"/"); 
			}
		}else{ 
	setcookie("simplenoticecount",1,time()+3600,"/");
		}
	}else{
	if(isset($_COOKIE["simplenoticecount"])){ setcookie("simplenoticecount","",time()-3600,"/"); }
	}
}

public static function write($array=null){ 
	if(isset($_COOKIE["simplenotice"])){
	$jsnarray = json_decode($_COOKIE["simplenotice"],true); 
			if(isset($jsnarray) && $jsnarray != NULL && isset($_COOKIE["simplenoticecount"])){
				if(is_array($jsnarray)){
				echo '<div class="notisam">';
					foreach($jsnarray as $list){
						if(isset($list["message"]) && isset($list["style"])){
							if($list["style"] == "success"){
							$list["style"] = "color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6;padding:15px;margin-bottom:20px;border:1px solid solid;border-radius:4px";
							}
							if($list["style"] == "info"){
							$list["style"] = "color:#31708f;background-color:#d9edf7;border-color:#bce8f1;padding:15px;margin-bottom:20px;border:1px solid solid;border-radius:4px";
							} 
							if($list["style"] == "danger"){
							$list["style"] = "color:#a94442;background-color:#f2dede;border-color:#ebccd1;padding:15px;margin-bottom:20px;border:1px solid solid;border-radius:4px";
							} 
							echo '<li style="list-style-type: none; margin: 0; padding: 0;'.$list["style"].'">'.strip_tags($list["message"]).'</li>';
						}
					}
				echo '</div>';
				}
			}
	}
}

public static function redirect($url){ 
	header('Location: '.$url); exit;
}
}
?>