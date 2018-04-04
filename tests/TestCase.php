<?php
namespace Tests;


class TestCase extends \PHPUnit\Framework\TestCase
{
    public function assertEverythingIsOk()
    {
        dump("Everything's ok!");

        $this->assertTrue(true);
    }
}
