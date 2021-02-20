<?php

use PHPUnit\Framework\TestCase;

class UserModelTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new App\Models\User();
    }

    /** @test */
    public function that_set_first_name()
    {
        $this->user->setFirstName('Abdur');
        $this->assertTrue('Abdur' === $this->user->getFirstName());
    }

    /** @test */
    public function that_set_last_name()
    {
        $this->user->setLastName('Rahman');
        $this->assertTrue('Rahman' === $this->user->getLastName());
    }

    /** @test */
    public function that_trim_first_name()
    {
        $this->user->setFirstName('   Abdur');
        $this->assertTrue('Abdur' === $this->user->getFirstName());
    }

    /** @test */
    public function that_trim_last_name()
    {
        $this->user->setLastName('   Rahman');
        $this->assertTrue('Rahman' === $this->user->getLastName());
    }

}
