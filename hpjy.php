<html>
<head>
<meta charset="utf-8">
<title>极客</title>
</head>
<body>
<textarea name="copy" id="copy" cols="30" rows="16">
区服系统选项:<?php echo $_POST["r1"];?>
  
账号性别:<?php echo $_POST["r2"]; ?>
  
充值金额(大概即可):<?php echo $_POST["r3"]; ?>

具体大区:<?php echo $_POST["r4"]; ?>

套装数量(仓库内查看):<?php echo $_POST["r5"]; ?>

枪械皮肤数量（仓库内查看）:<?php echo $_POST["r6"]; ?>

粉套装数量（仓库内查看）:<?php echo $_POST["r7"]; ?>

飞行器数量（仓库内查看）:<?php echo $_POST["r8"]; ?>

载具数量（仓库内查看）:<?php echo $_POST["r9"]; ?>

当前段位:<?php echo $_POST["r10"]; ?>

载具皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r11']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
五曜皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r12']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
套装皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r13']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
无等级枪械皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r14']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
有等级枪械皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r15']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
飞行器皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r16']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
</textarea>
<br> 
<input type="button" value="点击复制给客服" onclick="Copy()">
<form action="?action=submit" method="post">
  <dt>区服系统选项:</dt> 
  <dd><input class="ipt" type="radio" value="苹果QQ" name="r1">苹果QQ</dd> 
  <dd><input class="ipt" type="radio" value="苹果VX" name="r1">苹果微信</dd> 
  <dd><input class="ipt" type="radio" value="安卓QQ" name="r1">安卓QQ</dd> 
  <dd><input class="ipt" type="radio" value="安卓VX" name="r1">安卓微信</dd> 
  <dt>账号性别:</dt> 
  <dd><input class="ipt" type="radio" value="男号" name="r2">男号</dd> 
  <dd><input class="ipt" type="radio" value="女号 " name="r2">女号 </dd>
  <dt>充值金额(大概即可):</dt> 
  <dd><input class="ipt txt txt1" type="text" name="r3"><span>请输入数字</span></dd> 
  <dt>具体大区:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r4"><span>例：128区</span></label></dd> 
  <dt>套装数量(仓库内查看):</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r5">个<span>请输入数字</span></label></dd> 
  <dt>枪械皮肤数量（仓库内查看）:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r6">个<span>请输入数字</span></label></dd> 
  <dt>粉套装数量（仓库内查看）:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r7">个<span>请输入数字</span></label></dd> 
  <dt>飞行器数量（仓库内查看）:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r8">个<span>请输入数字</span></label></dd> 
  <dt>载具数量（仓库内查看）:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r9">个<span>请输入数字</span></label></dd> 
  <dt>当前段位:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r10"><span>例：钻石4</span></label></dd> 
  <dt>载具皮肤:</dt> 
  <label> <input name="r11[]" type="checkbox" value="金色玛莎拉蒂">金色玛莎拉蒂</label>
  <label> <input name="r11[]" type="checkbox" value="粉色玛莎拉蒂">粉色玛莎拉蒂</label>
  <label> <input name="r11[]" type="checkbox" value="蓝色玛莎拉蒂">蓝色玛莎拉蒂</label>
  <label> <input name="r11[]" type="checkbox" value="梦幻火箭摩托">梦幻火箭摩托</label>
  <label> <input name="r11[]" type="checkbox" value="南瓜车">南瓜车</label>

  <dt>五曜皮肤:</dt> 
  <dd>
  <?php 
  $pifu = array("五曜-土曜","五曜-金曜","五曜-木曜","五曜-水曜","五曜-火曜"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r12[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>

  <dt>套装皮肤:</dt> 
  <dd>
  <?php 
  $pifu = array("火箭少女套装","蝶舞迷情套装","雪国梦幻套装","深渊皇后套装","快乐主宰套装","浪漫波比套装","柯基套装","胖达团团套装","胖达圆圆套装","萌熊套装","酷熊套装","星际漫游套装","折纸暴龙套装","春暖花开套装","甜心巧克力套装","小丑套装","万圣节(南瓜)套装","向日葵套装","蜘蛛突变者套装","奇异狩猎者套装","数码大师套装","巴纳纳套装","深海小丑鱼套装","狂战萌兔套装","青蛙套装","电音之王套装","金羽特工套装","火箭少女101套装","幻影战神套装"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r13[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>无等级枪械皮肤:</dt> 
  <dd>
  <?php 
  $pifu = array("星际漫游M416","黄金龙骨SCAR","AKM冰凉西瓜","火箭少女M4","狮王M4","百万伏特AK","黄金龙骨AWM","南瓜M4","快乐主宰M4"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r14[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>有等级枪械皮肤:</dt> 
  <dd>
  <?php 
  $pifu = array("M4五爪金龙（1级）","M4五爪金龙（2级）","M4五爪金龙（3级）","M4五爪金龙（4级）","M4五爪金龙（5级）","M4五爪金龙（6级）","M4五爪金龙（7级）","HMP45雪国精灵（1级）","HMP45雪国精灵（2级）","HMP45雪国精灵（3级）","HMP45雪国精灵（4级）","HMP45雪国精灵（5级）","HMP45雪国精灵（6级）","HMP45雪国精灵（7级）","SCAR梦幻火箭（1级）","SCAR梦幻火箭（2级）","SCAR梦幻火箭（3级）","SCAR梦幻火箭（4级）","SCAR梦幻火箭（5级）","SCAR梦幻火箭（6级）","SCAR梦幻火箭（7级）","AKM甜心宝贝的（1级）","AKM甜心宝贝的（2级）","AKM甜心宝贝的（3级）","AKM甜心宝贝的（4级）","AKM甜心宝贝的（5级）","AKM甜心宝贝的（6级）","AKM甜心宝贝的（7级）"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r15[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>飞行器皮肤:</dt> 
  <dd>
  <?php 
  $pifu = array("春暖花开飞行器 ","梦幻火箭飞行器"); 
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
