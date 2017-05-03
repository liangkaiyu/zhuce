<?php 
$string='QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm1234567890';
$code='';
for($i=0;$i<4;$i++){
	//echo $string{mt_rand(0,strlen($string)-1)};
	$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>';//等量代换的原则'..'连接符
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
</head>
<body>
<h1>注册页面</h1>
	<form  method="post" action="doAction.php">
		<table border=1px cellpadding="0" cellspacing="0" width="40%" bgcolor="#ABCDEF">
			<tr>
				<td align="center">用户名</td><!--align文字居中-->
				<td><input type="text" name="username" id="" placeholder="请输入合法用户名" />用户名首字母以字母开头有,并且6-10</td>
			</tr>
			<tr>
				<td align="center">密码</td>
				<td><input type="password" name="password" placeholder="请输入密码" />密码不能为空并且密码长度6-10</td>
			</tr>
			<tr>
				<td align="center">确认密码</td>
				<td><input type="password" name="password1" placeholder="请输入确认密码" />两次密码一致</td>
			</tr>
			<tr>
				<td align="center">邮箱</td>
				<td><input type="text" name="email" id="" placeholder="请输入合法邮箱">必须以@开头</td>
			</tr>
			<tr>
				<td align="center">兴趣爱好</td>
				<td>
					<input type="checkbox" name="fav[]" id="" value="PHP">PHP
					<input type="checkbox" name="fav[]" id="" value="JAVA">JAVA
					<input type="checkbox" name="fav[]" id="" value="python">python
				</td>
			</tr>
			<tr>
				<td align="center">验证码</td>
				<td>
					<input type="text" name="verify"><?php echo $code; ?>
					<input type="hidden" name="verify1" value='<?php echo strip_tags($code); ?>'>
					<!--通过隐藏域传递真实的值-->
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="注册"></td>
			</tr>
		</table>
	</form>
</body>
</html>