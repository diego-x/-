<?php
include('../ini/cookie_check.php');
include('../../m_y_w_a_f.php');
if($_COOKIE["id"]==="")
 die();
$date = date("Y/m/d")." ".date("h:i:sa");
$txt =word_waf($_POST["text"],"xss");

if($txt && $txt !== "请输入留言内容")
{
    {  //防止多次提交
                     $sql11 = "select date from message where username = '$user'";
                    $result11 = mysqli_query($con, $sql11);
                    $number = mysqli_num_rows($result11); $number= $number -1;
                     
                    $sql11 = "select date from message where username = '$user' limit $number,1";
                    $result11 = mysqli_query($con, $sql11); $row11 = mysqli_fetch_array($result11, MYSQLI_NUM);
                      preg_match_all("/[0-9]{2}/",$row11[0],$match);
                      preg_match_all("/[0-9]{2}/",date("Y/m/d")." ".date("h:i:sa"),$match1);
                     $time1=$match1[0][4]*3600+$match1[0][5]*60+$match1[0][6];
                     $time=$match[0][4]*3600+$match[0][5]*60+$match[0][6];
                     if($time1-$time<=30&&$time1-$time>=-30) 
                      {
                     echo "<script>alert('请勿短时间内多次提交！！')</script>";
                     echo '<script language="javascript">window.location = "ly.php";</script>';die();
                       }
                    }
    $sql = "insert into message(username,message,date)values('$user','$txt','$date')";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result, MYSQLI_NUM);
    
    

    if($result)
    {

    echo '<script>alert("留言成功！！")</script>';
    echo '<script language="javascript">window.location = "ly.php";</script>';
    }
    
    mysqli_close($con);
}
else 
{
    echo '<script language="javascript">window.location = "index.php";</script>';
}


?>
