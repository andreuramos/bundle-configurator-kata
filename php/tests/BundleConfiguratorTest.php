<?php
declare(strict_types = 1);

namespace KataTests;

use Kata\BundleConfigurator;
use PHPUnit\Framework\TestCase;

final class BundleConfiguratorTest extends TestCase
{
    public function test_product_p1_returns_p1(): void
    {
        $bundleConfigurator = new BundleConfigurator();

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
}
