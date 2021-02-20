<?php

use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    /** @test */
    public function collection_can_add_item()
    {
        $collection = new App\Support\Collection();
        $collection->add('Fizza');
        $this->assertCount(1, $collection->get());
        $this->assertEquals('Fizza', $collection->get()[0]);
    }

    /** @test  */
    public function collection_can_initialized_with_multiple_items()
    {
        $collection = new App\Support\Collection(['one', 'two', 'three']);
        $this->assertCount(3, $collection->get());
        $this->assertEquals(3, $collection->count());
        $this->assertEquals('one', $collection->get()[0]);
        $this->assertEquals('two', $collection->get()[1]);
    }

    /** @test */
    public function collection_is_instance_of_iterator_aggregate()
    {
        $collection = new App\Support\Collection();
        $this->assertInstanceOf(IteratorAggregate::class, $collection);
    }

    /** @test  */
    public function collection_is_iterable()
    {
        $collection = new App\Support\Collection(['one', 'two', 'three']);

        $items = [];

        foreach ($collection as $item) {
            $items[] = $item;
        }

        $this->assertCount(3, $items);
        $this->assertInstanceOf(ArrayIterator::class, $collection->getIterator());
    }

    /** @test  */
    public function collection_can_be_merge_with_another_collection()
    {
        $collectionOne = new App\Support\Collection(['one', 'two', 'three']);

        $collectionTwo = new App\Support\Collection(['four', 'five']);

        $collection = $collectionOne->merge($collectionTwo);

        $this->assertCount(5, $collection);
        $this->assertEquals('four', $collection->get()[3]);
    }
}
