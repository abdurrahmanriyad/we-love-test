<?php


namespace App\Support;


use ArrayIterator;
use Exception;
use IteratorAggregate;
use Traversable;

class Collection implements IteratorAggregate
{
    private array $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function add(string $item): void
    {
        $this->items[] = $item;
    }

    public function get() : array
    {
        return  $this->items;
    }

    public function getIterator() : ArrayIterator
    {
        return new ArrayIterator($this->items);
    }

    public function count() : int
    {
        return count($this->items);
    }

    public function merge(Collection $collection) : self
    {
        return  new Collection(array_merge($this->get(), $collection->get()));
    }
}
