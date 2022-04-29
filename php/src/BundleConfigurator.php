<?php
declare(strict_types = 1);

namespace Kata;

final class BundleConfigurator
{
    public function select(string $productNames): string
    {
        $bundles = [
            'P1,P2' => 'B1',
            'P2,P1' => 'B1',
            'P1,P4' => 'B2',
        ];

        return $bundles[$productNames] ?? $productNames;
    }
}
