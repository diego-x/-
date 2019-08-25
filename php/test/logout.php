<?php
include('ini/cookie_check.php');

      setcookie('id','',0,'/test');
      setcookie('username','','/test');
      setcookie('password','','/test');
   echo "<script>alert('注销成功！！')</script>";
   echo '<script language="javascript">window.location = "../index.html";</script>';
?>
