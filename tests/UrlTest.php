<?php
/**
 * Created by PhpStorm.
 * User: hxc
 * Date: 2020/6/2
 * Time: 16:58
 */
namespace Tests;

use App\Scanner;
use PHPUnit\Framework\TestCase;

class UrlTest extends  TestCase{

    /**
     * author hxc
     */
    public function testUrlCase()
    {
        $url = [
            'http://www.baidu.com',
        ];

        $data = new Scanner($url);

        $data = $data->getStatusCodeForUrl();
    }
}