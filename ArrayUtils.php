<?php

class ArrayUtils {

    private function __construct() {}

    public static function mergeArrays(array $array1, array $array2): array {
        // Could just be done like this
        // return array_merge($array1, $array2);
        
        // Implement without PHP built in array code
        $mergedArray = [];
        foreach ($array1 as $key => $value) {
            $mergedArray[$key] = $value;
        }
        foreach ($array2 as $key => $value) {
            $mergedArray[$key] = $value;
        }
        return $mergedArray;
    }
}
