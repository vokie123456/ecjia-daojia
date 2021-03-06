<?php
defined('IN_ECJIA') or exit('No permission resources.');
/**
 * 物流追踪管理
 */
return array(
	'identifier' 	=> 'ecjia.track',
	'directory' 	=> 'track',
	'name'			=> 'track',
	'description' 	=> 'track_desc',			/* 描述对应的语言项 */
	'author' 		=> 'ECJIA TEAM',			/* 作者 */
	'website' 		=> 'http://www.ecjia.com',	/* 网址 */
	'version' 		=> '1.25.0',					/* 版本号 */
	'copyright' 	=> 'ECJIA Copyright 2014 ~ 2019.',
    'namespace'     => 'Ecjia\App\Track',
    'provider'      => 'TrackServiceProvider',
);

// end