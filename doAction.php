<?php 
header('Content-type:text/html;charset=utf-8');
//接收数据
$username=$_POST['username'];
//echo $username;测试接收数据
$password=$_POST['password'];
$password1=$_POST['password1'];
$email=$_POST['email'];
$fav=$_POST['fav'];
//print_r($fav);exit;
//判断用户是否选择了兴趣爱好
if(!empty($fav)){
	//将数组转换成字符串,用逗号分隔
	$favStr=implode(',',$fav);
	//echo $favStr;exit;
}

//为用户体验更加好,验证码允许出现空格trim,大小写一致strtolower
$verify=trim(strtolower($_POST['verify']));//接收用户填写的验证码(手写)
$verify1=trim(strtolower($_POST['verify1']));//接收用户真实的验证码(随机产生)
//echo $verify,'---',$verify1.'<br/>';exit;测试验证码
$returnUrl='<a href="zhuce.php">重新注册</a>';

//检测用户名的合法性
//检测用户名首字母是否为字母
$char=$username{0};
//echo $char;
$ascil=ord($char);//得到指定字符的ascil(ord返回值就是一个ascil)
//检测用户首字母的ascil是否在65-90(A-Z)或者97-122(a-z)之间
if(!(($ascil>=65&&$ascil<=90)||($ascil>=97&&$ascil<=122))){
	exit('用户的首字母不是以字母开头的<br/>'.$returnUrl);
}

//检测用户名长度是否符合要求6-10
$userLen=strlen($username);
if($userLen<6||$userLen>10){
	exit('用户名长度不符合规范<br/>'.$returnUrl);
}

//检测密码不能为空
$pwdLen=strlen($password);
if($pwdLen==0){
	exit('密码不能为空<br/>'.$returnUrl);
}

//检测密码长度是否符合要求6-10
if($pwdLen<6||$pwdLen>10){
	exit('密码长度不符合规范<br/>'.$returnUrl);
}

//检测两次密码是否一致
if(!($password==$password1)){
	exit('两次密码不一致<br/>'.$returnUrl);
}

//检测邮箱的合法性(简单的查找,严格的需要用正则表达式)
if(strpos($email,'@')==false){
	exit('非法邮箱<br/>'.$returnUrl);
}

//检测验证码是否符合规范
if($verify!==$verify1){
	exit('验证码失败<br/>'.$returnUrl);
}


echo '恭喜你注册成功,你的信息如下:';

$password=md5($password);//使用md5进行加密
//table>tr>td*5
$userInfo=<<<EOF
<table border=1px cellpading="0" cellspacing="0" width="80%">
	<tr>
		<td>用户名</td>
		<td>密码</td>
		<td>邮箱</td>
		<td>兴趣爱好</td>
	</tr>
	<tr>
		<td>{$username}</td>
		<td>{$password}</td>
		<td>{$email}</td>
		<td>{$favStr}</td>
	</tr>
</table>
EOF;

echo $userInfo;





 ?>