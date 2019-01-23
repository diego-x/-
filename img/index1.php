
<form name="form1" method="get" action="">
<input type="password" value=""  name="password" />
<input type="submit" value="提交" onclick="check();"  />
</form>
<script>
 
 function check()
 {
    
    alert("提交成功！");
 }

</script>

<?php
  
  if(isset($_GET["password"])!=0 )
  {
    if($_GET["password"]!="")
  echo $_GET["password"];
 
  }
 

?>
