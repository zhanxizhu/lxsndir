<?php
function get_update_where($date) {
	$where = "w.web_status=3";
	$now = time();
	switch ($date) {
		case 1 :
			$time = $now - (3600 * 24);
			break;
		case 3 :
			$time = $now - (3600 * 24 * 3);
			break;
		case 7 :
			$time = $now - (3600 * 24 * 7);
			break;
		case 30 :
			$time = $now - (3600 * 24 * 30);
			break;
		case 365 :
			$time = $now - (3600 * 24 * 365);
			break;
		default :
			$time = 0;
			break;
	}
	$where .= " AND w.web_ctime>=$time";
	return $where;
}

function pro_sitemap_url($url,$total,$date,$type=0,$stype=0) {
	$pagesize=10;
	$pagenum = @ceil($total / $pagesize);
	$webStr = "";
	for($i=1; $i<=$pagenum; $i++){
		if($type==0){
			$turl=$url.get_update_url($date,$i);
		}else{
			$turl=$url.get_archives_url($date,$i);
		}
		if($stype==1){
			$webStr .=pro_sitemap_xml($turl,time());
		}else{
			$webStr .=$turl."\n";
		}
	}
	return $webStr;
}
function get_head_menu($url,$type = 0){
	$timescope = array('index','article','webdir','weblink','category','update','feedback','top');
	foreach ($timescope as $key) {
		if($type ==1 ){
			$webStr .= pro_sitemap_xml($url.get_module_url($key),time(),"daily",0.9);
		}else{
			$webStr .= $url.get_module_url($key)."\n";
		}
	}
	return $webStr;
}
function pro_sitemap_xml($url,$date,$freq="monthly",$prior=0.5){
	if($prior==0.5){
		if (datediff('h', $date) < 24) {
			$freq = "hourly";
			$prior = 0.8;
		} elseif (datediff('d', $date) < 7) {
			$freq = "daily";
			$prior = 0.7;
		} elseif (datediff('w', $date) < 4) {
			$freq = "weekly";
		} elseif (datediff('m', $date) < 12) {
			$freq = "monthly";
		} else {
			$freq = "yearly";
		}
	}
	$temp = "<url>\n<loc>".$url."</loc>\n";
	$temp .= "<lastmod>".iso8601('Y-m-d',$date)."</lastmod>\n";
	$temp .= "<changefreq>".$freq."</changefreq>\n";
	$temp .= "<priority>".$prior."</priority>\n</url>\n";
	return $temp;
}
?>