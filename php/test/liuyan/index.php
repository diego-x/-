<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>留言功能</title>
</head>
<body>

<script type='text/javascript' src='js/jquery-1.8.3.min.js' charset='gb2312'></script>
<script type='text/javascript' src='js/onlineService.js' charset='gb2312'></script>
<div class='onlineService'>
    <p class='ico_os'></p>
</div>

<div class='getForm' id='pop_ly_id_div'>
    <div class="text" style=" text-align:center;">

        <form name='liuyan' id='gbookFrm' action='submit.php' method='post'>
            <dl>
                <font size="7" color="#f00">
        <?php
        include('../ini/cookie_check.php');
        echo $user;
        echo "&nbsp;";
        ?>提交留言
                </font>
                <dd><textarea name="text" rows="20" cols="150" id='msgtext' onblur='if (this.value ==""){this.value="请输入留言内容"}' onfocus='if (this.value =="请输入留言内容"){value =""}'>请输入留言内容</textarea> <b style='color:#f00'>* 必填项</b></dd>
                <dd><button class='msg_button' name='msg_sub'  id='button' value="submit">确 定</button></dd>
            </dl></form>
    </div>

</div>
<br><br><br><br>
 <div class="text" style=" text-align:center;">
 <font size="6"><a href="ly.php">留言板</a></p></font>
</div>
</body>
</html>
