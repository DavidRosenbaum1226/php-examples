<?php

class ArrayUtils
{

    private function __construct()
    {
    }

    public static function mergeArrays(array ...$arrays): array
    {
        // Could just be done like this
        // return array_merge($array1, $array2);

        $result = array();

        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if (is_int($key)) {
                    // Numeric index, use array_push to add the value to the result
                    array_push($result, $value);
                } else {
                    // Associative key, use the key to add the value to the result
                    $result[$key] = $value;
                }
            }
        }

        return $result;
    }
}