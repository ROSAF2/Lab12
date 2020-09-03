<?php

namespace Tests\Unit;

use Tests\TestCase;
//use PHPUnit\Framework\TestCase;

use App\Dog;
use App\Breed;

class DogTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_dog_has_a_breed()
    {
        $dog = Dog::find(1);
        $this->assertEquals('Labrador Retriever', $dog->breed->name);
        //$this->assertTrue(true);
    }

    public function test_a_breed_has_many_dogs()
    {
        $breed = Breed::find(1);
        $this->assertEquals(2, $breed->dogs->count());
        //$this->assertTrue(true);
    }
}
