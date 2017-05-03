<?php 
//随机取出四个字符(验证码)
$username='qwertyuiopasdfghjklzxcvbnm1234567890';
for($i=0;$i<4;$i++){
	echo $username{mt_rand(0,strlen($username)-1)};
}
 ?>