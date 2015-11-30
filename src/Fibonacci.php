<?php
namespace Gumbercules\Fibonacci;

/*
 * Simple class for generating a Fibonacci seqeunce
 */
class Fibonacci
{
    /*
     * @param int $firstNumber Number to start sequence from
     * @param int $secondNumber Second number in sequence
     * @param int $sequenceLength Number of entries in sequence to generate
     * @return array Array containing sequence entries in order
     * @throw InvalidArgumentException
     */
    public function sequence($firstNumber = 0, $secondNumber = 1, $sequenceLength = 25)
    {
        if (!is_int($firstNumber) || !is_int($secondNumber) || !is_int($sequenceLength)) {
            throw new \InvalidArgumentException("Only integers can be provided as arguments");
        }

        $sequence = [$firstNumber, $secondNumber];
        for ($i = 2; $i < $sequenceLength; $i++) {
            $sequence[] = $sequence[$i-2] + $sequence[$i-1];
        }
        return $sequence;
    }
}