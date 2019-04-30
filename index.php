<!--
04/30 早班 QJC kane 汇报
1/ 出款卡冻结数量：0张
2/ 出款卡冻结金额：0元 
3/ 重复出款/上分金额：0笔
4/ 延迟20分钟以上出款的笔数：0笔
5/ 处理上分延迟20分钟以上笔数：0笔
6/ 处理上分延迟10-20分钟以上笔数：0 笔
7/ 其他-
-- 卡够+1台手机
-- 小菲 lala 9:55接班
-->





<?php require('views/widgets/header.php'); ?>

<?php 

require 'libs/loader.php';

$controller = $input->get('controller');
$action = $input->get('action');

if (empty($controller) && empty($action)) {
	$controller = 'home';
	$action = 'index';
}

load($controller,$action);

?>
<?php require('views/widgets/footer.php'); ?>