<html>
<head>
<meta charset="utf-8">
<title>极客</title>
</head>
<body>
<form action="?action=submit" method="post">
  <dt>区服系统选项:</dt> 
  <dd><label> <input class="ipt" type="radio" value="苹果QQ" name="r1">苹果QQ</label></dd> 
  <dd><label> <input class="ipt" type="radio" value="苹果VX" name="r1">苹果微信 </label></dd> 
  <dd><label> <input class="ipt" type="radio" value="安卓QQ" name="r1">安卓QQ </label></dd> 
  <dd><label> <input class="ipt" type="radio" value="安卓VX" name="r1">安卓微信 </label></dd> 

  <dt>账号性别:</dt> 
  <dd><label> <input class="ipt" type="radio" value="男" name="r2">男</label></dd> 
  <dd><label> <input class="ipt" type="radio" value="女" name="r2">女</label></dd>
  <br>
  
  <dt>贵族等级:</dt> 
  <dd><label>VIP <input class="ipt txt txt1" type="text" name="r3" id="r3"><span>请输入数字</span></label></dd> 
  <br>   

  <dt>限定英雄:</dt> 
  <dd><label> <input name="r4[]" type="checkbox" value="韩信">韩信</label></span></dd>
  <dd><label> <input name="r4[]" type="checkbox" value value="娜可露露">娜可露露</label></span></dd>
  <dd><label> <input name="r4[]" type="checkbox" value value="橘右京">橘右京</label></span></dd>
  <dd><label> <input name="r4[]" type="checkbox" value="不知火舞">不知火舞 </label></span></dd>


<input type="submit" value="提交">
</form>
</body>
</html>

<textarea autoHeight="true">
区服系统选项:<?php echo $_POST["r1"];?>&#10;
账号性别:<?php echo $_POST["r2"]; ?>&#10;
贵族等级:<?php echo $_POST["r3"]; ?>&#10;

<?php 
$area_arr = array(); 
if($_GET['action']=="submit"){ 
$area_arr = $_POST['r4']; 
} 
echo "您选定的地区为: "; 
foreach ($area_arr as $k=>$v){ 
echo $v." "; 
} 
?> 
</textarea>
