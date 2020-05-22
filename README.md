#### Hyperf-cache

##### 1.安装
在项目中 `composer.json` 的 `repositories` 项中增加
``` 
{
    ....
    "repositories":{
        "hky/hyperf-cache":{
            "type":"vcs",
            "url":"git@192.168.100.11:base/hky-packages-hyperf-cache.git"
        }
        ....
    }
}
```
修改完成后执行 
```bash
$ composer require hky/hyperf-cache
$ php bin/hyperf.php vendor:publish hky/hyperf-cache
```
##### 3.配置文件说明config/autoload/cache.php
```php
<?php
return [
    'default' => [
        //使用的驱动
        'driver' => HKY\HyperfCache\RedisDriver::class,
        'packer' => Hyperf\Utils\Packer\PhpSerializerPacker::class,
        'prefix' => 'cache.',
        //pool 对应config/autoload/redis.php key
        'pool' => 'default',
    ],
    'cache1' => [
       //使用的驱动
       'driver' => HKY\HyperfCache\RedisDriver::class,
       'packer' => Hyperf\Utils\Packer\PhpSerializerPacker::class,
       'prefix' => 'cache.',
       //pool 对应config/autoload/redis.php key
       'pool' => 'redis1',
    ],
];
//调用cache1
// ApplicationContext::getContainer()->get(CacheManager::class)->getDriver('cache1')->set();
// 默认调用
// ApplicationContext::getContainer()->get(Cache::class)->set();
```
### 版本改动:
v1.0.0   增加 hyperf-cache cache redis支持指定poolName
