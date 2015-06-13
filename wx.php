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
$weObj->valid();//明文或兼容模式可以在接口验证通过后注释此句，但加密模式一定不能注释，否则会验证失败
$type = $weObj->getRev()->getRevType();
switch($type) {
	case Wechat::MSGTYPE_TEXT:
			$info = $weObj->getUserInfo($weObj->getRev()->getRevFrom());
			$weObj->text("你好，".$info['nickname'])->reply();
			exit;
			break;
	case Wechat::MSGTYPE_EVENT:
			break;
	case Wechat::MSGTYPE_IMAGE:
			break;
	default:
			$weObj->text("help info")->reply();
}