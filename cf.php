<html>
<head>
<meta charset="utf-8">
<title>极客</title>
</head>
<body>
<textarea name="copy" id="copy" cols="30" rows="16">
区服系统选项:<?php echo $_POST["r1"];?>
  
是否成年号（健康系统）:<?php echo $_POST["r2"]; ?>
  
贵族等级:<?php echo $_POST["r3"]; ?>

角色等级:<?php echo $_POST["r4"]; ?>

英雄级武器数量:<?php echo $_POST["r5"]; ?>

玩偶:<?php echo $_POST["r6"]; ?>

英雄武器光效:<?php echo $_POST["r7"]; ?>

英雄武器皮肤:<?php echo $_POST["r8"]; ?>

多个英雄武器:<?php echo $_POST["r9"]; ?>

多个武器:<?php echo $_POST["r10"]; ?>

英雄人物:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r11']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
英雄步枪:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r12']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
英雄手枪:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r13']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
英雄狙击:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r14']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
英雄机枪:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r15']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
英雄近身及投掷武器:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r16']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
</textarea>
<br> 
<input type="button" value="点击复制给客服" onclick="Copy()">
<form action="?action=submit" method="post">
  <dt>区服系统选项:</dt> 
  <dd><input class="ipt" type="radio" value="苹果QQ" name="r1">苹果QQ</dd> 
  <dd><input class="ipt" type="radio" value="安卓QQ" name="r1">安卓QQ</dd> 
  <dt>是否成年号（健康系统）:</dt> 
  <dd><input class="ipt" type="radio" value="成年" name="r2">成年</dd> 
  <dd><input class="ipt" type="radio" value="未成年" name="r2">未成年</dd>
  <dt>贵族等级:</dt> 
  <dd>VIP<input class="ipt txt txt1" type="text" name="r3"><span>请输入数字</span></dd> 
  <dt>角色等级:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r4"><span>请输入数字</span></label></dd> 
  <dt>英雄级武器数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r5">个<span>请输入数字</span></label></dd> 
  <dt>玩偶:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r6">个<span>请输入数字</span></label></dd> 
  <dt>英雄武器光效:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r7">个<span>请输入数字</span></label></dd> 
  <dt>英雄武器皮肤:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r8">个<span>请输入数字</span></label></dd> 
  <dt>多个英雄武器:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r9">个<span>请输入数字</span></label></dd> 
  <dt>多个武器:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r10"><span>请写X2 X3这种</span></label></dd> 
  <dt>英雄人物:</dt> 
  <label> <input name="r11[]" type="checkbox" value="樱">樱</label>
  <label> <input name="r11[]" type="checkbox" value="孤狼">孤狼</label>
  <label> <input name="r11[]" type="checkbox" value="龙野">龙野</label>
  <label> <input name="r11[]" type="checkbox" value="葵">葵</label>
  <label> <input name="r11[]" type="checkbox" value="萝拉">萝拉</label>
  <label> <input name="r11[]" type="checkbox" value="审判者">审判者</label>
  <label> <input name="r11[]" type="checkbox" value="零">零</label>

  <dt>英雄步枪:</dt> 
  <dd>
  <?php 
  $pifu = array("王者之影","王者之魄","冠军之魄","变色龙","武圣","AK游骑兵","冰魂","M4沙漠领主","王者之心","超新星","火麒麟","死神","死神9A91","M4游骑兵","黑武士","无影","雷神","麒麟","黑龙","黑骑士","常胜","星速","夜袭","火麒麟灵狐","樱龙","角斗士","卧龙","枪娘","君威","恶魔","耀金伯爵","机械纪元","AK沙漠领主","幽暗骑士","牡丹精灵","天使","玫瑰精灵","暗夜","剑齿虎","天启"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r12[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>

  <dt>英雄手枪:</dt> 
  <dd>
  <?php 
  $pifu = array("死神","武圣","游骑兵","王者之灵","雷神","天魔缭乱","无影","天神","火麒麟","黑武士","修罗","定军","神罚","飞电"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r15[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>英雄狙击:</dt> 
  <dd>
  <?php 
  $pifu = array("游骑兵","王者之怒","天神","毁灭","雷神","极光","天龙","定军","枪娘"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r14[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>英雄机枪:</dt> 
  <dd>
  <?php 
  $pifu = array("炼狱","赤炎盘龙","盘龙","烈龙","寒霜烈龙","黑龙魂","堡垒"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r15[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>英雄近身及投掷武器:</dt> 
  <dd>
  <?php 
  $pifu = array("死神","游骑兵","斩神刀","斩魔刀","雷霆","无影","火麒麟尼泊尔","麒麟刺","擎天","耀金雷刃","毁灭","屠龙","龙啸","王者之啸","嗜血金鲨","弑魔者","神罚战斧","王者之影手雷","王者之影闪光弹","王者之影烟雾弹","火麒麟手雷","火麒麟闪光弹","火麒麟烟雾弹","黑武士手雷","黑武士闪光弹","黑武士烟雾弹"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r16[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
<input type="submit" value="提交">
</form>
</body>
</html>
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
