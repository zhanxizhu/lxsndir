<?php
require('common.php');

$fileurl = 'webcheck.php';
$table = $DB->table('websites');

/** page */
$curpage = intval($_GET['page']);
if ($curpage > 1) {
	$start = ($curpage - 1) * $pagesize;
} else {
	$start = 0;
	$curpage = 1;
}

if ($action == 'check') {
	$pagesize = 10;
	// $curpage = $curpage + 1;

	$websites = $DB->fetch_all("SELECT web_id,web_name,web_url FROM $table WHERE web_status=3 ORDER BY web_id DESC LIMIT $start, $pagesize");
	$totalnum = $DB->get_count($table, $where);
	$totalpage = @ceil($totalnum / $pagesize);
	
	echo '<div style="font-size: 12px; line-height: 25px; padding: 10px;">';
	
	if ($curpage <= $totalpage) {		
		echo '<meta http-equiv="refresh" content=10;url="'.$fileurl.'?act='.$action.'&page='.($curpage+1).'">'; 
		echo '<h3>共需检测 '.$totalpage.' 页，每次检测 '.$pagesize.' 个站点，当前第 '.$curpage.' 页，正在检测网站...</h3>';
		foreach ($websites as $row) {
			$flag = url_exists("http://".$row['web_url']);  
			if ($flag){
				$status = '存在！';
			} else {
				$status = '不存在！';
				$DB->update($table, array('web_status' => 1), array('web_id' => $row['web_id']));
			}
			echo $row['web_id'].' - '.$row['web_name'].' ---> '.$status.'<br />';
		}
		echo '<h3>本页已采集完成，进行下一组检测...<h3>';
	} else {
		echo '<h3>已经检测所能网站，无效站点设置为黑名单!</h3>';	
	}
	echo '</div>';
}
function url_exists($url) 
{
	try
	{
		$head = @get_headers($url);
		return is_array($head) ?  true : false;
	}catch(Exception $e)
	{
	    return false;
	}
}
