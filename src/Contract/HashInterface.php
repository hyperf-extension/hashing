<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-extension/hashing.
 *
 * @link     https://github.com/hyperf-extension/hashing
 * @contact  admin@ilover.me
 * @license  https://github.com/hyperf-extension/hashing/blob/master/LICENSE
 */
namespace HyperfExtension\Hashing\Contract;

interface HashInterface extends DriverInterface
{
    /**
     * Get a driver instance.
     *
     * @return \HyperfExtension\Hashing\Contract\DriverInterface
     */
    public function getDriver(?string $name = null): DriverInterface;
}
