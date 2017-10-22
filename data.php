<?php

/**
 * @Author: 宏达
 * @Date:   2017-10-20 15:25:38
 * @Last Modified by:   宏达
 * @Last Modified time: 2017-10-20 15:52:31
 */
$game=[
	['title'=>'疾风剑豪','content'=>'亚索'],
	['title'=>'影流之主','content'=>'劫'],
	['title'=>'黑暗之女','content'=>'火女'],
	['title'=>'迅捷斥候','content'=>'提莫'],
	['title'=>'河流之主','content'=>'塔姆']
];
$music=[
	['title'=>'K歌之王','content'=>'陈奕迅'],
	['title'=>'绅士','content'=>'薛之谦'],
	['title'=>'算什么男人','content'=>'周杰伦'],
	['title'=>'逆战','content'=>'张杰'],
	['title'=>'有何不可','content'=>'许嵩']
];
$app=[
	['title'=>'新浪微博','content'=>'腾讯'],
	['title'=>'QQ','content'=>'腾讯'],
	['title'=>'腾讯视频','content'=>'腾讯'],
	['title'=>'QQ音乐','content'=>'腾讯'],
	['title'=>'腾讯新闻','content'=>'腾讯']
];
if($_GET['name']=='game'){
	echo json_encode($game);
}else if($_GET['name']=='music'){
    echo json_encode($music);
}else if($_GET['name']=='app'){
	echo json_encode($app);
}



?>