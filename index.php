<?php
/**
 * Created by PhpStorm.
 * User: hxc
 * Date: 2020/6/8
 * Time: 15:58
 */

require_once 'vendor/autoload.php';

$url = [
    'http://www.baidu.com',
];
$test = new \App\Scanner($url);
var_dump($test);
exit();