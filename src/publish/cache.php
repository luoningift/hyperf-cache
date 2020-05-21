<?php
declare(strict_types=1);
return [
    'default' => [
        'driver' => HKY\HyperfCache\RedisDriver::class,
        'packer' => Hyperf\Utils\Packer\PhpSerializerPacker::class,
        'prefix' => 'cache:',
        //pool 对应config/autoload/redis.php key
        'pool' => 'default',
    ],
];

