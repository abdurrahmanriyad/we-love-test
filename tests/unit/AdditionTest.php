<?php

class AdditionTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function that_calculates_numbers()
    {
        $addition = new App\Calculator\Addition();
        $result = $addition->calculate([12, 45]);
        $this->assertEquals(12 + 45, $result);
    }

    /** @test */
    public function addition_requires_multiple_operands()
    {
        $addition = new App\Calculator\Addition();
        $this->expectException(Exception::class);
        $addition->calculate([12]);
    }
}
