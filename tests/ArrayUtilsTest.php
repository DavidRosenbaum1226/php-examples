<?php

use PHPUnit\Framework\TestCase;

require_once 'src/ArrayUtils.php';

class ArrayUtilsTest extends TestCase
{
    public function testMergeForAssociativeArrays()
    {
        $array1 = ['a' => 'apple', 'b' => 'banana'];
        $array2 = ['c' => 'cherry', 'd' => 'date'];
        $expectedResult = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::merge($array1, $array2));
    }

    public function testMergeForNumericArrays()
    {
        $array1 = ['apple', 'banana'];
        $array2 = ['cherry', 'date'];
        $expectedResult = ['apple', 'banana', 'cherry', 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::merge($array1, $array2));
    }

    public function testMergeForMixedArrays()
    {
        $array1 = ['a' => 'apple', 'b' => 'banana', 0 => 'cherry', 1 => 'date'];
        $array2 = ['cherry', 'date'];
        $expectedResult = ['a' => 'apple', 'b' => 'banana', 0 => 'cherry', 1 => 'date', 2 => 'cherry', 3 => 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::merge($array1, $array2));
    }

    public function testDeduplicateForAssociativeArray()
    {
        $array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date'];
        $expectedResult = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::deduplicate($array));
    }

    public function testDeduplicateForNumericArray()
    {
        $array = ['apple', 'banana', 'cherry', 'date'];
        $expectedResult = ['apple', 'banana', 'cherry', 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::deduplicate($array));
    }

    public function testDeduplicateForMixedArray()
    {
        $array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date', 'apple', 'banana', 'cherry', 'date'];
        $expectedResult = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::deduplicate($array));
    }
}