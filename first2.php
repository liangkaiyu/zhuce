<?php 
//定义表格
header('Content-type:text/html;charset=utf-8');
/*
$table="<table border=1px>
<tr>
	//表头
	<td>编号</td>
	<td>用户</td>
	<td>描述</td>
</tr>
<tr>
	<td>1</td>
	<td>liang</td>
	<td>写点什么好呀</td>

</tr>

</table>";
*/
$table=<<<EOF
<table border=1px>
<tr>
	<td>编号</td>
	<td>用户</td>
	<td>描述</td>
</tr>
<tr>
	<td>1</td>
	<td>liang</td>
	<td>写点什么好呀</td>
</tr>
</table>
EOF;

echo $table;
 ?>