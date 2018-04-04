<?php
namespace Tests;

use Math\PrimeNumber;

class PrimeNumberTest extends TestCase
{
    protected $primeNumber;

    public function setUp()
    {
        $this->primeNumber = new PrimeNumber;
    }

    /**
     * @test
     */
    public function it_is_a_prime_number()
    {
        $this->assertTrue($this->primeNumber->isPrime(11));
    }
    /**
     * @test
     */
    public function it_is_a_not_prime_number()
    {
        $this->assertFalse($this->primeNumber->isPrime(100));
    }

    /**
     * @test
     */
    public function count_number_prime()
    {
        $this->primeNumber->setNumbers(range(1,10));

        $this->assertEquals(4, $this->primeNumber->count());
    }

    /**
     * @test
     */
    public function return_all_prime_numbers_of_a_range()
    {
        $this->primeNumber->setNumbers(range(1,100));

        $primesExpected = [2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97];

        $this->assertEquals($primesExpected, $this->primeNumber->getPrimes());
    }
}
