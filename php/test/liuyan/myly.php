<html>
<head>
<title>个人留言板</title>
</head>
<body>
<div class="text" style=" text-align:center;">
<font size="12" color="#228B22">
这里是  个人  留言板 
</font></div>
<br><br>
</body>
</html>

<?php
include('../ini/cookie_check.php');

  $sql = "select * from message_to_someone where where_to ='$user'";
  $result = mysqli_query($con,$sql);
  $num = mysqli_num_rows($result);

  for($i=0;$i<$num;$i++)
  {
  $sql = "select * from message_to_someone where where_to ='$user'  limit $i,1";
  $row = mysqli_fetch_array($result,MYSQLI_NUM);
   echo <<<EOF
   <div class="text" style=" text-align:center;">
<font size="5" color="#f00">
   用户 : $row[0] 
</font> <br>
 <div class="text" style=" text-align:center;">
<font size="5" color="#BA55D3">
   留言内容 : $row[2] 
</font> <br>
   <font size="4" color="#1E90FF">
  &nbsp;&nbsp;&nbsp; 留言时间 : $row[4] 
</font> <br>
EOF;
 
echo<<<EOF
<font size="3" color="#1E90FF">
  &nbsp;&nbsp;&nbsp; <a href="delete.php?id=$row[3]">删除</a></p></font>
</font> <br>
EOF;
}
else
{
echo "<br>";
}
 
 
  }

?>

 <div class="text" style=" text-align:center;">
 <font size="6"><a href="index.php">去留言&nbsp;&nbsp;</a>&nbsp;<a href="../1/teat.php">返回个人空间&nbsp;&nbsp;</a></font>
<font size="6"><a href="../logout.php">注销</a></p></font>
</div>
