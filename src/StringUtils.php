<?php

class StringUtils
{
    private function __construct()
    {
    }

    public static function reverse(string $input): string
    {
        return strrev($input);
    }

    public static function areAnagrams(string $str1, string $str2): bool
    {
        return count_chars($str1, 1) === count_chars($str2, 1);
    }
}