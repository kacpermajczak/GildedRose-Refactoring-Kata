<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private $items;
    private CommandFactoryInterface $commandFactory;

    public function __construct(array $items, CommandFactoryInterface $commandFactory)
    {
        $this->items = $items;
        $this->commandFactory = $commandFactory;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $command = $this->commandFactory->createFor($item->name);

            $command->execute($item);
        }
    }
}

