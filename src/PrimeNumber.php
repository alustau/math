<?php
namespace Math;

/**
 * Class PrimeNumber
 * @package App
 */
class PrimeNumber
{
    /**
     * This property store the numbers that will be checked if they are primes
     * @var array
     */
    protected $numbers = [];

    /**
     * PrimeNumber constructor.
     * @param array $numbers
     */
    public function __construct($numbers = [])
    {
        $this->numbers = $numbers;
    }

    /**
     * @return array
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }

    /**
     * @param array $numbers
     * @return $this
     */
    public function setNumbers(array $numbers): PrimeNumber
    {
        $this->numbers = $numbers;

        return $this;
    }

    /**
     * @param $number
     * @return $this
     */
    public function addNumber($number): PrimeNumber
    {
        $this->numbers[] = $number;

        return $this;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->getPrimes());
    }

    /**
     * This method return the primes numbers from property $numbers
     * @return array
     */
    public function getPrimes(): array
    {
        $primes = [];

        foreach ($this->numbers as $number) {
            if ($number != 1 && $this->isPrime($number)) {
                $primes[] = $number;
            }
        }

        return $primes;
    }

    /**
     * This method check if a number is prime
     * @param $number
     * @return bool
     */
    public function isPrime($number): bool
    {
        if ($number == 2) {
            return true;
        }

        $maxNumber = sqrt($number) + 1;

        for ($i = 2; $i <= $maxNumber; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
