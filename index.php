<html>
<head>
<meta charset="utf-8">
<title>极客</title>
</head>
<body>
<form action="?" method="get">
<dt>
区服系统选项:</dt> 
<dd> 
    <label> <input class="ipt" type="radio" value="苹果QQ" name="r1">
         苹果QQ</label>
      </dd> 
      <dd> 
       <label> <input class="ipt" type="radio" value="苹果VX" name="r1">苹果微信 </label> 
      </dd> 
      <dd> 
       <label> <input class="ipt" type="radio" value="安卓QQ" name="r1">安卓QQ </label> 
      </dd> 
      <dd> 
       <label> <input class="ipt" type="radio" value="安卓VX" name="r1">安卓微信 </label> 
      </dd> 
          
            <input name="HF_pingtai" type="hidden" id="HF_pingtai">

      <dt>
<br>
账号性别: <input type="text" name="2">
<input type="submit" value="提交">
</form>
</body>
</html>

<textarea autoHeight="true">
区服系统选项<?php echo $_GET["r1"]; ?>

账号性别<?php echo $_GET["2"]; ?>
</textarea>
