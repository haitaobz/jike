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
  <dd><label>VIP <input class="ipt txt txt1" type="text" name="r3"><span>请输入数字</span></label></dd> 
  <br>
  
  <dt>具体大区:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r4"><span>例：128区</span></label></dd> 
  <br>  
  
  <dt>英雄数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r5"><span>请输入数字</span></label></dd> 
  <br>
  
  <dt>皮肤数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r6"><span>请输入数字</span></label></dd> 
  <br>
  
  <dt>五级铭文数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r7"><span>请输入数字</span></label></dd> 
  <br>
  
  <dt>荣耀典藏数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r8"><span>请输入数字</span></label></dd> 
  <br>
  
  <dt>王者印记:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r9"><span>请输入数字</span></label></dd> 
  <br>
  
  <dt>当前段位:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r10"><span>例：钻石4</span></label></dd> 
  <br>
  
  
  <dt>限定英雄:</dt> 
  <dd><label> <input name="r11[]" type="checkbox" value="韩信">韩信</label></dd>
  <dd><label> <input name="r11[]" type="checkbox" value="娜可露露">娜可露露</label></dd>
  <dd><label> <input name="r11[]" type="checkbox" value="橘右京">橘右京</label></dd>
  <dd><label> <input name="r11[]" type="checkbox" value="不知火舞">不知火舞 </label></dd>

  <dt>荣耀水晶详细:</dt> 
  <dd><label> <input name="r12[]" type="checkbox" value="活力突击">活力突击</label></dd>
  <dd><label> <input name="r12[]" type="checkbox" value="无限飓风号">无限飓风号</label></dd>
  <dd><label> <input name="r12[]" type="checkbox" value="全息碎影">全息碎影</label></dd>
  <dd><label> <input name="r12[]" type="checkbox" value="武则天">武则天</label></dd>
  <dd><label> <input name="r12[]" type="checkbox" value="天鹅之梦">天鹅之梦</label></dd>
  <dd><label> <input name="r12[]" type="checkbox" value="武则天">武则天</label></dd>
  <dd><label> <input name="r12[]" type="checkbox" value="大秦宣太后">大秦宣太后</label></dd>
  <dd><label> <input name="r12[]" type="checkbox" value="杀手不太冷">杀手不太冷</label></dd>
  <dd><label> <input name="r12[]" type="checkbox" value="星空梦想">星空梦想</label></dd>
  <dd><label> <input name="r12[]" type="checkbox" value="倪克斯神谕">倪克斯神谕</label></dd>
  

<input type="submit" value="提交">
</form>
</body>
</html>

<textarea name="copy" id="copy" cols="30" rows="10">
区服系统选项:<?php echo $_POST["r1"];?>
  
账号性别:<?php echo $_POST["r2"]; ?>
  
贵族等级:<?php echo $_POST["r3"]; ?>

限定英雄:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r11']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
  
荣耀水晶详细:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r12']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
</textarea>
<br> 
<input type="button" value="点击复制给客服" onclick="Copy()">

<script>
    function Copy() {
        // 获取Dom节点
       var copy = document.getElementById('copy');
        //  用select函数将文本内容选中
        copy.select();
        document.execCommand('Copy');
        alert('复制成功')

    }        
</script>
