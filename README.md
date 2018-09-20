# Redis session component for Craft CMS
[![Latest Version](https://img.shields.io/github/release/flipboxfactory/craft-session-redis.svg?style=flat-square)](https://github.com/flipboxfactory/craft-session-redis/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Quality Score](https://img.shields.io/scrutinizer/g/flipboxfactory/craft-session-redis.svg?style=flat-square)](https://scrutinizer-ci.com/g/flipboxfactory/craft-session-redis)
[![Total Downloads](https://img.shields.io/packagist/dt/flipboxfactory/craft-session-redis.svg?style=flat-square)](https://packagist.org/packages/flipboxfactory/craft-session-redis)

## Installation

To install, use composer:

```
composer require flipboxfactory/craft-session-redis
```

## Configure
Merge the following (or a variation of) configuration to your `config/app.php` file.
```
<?php

return [
    'components' => [
        'redis' => [
            'class' => yii\redis\Connection::class,
            'hostname' => getenv('REDIS_HOSTNAME')
        ],
        'session' => [
            'class' => flipbox\craft\session\Redis::class,
            'keyPrefix' => 'session'
        ]
    ]
];

```

## Contributing

Please see [CONTRIBUTING](https://github.com/flipboxfactory/craft-session-redis/blob/master/CONTRIBUTING.md) for details.


## Credits

- [Flipbox Digital](https://github.com/flipbox)
- [Contributors](https://github.com/flipboxfactory/craft-session-redis/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/flipboxfactory/craft-session-redis/blob/master/LICENSE) for more information.
