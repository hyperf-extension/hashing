<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/hashing.
 *
 * @link     https://github.com/hyperf-extension/hashing
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/hashing/blob/master/LICENSE
 */
namespace HyperfExtension\Hashing;

use Hyperf\Context\ApplicationContext;
use HyperfExtension\Hashing\Contract\DriverInterface;
use HyperfExtension\Hashing\Contract\HashInterface;

abstract class Hash
{
    public static function getDriver(?string $name = null): DriverInterface
    {
        return ApplicationContext::getContainer()->get(HashInterface::class)->getDriver($name);
    }

    public static function info(string $hashedValue, ?string $driverName = null): array
    {
        return static::getDriver($driverName)->info($hashedValue);
    }

    public static function make(string $value, array $options = [], ?string $driverName = null): string
    {
        return static::getDriver($driverName)->make($value, $options);
    }

    public static function check(string $value, string $hashedValue, array $options = [], ?string $driverName = null): bool
    {
        return static::getDriver($driverName)->check($value, $hashedValue, $options);
    }

    public static function needsRehash(string $hashedValue, array $options = [], ?string $driverName = null): bool
    {
        return static::getDriver($driverName)->needsRehash($hashedValue, $options);
    }
}
