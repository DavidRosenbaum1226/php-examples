<?php

use PHPUnit\Framework\TestCase;

require_once 'src/ArrayUtils.php';

class ArrayUtilsTest extends TestCase
{
    public function testMergeArraysForAssociativeArrays()
    {
        $array1 = ['a' => 'apple', 'b' => 'banana'];
        $array2 = ['c' => 'cherry', 'd' => 'date'];
        $expectedResult = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::mergeArrays($array1, $array2));
    }

    public function testMergeArraysForNumericArrays()
    {
        $array1 = ['apple', 'banana'];
        $array2 = ['cherry', 'date'];
        $expectedResult = ['apple', 'banana', 'cherry', 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::mergeArrays($array1, $array2));
    }

    public function testMergeArraysForMixedArrays()
    {
        $array1 = ['a' => 'apple', 'b' => 'banana', 0 => 'cherry', 1 => 'date'];
        $array2 = ['cherry', 'date'];
        $expectedResult = ['a' => 'apple', 'b' => 'banana', 0 => 'cherry', 1 => 'date', 2 => 'cherry', 3 => 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::mergeArrays($array1, $array2));
    }
}