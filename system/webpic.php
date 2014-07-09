<?php
require('common.php');

$fileurl = 'webpic.php';
$table = $DB->table('websites');
$table2 = $DB->table('webdata');
$type = trim($_GET['type']);

/** page */
$curpage = intval($_GET['page']);
if ($curpage > 1) {
	$start = ($curpage - 1) * $pagesize;
} else {
	$start = 0;
	$curpage = 1;
}
if ($action == 'pre') {
	$pagesize = 5;
	$where = "web_status=3 AND length(web_pic)<>0";
	if ($type == 'pay') {
		$where .= " AND web_ispay=1";
	}else{
		$where .= " AND web_ispay=0";
	}
	
	$websites = $DB->fetch_all("SELECT web_id, web_name, web_url FROM $table WHERE $where ORDER BY web_id DESC LIMIT $start, $pagesize");
	
	echo '<div style="font-size: 12px; line-height: 25px; padding: 10px;">';
	
	foreach ($websites as $row) {
		$link="http://images.shrinktheweb.com/xino.php?stwembed=1&stwxmax=120&stwymax=90&stwaccesskeyid=3c456ab404bec7c&stwurl=http://".$row['web_url'];
		echo $row['web_name']."------->";
		echo "<img src=$link /><br />";
	}
	echo '<h3>本页已处理完成<h3>';
	
	echo '</div>';
}
/** download */
if ($action == 'down') {
	$pagesize = 5;

	$where = "web_status=3 AND length(web_pic)<>0";
	if ($type == 'pay') {
		$where .= " AND web_ispay=1";
	}else{
		$where .= " AND web_ispay=0";
	}
	
	$websites = $DB->fetch_all("SELECT web_id, web_name, web_url FROM $table WHERE $where ORDER BY web_id DESC LIMIT $start, $pagesize");
	echo '<div style="font-size: 12px; line-height: 25px; padding: 10px;">';
	
	$savepath = '../'.$options['upload_dir'].'/website/';
	echo '<h3>共需采集'.$pagesize.' 张，正在下载远程图片...</h3>';
	foreach ($websites as $row) {
		$filepath = save_to_local($row['web_url'], $savepath);
		$newpath = str_replace('../uploads/website/', '', $filepath);
		
		if (!empty($newpath)) {
			$status = '下载成功！';
			$DB->update($table, array('web_pic' => $newpath), array('web_id' => $row['web_id']));
		} else {
			$status = '下载失败！';
		}
		echo $row['web_id'].' - '.$row['web_name'].' ------ '.$status.'<br />';
	}
	echo '<h3>本页已采集完成<h3>';
	
	echo '</div>';
}

/** check */
if ($action == 'check') {
	$pagesize = 100;
	$curpage = $curpage + 1;

	$where = "web_status=3 and length(web_pic)<>0";
	$websites = $DB->fetch_all("SELECT web_id, web_name, web_pic FROM $table WHERE $where ORDER BY web_id DESC LIMIT $start, $pagesize");
	$totalnum = $DB->get_count($table, $where);
	$totalpage = @ceil($totalnum / $pagesize);
	
	echo '<div style="font-size: 12px; line-height: 25px; padding: 10px;">';
	if ($curpage <= $totalpage) {
		$savepath = '../'.$options['upload_dir'].'/website/';
		
		echo '<meta http-equiv="refresh" content=30;url="'.$fileurl.'?act='.$action.'&page='.$curpage.'">';
		echo '<h3>总共 '.$totalpage.' 页，每次检测 '.$pagesize.' 条，正在检测第 '.$curpage.' 页...</h3>';
		foreach ($websites as $row) {
			if (!file_exists($savepath.$row['web_pic'])) {
				$status = '图片不存在！';
				$DB->update($table, array('web_pic' => ''), array('web_id' => $row['web_id']));
			} else {
				$status = '图片存在-->'.$row['web_pic'];
			}
			echo $row['web_id'].' - '.$row['web_name'].' ------ '.$status.'<br />';
		}
		echo '<h3>本页已检测完成，10秒后将自动检测下一页...<h3>';
	} else {
		echo '<h3>所有站点检测成功!</h3>';
	}
	echo '</div>';
}
