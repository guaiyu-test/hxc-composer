<?php
/**
 * Created by PhpStorm.
 * User: hxc
 * Date: 2020/6/2
 * Time: 16:58
 */
namespace Tests;

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

        $data = new \App\Scanner($url);

        $res = $data->getInvalidUrls();
        $this->assertEmpty($res);
        return $res;
    }

    /**
     * author hxc
     */
    public function testUrlErrorCase()
    {
        $url = [
            'http://www.baidu1.com',
        ];

        $data = new \App\Scanner($url);

        $res = $data->getInvalidUrls();
        $this->assertNotEmpty($res);
        return $res;
    }
}