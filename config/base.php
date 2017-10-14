<?php
$config = [];
$baseurl = env('APP_URL').'/';
$config['base_site_url'] = rtrim(env('APP_URL'), '/')."/";
$config['shop_site_url'] = $baseurl.'shop';
$config['cms_site_url'] = $baseurl.'cms';
$config['microshop_site_url'] = $baseurl.'microshop';
$config['circle_site_url'] = $baseurl.'circle';
$config['admin_site_url'] = $baseurl.'wp-admin';
$config['mobile_site_url'] = $baseurl.'mobile';
$config['wap_site_url'] = $baseurl.'wap';
$config['chat_site_url'] = $baseurl.'chat';
$config['wechat_site_url'] = $baseurl.'wechat/ems';
//如果要启用IM，把 http://shopnc.dev 修改为您的服务器IP
$config['node_site_url'] = env('APP_URL').':'.env('NODE_SERVICE_PORT', 1233);
$config['delivery_site_url'] = $baseurl.'delivery';
$config['chain_site_url'] = $baseurl.'chain';
$config['member_site_url'] = $baseurl.'member';
$config['upload_site_url'] = $baseurl.'data/upload';
$config['resource_site_url'] = $baseurl.'resource';
$config['cms_modules_url'] = $baseurl.'admin/modules/cms';
$config['microshop_modules_url'] = $baseurl.'admin/modules/microshop';
$config['circle_modules_url'] = $baseurl.'admin/modules/circle';
$config['admin_modules_url'] = $baseurl.'admin/modules/shop';
$config['mobile_modules_url'] = $baseurl.'admin/modules/mobile';
$config['version'] = '201608030001';
$config['setup_date'] = '2016-08-06 00:37:07';
$config['gip'] = 0;
$config['dbdriver'] = 'mysqli';
$config['tablepre'] = env('DB_PREFIX');
$config['db']['1']['dbhost'] = env('DB_HOST', 'localhost');
$config['db']['1']['dbport'] = env('DB_PORT', '3306');
$config['db']['1']['dbuser'] = env('DB_USERNAME', 'root');
$config['db']['1']['dbpwd'] = env('DB_PASSWORD', 'root');
$config['db']['1']['dbname'] = env('DB_DATABASE', 'nc');
$config['db']['1']['dbcharset'] = 'UTF-8';

$config['db']['slave'] = empty($config['db']['master']) ? [] : $config['db']['master'];
$config['session_expire'] = 3600 * 24 * 7;
$config['lang_type'] = 'zh_cn';
$config['cookie_pre'] = '4A17_';
$config['cache_open'] = true;
$config['redis']['prefix'] = 'ncs_';
$config['redis']['master']['port'] = 6379;
$config['redis']['master']['host'] = '127.0.0.1';
$config['redis']['master']['pconnect'] = 0;
$config['redis']['slave'] = array();
$config['fullindexer']['open'] = false;
$config['fullindexer']['appname'] = 'ECStore-Pro';
$config['debug'] = false;
//如果要启用伪静态，把false修改为true
$config['url_model'] = false;
//如果要启用店铺二级域名，请填写不带www的域名，比如 shopeasy.com
$config['subdomain_suffix'] = '';
$config['session_type'] = 'redis';
$config['session_save_path'] = 'tcp://127.0.0.1:6379';
//如果要启用IM，把false修改为true
$config['node_chat'] = false;
//流量记录表数量，为1~10之间的数字，默认为3，数字设置完成后请不要轻易修改，否则可能造成流量统计功能数据错误
$config['flowstat_tablenum'] = 3;
$config['queue']['open'] = true;
$config['queue']['host'] = '127.0.0.1';
$config['queue']['port'] = 6379;
//$config['oss']['open'] = false;
//$config['oss']['img_url'] = '';
//$config['oss']['api_url'] = '';
//$config['oss']['bucket'] = '';
//$config['oss']['access_id'] = '';
//$config['oss']['access_key'] = '';
$config['https'] = $_SERVER['REQUEST_SCHEME'] == 'https';
return $config;
