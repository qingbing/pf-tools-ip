# pf-tools-ip
## 描述
工具——IPV4 解析成对应的地址区域信息

## link
- https://www.ipip.net/
- https://github.com/ipipdotnet/ipdb-php

## 注意事项
- 本版本中免费版中不支持非常详尽的IP地址信息

## 使用方法
### 1. 代码
```php

// 获取国家、省份、城市信息（用索引返回）
var_dump(\Tools\Ip::getInstance()->getCity()->find('118.28.1.1', 'CN'));
// 获取国家、省份、城市信息（用键值返回）
var_dump(\Tools\Ip::getInstance()->getCity()->findMap('118.28.1.1', 'CN'));
// 获取ip详细信息，免费版基本无用
var_dump(\Tools\Ip::getInstance()->getCity()->findInfo('118.28.1.1', 'CN'));

```

### 2. 输出
```php
Array
(
    [0] => 中国
    [1] => 天津
    [2] => 天津
)
Array
(
    [country_name] => 中国
    [region_name] => 天津
    [city_name] => 天津
)
IpSupports\CityInfo Object
(
    [country_name] => 中国
    [region_name] => 天津
    [city_name] => 天津
    [owner_domain] => 
    [isp_domain] => 
    [latitude] => 
    [longitude] => 
    [timezone] => 
    [utc_offset] => 
    [china_admin_code] => 
    [idd_code] => 
    [country_code] => 
    [continent_code] => 
    [idc] => 
    [base_station] => 
    [country_code3] => 
    [european_union] => 
    [currency_code] => 
    [currency_name] => 
    [anycast] => 
)

```


## ====== 异常代码集合 ======

异常代码格式：1025 - XXX - XX （组件编号 - 文件编号 - 代码内异常）
```
 - 无
```