<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/hashing.
 *
 * @link     https://github.com/hyperf-extension/hashing
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/hashing/blob/master/LICENSE
 */
namespace HyperfExtension\Hashing\Driver;

abstract class AbstractDriver
{
    /**
     * Get information about the given hashed value.
     */
    public function info(string $hashedValue): array
    {
        return password_get_info($hashedValue);
    }

    /**
     * Check the given plain value against a hash.
     */
    public function check(string $value, string $hashedValue, array $options = []): bool
    {
        if (strlen($hashedValue) === 0) {
            return false;
        }

        return password_verify($value, $hashedValue);
    }
}
