# Math
This is a project with goals to help developers.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)

## Features

* Prime Number Calculator

## Installation through Composer

```shell
$ composer require alustau/math 
```

## Usage
It's easy to use, see to example below:

```php

use Math\PrimeNumber;

$math = new PrimeNumber();

$math->isPrime(11); // true

//add a range from 1 to 100
$math->setNumbers(range(1,100));

$math->getPrimes(); // [2,3,5,7,11,13,17,19,23,29,31,37,41,43,47,53,59,61,67,71,73,79,83,89,97]

$math->count();// 25

```
