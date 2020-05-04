<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
<title>php获取多选框checkbox值</title> 
</head> 
<body> 
<?php 
$area_arr = array(); 
if($_GET['action']=="submit"){ 
$area_arr = $_POST['area']; 
} 
echo "您选定的地区为: "; 
foreach ($area_arr as $k=>$v){ 
echo $v." "; 
} 
?> 
<form id="form1" name="form1" method="post" action="?action=submit"> 
<p>河北 
<label> 
<input type="checkbox" id="area" name="area[]" value="河北"> 
</label> 
</p> 
<p>河南 
<label> 
<input type="checkbox" id="area[]" name="area[]" value="河南"> 
</label> 
</p> 
<p>山西 
<label> 
<input type="checkbox" id="area[]" name="area[]" value="山西"> 
</label> 
</p> 
<p>山东 
<label> 
<input type="checkbox" id="area[]" name="area[]" value="山东"> 
</label> 
</p> 
<p>江苏 
<label> 
<input type="checkbox" id="area[]" name="area[]" value="江苏"> 
</label> 
</p> 
<p>浙江 
<label> 
<input type="checkbox" id="area[]" name="area[]" value="浙江"> 
</label> 
</p> 
<p> 
<label> 
<input type="submit" name="Submit" value="提交"> 
</label> 
</p> 
</form> 
</body> 
</html> 
