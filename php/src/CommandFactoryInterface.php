<?php

declare(strict_types=1);


namespace GildedRose;

interface CommandFactoryInterface
{
    public function createFor(string $itemName): Command;
}