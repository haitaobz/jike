<html>
<head>
<meta charset="utf-8">
<title>极客-王者荣耀</title>
</head>
<body>
<textarea name="copy" id="copy" cols="30" rows="10">
区服系统选项:<?php echo $_POST["r1"];?>
  
账号性别:<?php echo $_POST["r2"]; ?>
  
贵族等级:<?php echo $_POST["r3"]; ?>

具体大区:<?php echo $_POST["r4"]; ?>

英雄数量:<?php echo $_POST["r5"]; ?>

皮肤数量:<?php echo $_POST["r6"]; ?>

五级铭文数量:<?php echo $_POST["r7"]; ?>

成就等级:<?php echo $_POST["r8"]; ?>

王者印记:<?php echo $_POST["r9"]; ?>

当前段位:<?php echo $_POST["r10"]; ?>

限定英雄:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r11']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
荣耀水晶详细:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r12']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
限定皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r13']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
史诗皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r14']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
传说皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r15']; } 
         foreach ($area_arr as $k=>$v){ echo $v.","; } ?> 
内测及战令英雄皮肤:<?php $area_arr = array(); if($_GET['action']=="submit"){ $area_arr = $_POST['r16']; } 
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
  <dd><input class="ipt" type="radio" value="男" name="r2">男</dd> 
  <dd><input class="ipt" type="radio" value="女" name="r2">女</dd>
  <dt>贵族等级:</dt> 
  <dd>VIP<input class="ipt txt txt1" type="text" name="r3"><span>请输入数字</span></dd> 
  <dt>具体大区:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r4"><span>例：128区</span></label></dd> 
  <dt>英雄数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r5"><span>请输入数字</span></label></dd> 
  <dt>皮肤数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r6"><span>请输入数字</span></label></dd> 
  <dt>五级铭文数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r7"><span>请输入数字</span></label></dd> 
  <dt>荣耀典藏数量:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r8"><span>请输入数字</span></label></dd> 
  <dt>王者印记:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r9"><span>请输入数字</span></label></dd> 
  <dt>当前段位:</dt> 
  <dd><label> <input class="ipt txt txt1" type="text" name="r10"><span>例：钻石4</span></label></dd> 
  <dt>限定英雄:</dt> 
  <label> <input name="r11[]" type="checkbox" value="韩信">韩信</label>
  <label> <input name="r11[]" type="checkbox" value="娜可露露">娜可露露</label>
  <label> <input name="r11[]" type="checkbox" value="橘右京">橘右京</label>
  <label> <input name="r11[]" type="checkbox" value="不知火舞">不知火舞 </label>

  <dt>荣耀水晶详细:</dt> 
  <label> <input name="r12[]" type="checkbox" value="活力突击">活力突击</label>
  <label> <input name="r12[]" type="checkbox" value="无限飓风号">无限飓风号</label>
  <label> <input name="r12[]" type="checkbox" value="全息碎影">全息碎影</label>
  <label> <input name="r12[]" type="checkbox" value="武则天">武则天</label>
  <label> <input name="r12[]" type="checkbox" value="天鹅之梦">天鹅之梦</label>
  <label> <input name="r12[]" type="checkbox" value="大秦宣太后">大秦宣太后</label>
  <label> <input name="r12[]" type="checkbox" value="杀手不太冷">杀手不太冷</label>
  <label> <input name="r12[]" type="checkbox" value="星空梦想">星空梦想</label>
  <label> <input name="r12[]" type="checkbox" value="倪克斯神谕">倪克斯神谕</label>
  
  <dt>限定皮肤:</dt> 
  <dd>
  <?php 
  $pifu = array("玄武志","无限飓风号","游园惊梦","如梦令(后羿)","如梦令(嫦娥)","幽恒","玄嵩","时之彼端","岱宗","飞衡","太华","猫影幻舞","天狼征服者","梁祝","玩趣恶龙","神奇女侠","云霓雀翎","冰封战神","凤求凰","天魔缭乱","至尊宝","麒麟志","奇迹圣诞","朱雀志","白虎志","美猴王","青龙志","霸王别姬（男）","霸王别姬（女）","一生所爱","冰霜恋舞曲","大圣娶亲","逐梦之影","逐梦之翼","逐梦之光","逐梦之音","逐梦之星","圣诞老人","梅西","蜜橘之夏","纯白花嫁","真爱至上","青春决赛季","武陵仙君","热情桑巴","辉光之辰","永耀之星","云端筑梦师","凤凰于飞","魔法小厨娘","引擎之心","死亡摇滚","职业王牌","嘻哈天王","死神来了","华尔街大亨","天堂福音","仙境爱丽丝","纽约教父","幻想奇妙夜","化身博士","火炮千金","黑猫爱糖果","进击墨子号","游园惊梦","王者之锤","狮心王","蜃楼王","妖精王","炼金王","凯尔特女王","狰","饕餮","烛龙","重明","拳王","穷奇","御狮","遇见飞天","幻乐之宴","太乙真人","猎兽之王","白昼王子","天狼狩猎者"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r15[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>史诗皮肤:</dt> 
  <dd>
  <?php 
  $pifu = array("遇见神鹿","修罗","地狱岩魂","魅语","青蛇","白蛇","晚萤","箭雨风息","暗隐猎兽者","无限星赏官","猫狗日记（孙策）","猫狗日记（大乔）","暗夜贵公子","星夜王子","功夫厨神","节奏热浪","摇滚巨星","冰冠公主","龙骑士","电玩小子","偶像歌手","暗夜猫娘","苍穹之光","白龙吟","水晶猎龙者","暗隐猎兽者","特工魅影","逐浪之夏","天才门将","舞动绿茵","心灵骇客","心灵战警","鬼剑武藏","千年之狐","乘风破浪","缤纷独角兽","末日机甲（吕布）","幽灵船长","圣诞恋歌","圣诞狂欢","黄金分割率","紫霞仙子","德古拉伯爵","魅力维加斯","曙光守护者"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r14[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>传说皮肤:</dt> 
  <dd>
  <?php 
  $pifu = array("未来机甲","黄金白羊座","黄金狮子座","久胜战神","幽冥火","幽冥之眼","冠军飞将","金色仲夏夜","胖达荣荣","黄金射手座","海洋之心","地狱火","仲夏夜之梦","末日机甲（孙尚香）","地狱之眼","超时空战士","幻海之心"); 
  foreach ($pifu as $value) {
    echo "<label> <input name=\"r15[]\" type=\"checkbox\" value=\"$value\">$value</label>";
  }
  ?>
  </dd>
  
  <dt>内测及战令英雄皮肤:</dt> 
  <dd>
  <?php 
  $pifu = array("蔷薇恋人",
    "优雅恋人", 
    "艾琳（有皮肤）", 
    "艾琳（无皮肤）", 
    "典韦（蓝屏警告）", 
    "鲁班七号（狮舞东方）", 
    "兰陵王（驱魔猎人）", 
    "周瑜（赤莲之焰）", 
    "李元芳（银河之约）", 
    "沈梦溪（星空之诺）", 
    "(必选项)备注：禁止挂机，禁止动用背包里面任何东西和改名字以及金币和钻石，和删好友退战队等，发现后立刻修改" ); 
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
