<?php 
header('Content-type:text/html;charset=utf-8');
$username='liangdaxia';
echo "我的名字是$username";
echo '<br/>';
echo '我的名字是$username';
echo '<br/>';
echo "我的名字是{$username}s";
echo '<br/>';

$username{10}='d';//增liangdaxiad
echo $username;
echo '<br/>';
$username{4}='';//删liandaxiad
echo $username;
echo '<br/>';
$username{0}='b';//改biandaxiad
echo $username;
echo '<br/>';
echo $username{0};//查b


 ?>
