<?php
include('mysql_connect.php');
$user = $_COOKIE['username'];
$pass = $_COOKIE['password'];
$money_my;
$id=$_COOKIE['id'];


if($id)
{
    $number = 0;
    $sql = "select * from users";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);

    for($i=$number;$i<$num;$i++)
    {
        $sql = "select * from users limit $i,1" ;
        $result = mysqli_query($con,$sql);
        $row=mysqli_fetch_array($result, MYSQLI_NUM);
        if($row)
        {
            $use = $row[0];
            $pas = $row[1];
            $money_my = $row[3];
            
            //echo $use."<br>";
           // echo $pas."<br>";
            if(md5(md5($use))===$user&&md5(md5($pas))===$pass )
            {
                $number = 1;
                $user = $row[0];
                $pass = $row[1];
            
                break;
            }
        }
    }

    if($number!=1)
    {
        echo "<script>alert('身份认证错误！！')</script>";
        echo '<script language="javascript">window.location = "../index.php";</script>';die();
    }

}
else
{
 echo "<script>alert('身份认证过期，重新登入！！')</script>";
 echo '<script language="javascript">window.location = "../index.php";</script>';
 die();
}

?>
