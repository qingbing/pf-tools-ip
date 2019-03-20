<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Date         :   2018-05-19
 * Version      :   1.0
 */
require("../vendor/autoload.php");

// 获取国家、省份、城市信息（用索引返回）
print_r(\Tools\Ip::getInstance()->getCity()->find('118.28.1.1', 'CN'));
// 获取国家、省份、城市信息（用键值返回）
print_r(\Tools\Ip::getInstance()->getCity()->findMap('118.28.1.1', 'CN'));
// 获取ip详细信息，免费版基本无用
print_r(\Tools\Ip::getInstance()->getCity()->findInfo('118.28.1.1', 'CN'));
