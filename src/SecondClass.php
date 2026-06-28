<?php

declare(strict_types=1);

namespace Agarraud\AgarraudMonorepoSecondPackage;

class SecondClass
{
    public function name(): string
    {
        return 'second';
    }

    public function greet(): string
    {
        return sprintf('hello from %s', $this->name());
    }

    public function farewell(): string
    {
        return sprintf('bye from %s', $this->name());
    }
}
