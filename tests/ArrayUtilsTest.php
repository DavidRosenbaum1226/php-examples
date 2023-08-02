<?php

use PHPUnit\Framework\TestCase;

require_once 'src/ArrayUtils.php';

class ArrayUtilsTest extends TestCase
{
    public function testMergeArrays()
    {
        $array1 = ['a' => 'apple', 'b' => 'banana'];
        $array2 = ['c' => 'cherry', 'd' => 'date'];
        $expectedResult = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date'];
        $this->assertEquals($expectedResult, ArrayUtils::mergeArrays($array1, $array2));
    }
}