<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/hashing.
 *
 * @link     https://github.com/hyperf-extension/hashing
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/hashing/blob/master/LICENSE
 */
use function Hyperf\Support\env;

return [
    /*
    |--------------------------------------------------------------------------
    | Default Hash Driver
    |--------------------------------------------------------------------------
    |
    | This option controls the default hash driver that will be used to hash
    | passwords for your application. By default, the bcrypt algorithm is
    | used; however, you remain free to modify this option if you wish.
    |
    */

    'default' => 'bcrypt',

    'driver' => [
        /*
        |--------------------------------------------------------------------------
        | Bcrypt Options
        |--------------------------------------------------------------------------
        |
        | Here you may specify the configuration options that should be used when
        | passwords are hashed using the Bcrypt algorithm. This will allow you
        | to control the amount of time it takes to hash the given password.
        |
        */

        'bcrypt' => [
            'class' => \HyperfExtension\Hashing\Driver\BcryptDriver::class,
            'options' => [
                'rounds' => env('BCRYPT_ROUNDS', 10),
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Argon Options
        |--------------------------------------------------------------------------
        |
        | Here you may specify the configuration options that should be used when
        | passwords are hashed using the Argon algorithm. These will allow you
        | to control the amount of time it takes to hash the given password.
        |
        */

        'argon2i' => [
            'class' => \HyperfExtension\Hashing\Driver\Argon2IDriver::class,
            'options' => [
                'memory' => 1024,
                'threads' => 2,
                'time' => 2,
            ],
        ],

        'argon2id' => [
            'class' => \HyperfExtension\Hashing\Driver\Argon2IdDriver::class,
            'options' => [
                'memory' => 1024,
                'threads' => 2,
                'time' => 2,
            ],
        ],
    ],
];
