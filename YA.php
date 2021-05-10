<?php

//  验证手机号码

$XM = $_POST['XM'];
$HM = $_POST['SJHM'];

if(strlen($HM) == "11" and preg_match("/^1[34578]\d{9}$/", $HM)){
	echo "恭喜你通过";	

}else{
	echo "<script>alert('号码有误，请重填');window.location.href ='2.html' </script>";
}



?>