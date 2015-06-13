<?php
include "wechat.class.php";
$options = array(
		'token'=>'lastfrontier', //填写你设定的key
        'encodingaeskey'=>'encodingaeskey', //填写加密用的EncodingAESKey，如接口为明文模式可忽略
		'appid'=>'wx57a085415d1caaed',
		'appsecret'=>'10f697fe10147cfc1747450dc8fa7bed',
		//'debug'=>true,
		//'logcallback'=>true
	);
$weObj = new Wechat($options);


$menu = array(
     'button'=>array(
		0=>array(
          'type'=>'view',
          'name'=>'我要订房2',
          'url'=>'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx57a085415d1caaed&redirect_uri=http://ftpqy.vicp.net/hotels/index.php?action=viewtest&response_type=code&scope=snsapi_base&state=1#wechat_redirect'
		),
	  )
);
$weObj->createMenu($menu);

//$menu = $weObj->getMenu();
//var_dump($menu); 