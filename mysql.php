<?php
// 假定数据库用户名：root，密码：123456，数据库：RUNOOB 
$con=mysqli_connect("localhost","root","123456","RUNOOB");
if (mysqli_connect_errno($con))
{
echo "连接 MySQL 失败: " . mysqli_connect_error();
}
// 执行查询
mysqli_query($con,"SELECT * FROM websites");
mysqli_query($con,"INSERT INTO websites (name, url, alexa, country)
VALUES ('百度','https://www.baidu.com/','4','CN')");
mysqli_close($con);
?>
