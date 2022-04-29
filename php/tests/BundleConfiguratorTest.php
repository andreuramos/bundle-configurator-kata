<?php
declare(strict_types = 1);

namespace KataTests;

use Kata\BundleConfigurator;
use PHPUnit\Framework\TestCase;

final class BundleConfiguratorTest extends TestCase
{
    public function test_product_p1_returns_p1(): void
    {
        $bundles = [
            'P1,P2' => 'B1',
            'P2,P1' => 'B1',
            'P1,P4' => 'B2',
        ];

        $bundleConfigurator = new BundleConfigurator($bundles);

        self::assertSame('P1', $bundleConfigurator->select('P1'));
    }

    public function test_p2_returns_p2(): void
    {
        $bundleConfigurator = new BundleConfigurator();

        self::assertSame('P2', $bundleConfigurator->select('P2'));
    }

    public function test_p1_p2_then_b1(): void
    {
        $bundleConfigurator = new BundleConfigurator();

        self::assertSame('B1', $bundleConfigurator->select('P1,P2'));
    }

    public function test_p2_p1_then_b1(): void
    {
        $bundleConfigurator = new BundleConfigurator();

        self::assertSame('B1', $bundleConfigurator->select('P2,P1'));
    }

    public function test_p1_p4_then_b2(): void
    {
        $bundleConfigurator = new BundleConfigurator();

        self::assertSame('B2', $bundleConfigurator->select('P1,P4'));
    }
}
