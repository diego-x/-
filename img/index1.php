
<form name="form1" method="get" action="">
<input type="password" value=""  name="password" />
<input type="submit" value="�ύ" onclick="check();"  />
</form>
<script>
 
 function check()
 {
    
    alert("�ύ�ɹ���");
 }

</script>

<?php
  
  if(isset($_GET["password"])!=0 )
  {
    if($_GET["password"]!="")
  echo $_GET["password"];
 
  }
 

?>
