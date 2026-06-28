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
        return sprintf('bye test post 1.0.16  from %s', $this->name());
    }

    public function untaggedMarker(): string
    {
        return 'untagged change visible via dev-main';
    }
}
