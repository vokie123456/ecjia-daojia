<?php
/**
 * 客户管理应用
 */
defined('IN_ECJIA') or exit('No permission resources.');
return array(
    'identifier' 	=> 'ecjia.customer',
	'directory' 	=> 'customer',
	'name'			=> 'customer',
	'description' 	=> 'customer_desc',
	'author' 		=> 'ECJIA TEAM',
	'website' 		=> 'http://www.ecjia.com',
	'version' 		=> '1.25.0',
    'copyright' 	=> 'ECJIA Copyright 2014 ~ 2019.',
    'namespace'     => 'Ecjia\App\Customer',
    'provider'      => 'CustomerServiceProvider',
);

// end