<?php

declare(strict_types=1);

/**
 * This file is part of project wenber-yu/hyperf-cache-ext.
 *
 * @author   wenbo@wenber.club
 * @link     https://github.com/wenber-yu
 */

$header = <<<'EOF'
This file is part of project wenber-yu/hyperf-cache-ext.

@author   wenbo@wenber.club
@link     https://github.com/wenber-yu
EOF;

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        // '@PhpCsFixer' => true,
        'header_comment' => [
            'comment_type' => 'PHPDoc',
            'header' => $header,
            // 'separate' => 'none',
            // 'location' => 'after_declare_strict',
        ],
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('public')
            ->exclude('runtime')
            ->exclude('vendor')
            ->in(__DIR__)
    )
    ->setUsingCache(false)
;
