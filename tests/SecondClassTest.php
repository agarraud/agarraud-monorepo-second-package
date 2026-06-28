<?php

declare(strict_types=1);

namespace Agarraud\AgarraudMonorepoSecondPackage\Tests;

use Agarraud\AgarraudMonorepoSecondPackage\SecondClass;
use PHPUnit\Framework\TestCase;

final class SecondClassTest extends TestCase
{
    public function testNameReturnsSecond(): void
    {
        $second = new SecondClass();

        self::assertSame('second', $second->name());
    }

    public function testGreetUsesName(): void
    {
        $second = new SecondClass();

        self::assertSame('hello from second', $second->greet());
    }

    public function testFarewellUsesName(): void
    {
        $second = new SecondClass();

        self::assertSame('bye from second', $second->farewell());
    }
}