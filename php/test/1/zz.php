<?php
include('../ini/cookie_check.php');
include('../../m_y_w_a_f.php');
?>

<html>
<head>
    <title>转账</title>
</head>
<body>
<br><br><br><br><br><br><br>
<div class="text" style=" text-align:center;">
    <form name = "zhuanzhang" method ="post" action="">
        <font size="5" color="#f00">转账人&nbsp;&nbsp;&nbsp;</font> <input type = "text" name = "to" /><p>
            <font size="5" color="#f00">转账金额</font>  <input type = "text" name = "money" /><p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "submit" name ="submit" value="提交">
    </form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="text" style=" text-align:center;">
    <font size="6"><a href="ye.php">返回钱包&nbsp;&nbsp;</a>&nbsp;<a href="../1/teat.php">返回个人空间&nbsp;&nbsp;</a></font>
    <font size="6"><a href="../logout.php">注销</a></p></font>
</div>
</body>
</html>
<?php
$to = word_waf($_POST["to"],"sql");
$money = word_waf($_POST["money"],"sql");

if($_POST["submit"])
{
    if($to&&$money)
    {
        if($money>=10)
        {
            if($to !== $user)
            {
                $sql = "select username from users where username='$to'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_NUM);
                if ($row) {
                    $sql = "select money from users where username ='$to'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_NUM);
                    $money_to = $row[0];
                    $money_to += $money;
                    $money_my -= $money;
                    if($money_my<=0)
                    {
                        echo "<script>alert('余额不足！！')</script>";
                        echo '<script language="javascript">window.location = "ye.php";</script>';die();
                    }
                    if($money>1000)
                    {
                        echo "<script>alert('最大金额不能超过1000！！')</script>";
                        echo '<script language="javascript">window.location = "ye.php";</script>';die();
                    }

                    {  //防止多次提交
                     $sql11 = "select data from message_money where where_from = '$user'";
                    $result11 = mysqli_query($con, $sql11);
                    $number = mysqli_num_rows($result11); $number= $number -1;
                     
                    $sql11 = "select data from message_money where where_from = '$user' limit $number,1";
                    $result11 = mysqli_query($con, $sql11); $row11 = mysqli_fetch_array($result11, MYSQLI_NUM);
                      preg_match_all("/[0-9]{2}/",$row11[0],$match);
                      preg_match_all("/[0-9]{2}/",date("Y/m/d")." ".date("h:i:sa"),$match1);
                     $time1=$match1[0][4]*3600+$$match1[0][5]*60+$match1[0][6];
                     $time=$match[0][4]*3600+$$match[0][5]*60+$match[0][6];
                     if($time1-$time<=30&&$time1-$time>=-30) 
                      {
                     echo "<script>alert('请勿短时间内多次提交！！')</script>";
                     echo '<script language="javascript">window.location = "ye.php";</script>';die();
                       }
                    }


                    $sql1 = "UPDATE `users` SET `money` = '$money_my' WHERE `users`.`username` = '$user'";
                    $sql2 = "UPDATE `users` SET `money` = '$money_to' WHERE `users`.`username` = '$to'";
                    $result1 = mysqli_query($con, $sql1);
                    $result2 = mysqli_query($con, $sql2);
                    if($result1&&$result2)
                    {
                         
                        $date = date("Y/m/d")." ".date("h:i:sa");
                        $sql = "insert into message_money(where_from,where_to,money,data)values('$user','$to',$money,'$date')";
                        $result = mysqli_query($con, $sql);

                        echo "<script>alert('转账成功！！')</script>";                       
                        echo '<script language="javascript">window.location = "ye.php";</script>';die();
                    }
                    else

                    {
                        echo "<script>alert('转账失败！！')</script>";
                        echo '<script language="javascript">window.location = "ye.php";</script>';die();
                    }
                }
                else{

                    echo "<script>alert('用户不存在！！')</script>";
                    echo '<script language="javascript">window.location = "ye.php";</script>';
                    die();
                }
            }
            else
            {
                echo "<script>alert('不能转给自己！！')</script>";
                echo '<script language="javascript">window.location = "zz.php";</script>';
                die();
            }
        }
        else
        {

            echo "<script>alert('金额大于10！！')</script>";
            echo '<script language="javascript">window.location = "zz.php";</script>';die();
        }
    }
    else
    {

        echo '<script language="javascript">window.location = "zz.php";</script>';
    }
}
?>

