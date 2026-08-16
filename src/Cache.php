<?php

declare(strict_types=1);

/**
 * This file is part of project wenber-yu/hyperf-cache-ext.
 *
 * @author   wenbo@wenber.club
 * @link     https://github.com/wenber-yu
 */

namespace WenberYu\HyperfCacheExt;

use Hyperf\Cache\Cache as BaseCache;

class Cache extends BaseCache implements CacheInterface
{
    public function increment(string $key, int $value = 1): int|bool
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    public function decrement(string $key, int $value = 1): int|bool
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    public function add(string $key, mixed $value, int $seconds): bool
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    public function put(string $key, mixed $value, int $seconds): bool
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }
}
