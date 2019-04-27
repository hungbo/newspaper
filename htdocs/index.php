<!-- 
04/27 早班 YB kane 汇报
1/ 出款卡冻结数量：0张
2/ 出款卡冻结金额：0元
3/ 重复出款/上分金额：0笔
4/ 延迟20分钟以上出款的笔数：0笔	
5/ 处理上分延迟20分钟以上笔数：0笔
6/ 处理上分延迟10-20分钟以上笔数：1笔 小菲zen 导记录少一笔导致延迟 18分钟
7/ 其他
-- 卡够+1台手机 小菲到齐
-- 16:10 建设银行出问题多暂停 20:00 再安排启用
-->




<?php 
require_once 'libs/loader.php';

$controller = get('controller');
$action = get('action');
if (empty($controller) && empty($action)) {
	$controller = 'controller';
	$action = 'homeController';
}


$path = $controller.'/'.$action.'.php';

if (file_exists($path)) {
	loadView($path);
}else {
	loadView('views/widgets/404.php');
}
?>