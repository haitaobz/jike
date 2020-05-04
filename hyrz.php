<html>
<head>
<meta charset="utf-8">
<title>极客</title>
</head>
<body>
<textarea name="copy" id="copy" cols="30" rows="16">
区服系统选项:<?php echo $_POST["r1"];?>
    
贵族等级:<?php echo $_POST["r2"]; ?>

区服:<?php echo $_POST["r3"]; ?>

战斗力:<?php echo $_POST["r4"]; ?>

等级:<?php echo $_POST["r5"]; ?>

S忍者数量:<?php echo $_POST["r6"]; ?>

A忍者数量:<?php echo $_POST["r7"]; ?>

S忍:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r8']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
A忍:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r9']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
通灵兽:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r10']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
</textarea>
<br> 
<input type="button" value="点击复制给客服" onclick="Copy()">
<form action="?action=submit" method="post">
  <dt>区服系统选项:</dt> 
  <dd><input class="ipt" type="radio" value="苹果QQ" name="r1">苹果QQ</dd> 
  <dd><input class="ipt" type="radio" value="安卓QQ" name="r1">安卓QQ</dd> 
  <dt>贵族等级:</dt> 
  <dd>VIP<input class="ipt txt txt1" type="text" name="r2"><span>请输入数字</span></dd> 
  <dt>区服:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r3"><span>请输入数字</span></label></dd> 
  <dt>战斗力:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r4">个<span>请输入数字</span></label></dd> 
  <dt>等级:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r5">个<span>请输入数字</span></label></dd> 
  <dt>S忍者数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r6">个<span>请输入数字</span></label></dd> 
  <dt>A忍者数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r7">个<span>请输入数字</span></label></dd> 
  
  <dt>S忍:</dt> 
  <dd>
  <?php 
  $pifu = array("秽土波风水门","自来也","仙人自来也","大蛇丸","纲手","波风水门","猿飞日斩","秽土猿飞日斩","千手扉间","千手柱间","宇智波斑","须佐能乎鼬","神秘面具男","鬼灯幻月","四代目雷影","金角银角","大野木","天道佩恩","长门"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r8[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>

  <dt>A忍:</dt> 
  <dd>
  <?php 
  $pifu = array("地陆","仙人鸣人","鹰小队佐助","疾风咒印佐助","百豪春野樱","忍战丁次","卡卡西","神威卡卡西","凯","惊门凯","阿斯玛","秽土阿斯玛","止水","志村团藏","青年猿飞日斩","新春波风水门","疾风传我爱罗","忍战我爱罗","忍战勘九郎","照美冥","再不斩","奇拉比","达鲁伊","三船","小南","泳装小南","绝","角度","地怨虞角都","大蛇丸晓","蝎","百机操演蝎","宇智波鼬","鬼鲛","鲛肌融合鬼鲛","迪达拉","阿飞","飞段","死司凭血飞段"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r9[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>通灵兽:</dt> 
  <dd>
  <?php 
  $pifu = array("忍犬","蓝蛇","蛤蟆吉","忍龟","镰鼬","猿魔","山椒鱼","蛤蟆仙人","鲛鲨","蛤蟆健","乌鸦","蛤蟆龙","蛞蝓","蛤蟆广","梦貘","鹰","蜘蛛","螃蟹","变色龙","熊猫","一尾守鹤","蛤蟆文太","万蛇"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r10[]\" type=\"checkbox\" value=\"$value\">$value</label>";
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
