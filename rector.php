<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    // Import classes, even single short classes like \DateTime, except in
    // PHPDoc docblocks.
    $rectorConfig->importNames(importDocBlockNames: false);

    // register a single rule
    // $rectorConfig->rule(InlineConstructorDefaultToPropertyRector::class);

    // Define sets of rules.
    $rectorConfig->sets([SetList::PHP_82]);
};
