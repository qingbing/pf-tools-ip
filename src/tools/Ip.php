<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Date         :   2019-01-11
 * Version      :   1.0
 */

namespace Tools;


use Abstracts\SingleTon;
use IpSupports\City;

class Ip extends SingleTon
{
    private $_city;

    /**
     * 单例模式初始化函数，在构造函数后执行，子类可以覆盖
     */
    protected function init()
    {
        $source = dirname(__DIR__) . '/source/ipipfree.ipdb';
        $this->_city = new City($source);
    }

    /**
     * 返回 ip 的解析类
     * @return City
     */
    public function getCity()
    {
        return $this->_city;
    }
}