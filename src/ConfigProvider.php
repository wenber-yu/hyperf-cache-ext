<?php

declare(strict_types=1);

/**
 * This file is part of project wenber-yu/hyperf-cache-ext.
 *
 * @author   wenbo@wenber.club
 * @link     https://github.com/wenber-yu
 */

namespace WilburYu\HyperfCacheExt;

use Psr\SimpleCache\CacheInterface as PsrCacheInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                PsrCacheInterface::class => Cache::class,
                CacheInterface::class => Cache::class,
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
        ];
    }
}
