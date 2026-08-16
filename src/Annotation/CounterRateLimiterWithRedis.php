<?php

declare(strict_types=1);

/**
 * This file is part of project wenber-yu/hyperf-cache-ext.
 *
 * @author   wenbo@wenber.club
 * @link     https://github.com/wenber-yu
 */

namespace WenberYu\HyperfCacheExt\Annotation;

use Attribute;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
class CounterRateLimiterWithRedis extends CounterRateLimiter
{
}
