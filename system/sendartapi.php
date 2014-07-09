<?php
//接口密码，请修改，并与远程控制端密码一致
$pid = "xdmozorg123";
require('./load.php');
$sid = $_POST['sid'];
$ac = $_POST['ac'];
$seq = $_POST['seq'];
//权限检查
if($pid != $sid){
	echo $seq.'-->Key值无法匹配。';
	exit;
}
$ac = empty($ac)?"":$ac;

$table = $DB->table('articles');

if ($ac == "sav") {
	$cate_id = intval($_POST['cid']);
	$art_title = trim($_POST['t']);
	$art_tags = addslashes(trim($_POST['l']));
	$copy_from = trim($_POST['s']);
	$copy_url = trim($_POST['u']);
	$art_intro = strip_tags(trim($_POST['d']));
	$art_content = $_POST['c'];;
	$art_status = 3;
	$art_time = time();
	
	$art_data = array(
		'cate_id' => $cate_id,
		'art_title' => $art_title,
		'art_tags' => $art_tags,
		'copy_from' => $copy_from,
		'copy_url' => $copy_url,
		'art_intro' => $art_intro,
		'art_content' => $art_content,
		'art_views' => $art_views,
		'art_ispay' => $art_ispay,
		'art_istop' => $art_istop,
		'art_isbest' => $art_isbest,
		'art_status' => $art_status,
		'art_ctime' => $art_time,
	);
	$DB->insert($table, $art_data);
	$DB->query("UPDATE ".$DB->table('categories')." SET cate_postcount=cate_postcount+1 WHERE cate_mod='article' AND cate_id=$cate_id");
	echo $seq.'-->发布成功。';
}
?>