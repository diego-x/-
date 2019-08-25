<?php
   
    include('ini/mysql_connect.php');
    include('../m_y_w_a_f.php');
    $user = word_waf($_POST["name"],"sql");
    $pass = $_POST["pass"];
	
    if($user&& $pass)
   {
     $sql = "select * from users where username='$user' and password = "."\"". md5($pass)."\"" ;
     $result = mysqli_query($con,$sql);
     $row=mysqli_fetch_array($result,MYSQLI_NUM);
      
     if(!is_null($row))
     {     
           //if(!isset($_COOKIE['id']))
           {
	   setcookie('id',md5(md5($row['2'])),time()+60*3,'/test');
           setcookie('username',md5(md5($row['0'])),time()+60*3,'/test');
	   setcookie('password',md5(md5($row['1'])),time()+60*3,'/test');
           }

       echo "<script>alert('登入成功！！')</script>";
       echo '<script language="javascript">window.location = "1/teat.php";</script>';
     }
     else
     { echo "<script>alert('登入失败！！')</script>";
       echo '<script language="javascript">window.location = "index.php";</script>';
     }
   }
    else
    {
     echo '<script language="javascript">window.location = "index.php";</script>';
    }
    mysqli_close($con);



?>
