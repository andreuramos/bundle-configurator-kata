<?php
declare(strict_types = 1);

namespace Kata;

final class BundleConfigurator
{
    private $bundles;

    public function __construct(array $bundles = [])
    {
        if (empty($bundles)) {
            $this->bundles = [
                'P1,P2' => 'B1',
                'P2,P1' => 'B1',
                'P1,P4' => 'B2',
            ];
        } else {
            $this->bundles = $bundles;
        }
    }

    public function select(string $productNames): string
    {
        return $this->bundles[$productNames] ?? $productNames;
    }
}
