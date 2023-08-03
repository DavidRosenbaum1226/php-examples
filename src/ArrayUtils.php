<?php

class ArrayUtils
{

    private function __construct()
    {
    }

    public static function merge(array ...$arrays): array
    {
        // Could just be done like this    
        // return array_merge(...$arrays);

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

    public static function deduplicate(array $array): array
    {
        // Could just be done like this    
        // return array_unique($arr);

        $result = array();
        foreach ($array as $key => $value) {
            if (!in_array($value, $result, true)) {
                if (is_int($key)) {
                    // Numeric index, use array_push to add the value to the result
                    $result[$key] = $value;
                } else {
                    // Associative key, use the key to add the value to the result
                    $result[$key] = $value;
                }
            }
        }
        return $result;
    }
}