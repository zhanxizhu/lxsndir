<?php
require('common.php');
require(APP_PATH.'module/diypage.php');
require(APP_PATH.'module/prelink.php');
require(APP_PATH.'module/website.php');
require(APP_PATH.'module/category.php');
require(APP_PATH.'module/article.php');
require(APP_PATH.'module/weblink.php');
require(APP_PATH.'module/update.php');

$fileurl = 'sitemap.php';
$tempfile = 'sitemap.html';

$table = $DB->table('websites');

$pagetitle = '网站地图';
$url =  "http://".$_SERVER['HTTP_HOST'];
$dir = $options['site_root'];
$timescope = array('0','1','3','7','30','365');

/** xml */
if ($action == 'txt') {
	//头部
	$main = get_head_menu($url,0);
	//底部菜单
	$main .= get_pages_sitemap($url,0);
	//webdir 网站 
	$smlist = "";
	$total = $DB->get_count($table.' w');
	$pagenum = @ceil($total / 40000);
	//超过4万条时生成多个文件
	for($i=1; $i<=$pagenum; $i++){
		$sm_file = "../sitemapw".$i.".txt";
		file_put_contents($sm_file, get_website_sitemap_type($i-1,40000));
		$smlist .=$url.$dir."sitemapw".$i.".txt\n";
	}
	/* // article 文章
	$sm_file = '../sitemapc.txt';
	file_put_contents($sm_file, get_article_sitemap_type());
	$smlist .=$url.$dir."sitemapc.txt\n"; */
	$main .=get_article_sitemap_type();
	//category 
	$main .=get_category_sitemap($url);
	$main .=$smlist;
	//weblink
	$main .=get_weblink_sitemap();
	//update
	foreach ($timescope as $key) {
		$where = get_update_where($key);
		$main = $main.pro_sitemap_url($url,$DB->get_count($table.' w', $where),$key);
	}
	//archives
	$archives=get_archives();
	foreach ($archives as $year=>$arr) {
		foreach ($arr as $month=>$item){
			$main .=pro_sitemap_url($url,$item['site_count'],$year.$month,1);
		}
	}
	unset($archives);
	$sm_file = '../sitemap.txt';
	file_put_contents($sm_file, $main);
	unset($main);
	$langtxt="站点地图(sitemap.txt)已经生成到相应目录下。地址为：<br/>".$url.$dir.'/sitemap.txt<br/>'.str_replace('\n', '<br/>',$smlist);
	msgbox($langtxt);
}

/** txt */
if ($action == 'xml') {
	$header ="<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
	$end = "</urlset>";
	//头部
	$main .=$header;
	$main .= get_head_menu($url,1);
	//底部菜单
	$main .= get_pages_sitemap($url,1);
	//webdir 网站 
	$smlist = "";
	$total = $DB->get_count($table.' w');
	$pagenum = @ceil($total / 40000);
	//超过4万条时生成多个文件
	for($i=1; $i<=$pagenum; $i++){
		$sm_file = "../sitemapw".$i.".xml";
		file_put_contents($sm_file, $header.get_website_sitemap_type($i-1,40000,1).$end);
		$smlist .=$url.$dir."sitemapw".$i.".xml\n";
	}
	/* // article 文章
	$sm_file = '../sitemapc.xml';
	file_put_contents($sm_file, $header.get_article_sitemap_type(1).$end);
	$smlist .=$url.$dir."sitemapc.xml\n"; */
	$main .=get_article_sitemap_type(1);
	//category 
	$main .=get_category_sitemap($url,1);
	//weblink
	$main .=get_weblink_sitemap(1);
	//update
	foreach ($timescope as $key) {
		$where = get_update_where($key);
		$main = $main.pro_sitemap_url($url,$DB->get_count($table.' w', $where),$key,0,1);
	}
	//archives
	$archives=get_archives();
	foreach ($archives as $year=>$arr) {
		foreach ($arr as $month=>$item){
			$main .=pro_sitemap_url($url,$item['site_count'],$year.$month,1,1);
		}
	}
	unset($archives);
	$main .=$end;
	$sm_file = '../sitemap.xml';
	file_put_contents($sm_file, $main);
	
	$langtxt="站点地图(sitemap.xml)已经生成到相应目录下。地址为：<br/>".$url.$dir.'/sitemap.xml<br/>'.str_replace('\n', '<br/>',$smlist);
	msgbox($langtxt);
}

/** html */
if ($action == 'html') {
	/* $sm_file = '../update.txt';
	
	$pageurl = "";
	$archives=get_archives();
	foreach ($archives as $year=>$arr) {
		foreach ($arr as $month=>$item){
			$pageurl .=pro_sitemap_url($url,$item['site_count'],$year.$month,1);
		}
	}
 	file_put_contents($sm_file, $pageurl);
	$langtxt="站点地图(update.txt)已经生成到相应目录下。地址为：<br/>".$url.'/update.txt<br/>';
	msgbox($langtxt); */ 
}
smarty_output($tempfile);
?>