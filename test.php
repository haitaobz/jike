<form name="form1" method="post" action="">
<label><input type="checkbox" name="checkbox[]" value="复选一"></label>
<label><input type="checkbox" name="checkbox[]" value="复选二"></label>复选二
<label><input type="checkbox" name="checkbox[]" value="复选三"></label>复选三
<label><input type="checkbox" name="checkbox[]" value="复选四"></label>复选四

 

<label><input type="submit" name="Submit" value="提交"></label>
</form>
<?php
if( $_POST )
{
$value = $_POST['checkbox'];
echo '你的选择:'.implode(',',$value);
}
?>
