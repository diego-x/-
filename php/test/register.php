<title>注册</title>
<?php
$con=mysqli_connect("localhost","user1","password","www");
if(!$con)
{
    die("error:".mysqli_connect_error());
}
include('../m_y_w_a_f.php');
$regname =word_waf( $_POST["regname"],"sql");
$regpass = $_POST["regpass"];
$reregpass = $_POST["reregpass"];

if($regname && $regpass && $reregpass)
{
    if($regpass != $reregpass)
    {
        echo "<script>alert('密码不相同！！')</script>";
        die('<script language="javascript">window.location = "index.php";</script>');
    }
     
    $sql1 = "select username from users where username="." \"$regname\"";
    $result = mysqli_query($con,$sql1);
    $row=mysqli_fetch_array($result,MYSQLI_NUM);
    if(empty($row))
    {   if(strlen($regname)>20)
        {
         echo "<script>alert('名称过长！！')</script>";
          echo '<script language="javascript">window.location = "index.php";</script>';
          die();
        }
        $sql = "insert into users(username,password)values("."\"$regname\""."," ."\"". md5("$regpass")."\"". ")";     
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_NUM);
        if($result)
        {
            echo "<script>alert('注册成功！！')</script>";
            die('<script language="javascript">window.location = "index.php";</script>');

        }
        else
        {
            echo "<script>alert('注册失败！！')</script>";
            echo '<script language="javascript">window.location = "index.php";</script>';
        }
    }
    else
    {
        echo "<script>alert('名称已被使用！！')</script>";
        echo '<script language="javascript">window.location = "index.php";</script>';
    }
}
?>

