<?php

declare(strict_types=1);

namespace Rector\Transform\ValueObject;

use Rector\Validation\RectorAssert;

final class ConstFetchToClassConstFetch
{
    private string $oldConstName;

    private string $newClassName;

    private string $newConstName;

    public function __construct(string $oldConstName, string $newClassName, string $newConstName)
    {
        $this->oldConstName = $oldConstName;
        $this->newClassName = $newClassName;
        $this->newConstName = $newConstName;
        RectorAssert::constantName($oldConstName);
        RectorAssert::className($newClassName);
        RectorAssert::constantName($newConstName);
    }

    public function getOldConstName(): string
    {
        return $this->oldConstName;
    }

    public function getNewClassName(): string
    {
        return $this->newClassName;
    }

    public function getNewConstName(): string
    {
        return $this->newConstName;
    }
}
