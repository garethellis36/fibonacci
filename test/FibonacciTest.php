<?php
namespace Gumbercules\Fibonacci\Test;
use Gumbercules\Fibonacci\Fibonacci;

class FibonacciTest extends \PHPUnit_Framework_TestCase
{
    public function testCanGenerateFibonacciSequenceWithDefaultParameters()
    {
        $expected = [
            0,
            1,
            1,
            2,
            3,
            5,
            8,
            13,
            21,
            34,
            55,
            89,
            144,
            233,
            377,
            610,
            987,
            1597,
            2584,
            4181,
            6765,
            10946,
            17711,
            28657,
            46368,
        ];

        $fibonacci = new Fibonacci();
        $actual = $fibonacci->sequence();

        $this->assertEquals($expected, $actual);
    }

    public function testCanGenerateFibonacciSequenceWithCustomParameters()
    {
        $expected = [
            5,
            6,
            11,
            17,
            28,
            45,
            73
        ];

        $fibonacci = new Fibonacci();
        $actual = $fibonacci->sequence(5,6,7);

        $this->assertEquals($expected, $actual);
    }

    public function testTypeHinting()
    {
        $this->setExpectedException("InvalidArgumentException");
        $fibonacci = new Fibonacci();
        $fibonacci->sequence("test", "three", "four");
    }
}