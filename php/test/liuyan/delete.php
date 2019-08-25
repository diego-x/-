<?php
include('../ini/cookie_check.php');
include('../../m_y_w_a_f.php');
$id = word_waf($_GET['id'],"sql");
if($id||$id==0)
{
    if(is_numeric($id))
    {
        $sql = "delete from message where username ='$user' and id='$id'";
        $result = mysqli_query($con,$sql);
        if($result)
        {echo '<script>alert("删除成功！！")</script>';
            echo '<script language="javascript">window.location = "ly.php";</script>';
        }
        else
        {
            echo '<script>alert("删除失败！！")</script>';
            echo '<script language="javascript">window.location = "ly.php";</script>';
        }
    }
    else
    {
        echo '<script>alert("未知错误！！")</script>';
        echo '<script language="javascript">window.location = "ly.php";</script>';
    }
}
else
{
    echo '<script>alert("未知错误！！")</script>';
    echo '<script language="javascript">window.location = "ly.php";</script>';
}

?>

