<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Date         :   2019-01-11
 * Version      :   1.0
 */

namespace IpSupports;


class City
{
    public $reader = NULL;
    public function __construct($db)
    {
        $this->reader = new Reader($db);
    }
    public function find($ip, $language)
    {
        return $this->reader->find($ip, $language);
    }
    public function findMap($ip, $language)
    {
        return $this->reader->findMap($ip, $language);
    }
    public function findInfo($ip, $language)
    {
        $map = $this->findMap($ip, $language);
        if (NULL === $map)
        {
            return NULL;
        }
        return new CityInfo($map);
    }
}