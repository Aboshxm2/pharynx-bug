<?php

declare(strict_types=1);

namespace Aboshxm2\test;

use pocketmine\plugin\PluginBase;
use test\SomeClass;

class Main extends PluginBase
{
    protected function onEnable(): void
    {
        $this->getLogger()->info(SomeClass::class);
    }
}