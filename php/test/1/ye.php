<?php
include('../ini//cookie_check.php');

$sql = "select money from users where username ='$user'";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_NUM);

if($row)
{
    echo<<<eof

<html>
<head><head>
<body>
<br><br><br><br><br><br><br><br><br>
<div class="text" style=" text-align:center;">
<font size="18">您的余额为：</font> <font size="18" color="#f00">$row[0]</font>

<br><br>
<font size="5">转账记录</font><div>
<br>
</body>
</html>
eof;

    $sql = "select * from message_money where where_from ='$user' or where_to = '$user' ";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);


    for($i = 0 ; $i< $num ;$i++)
    {
        $sql = "select * from message_money where where_from ='$user' or where_to = '$user'  limit $i,1";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_NUM);
        
        if($row[0]===$user)
        {
         echo<<<EOF
<div class="text" style=" text-align:center;">         
<font size="5" >您向 &nbsp;&nbsp;&nbsp;</font><font size="5" color="#f00">$row[1]</font><font size="5" >&nbsp;&nbsp;转账&nbsp;&nbsp;</font><font size="5" color="#f00">$row[2]元</font><font size="5" color="#1E90FF">&nbsp;&nbsp;&nbsp;$row[3] </font>
<br><br></div>
EOF;
        }

         else if( $row[1] ===$user)
        {
         echo<<<EOF
         <div class="text" style=" text-align:center;">         
<font size="5" color="#f00">$row[0] &nbsp;&nbsp;&nbsp;</font><font size="5" >向您</font><font size="5" >&nbsp;&nbsp;转账&nbsp;&nbsp;</font><font size="5" color="#f00">$row[2]元</font><font size="5" color="#1E90FF">&nbsp;&nbsp;&nbsp;$row[3] </font>
<br><br></div>
EOF;
        }
    }

}
else
{
    echo "<script>alert('未知错误！！')</script>";
    echo '<script language="javascript">window.location = "index.php";</script>';
}

?>
<br><br><br><br><br><br>
<div class="text" style=" text-align:center;">
    <font size="6"><a href="zz.php">转账&nbsp;&nbsp;</a>&nbsp;<a href="../1/teat.php">返回个人空间&nbsp;&nbsp;</a></font>
    <font size="6"><a href="../logout.php">注销</a></p></font>
</div>
