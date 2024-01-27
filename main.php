<?php

declare(strict_types=1);

/**
 * @param String $s
 * @return String
 */
function makeSmallestPalindrome($s)
{
    /**
     * @since 2023-12-13 字符串长度
     */
    $len = strlen($s);

    /**
     * @since 2023-12-13 左右指针，向中间移动
     * 
     */
    $left = 0;
    $right = $len - 1;
    $counts = 0;
    while ($left < $right) {
        $counts++;
        /**
         * @since 2023-12-13 字符不同
         */
        if ($s[$left] != $s[$right]) {

            /**
             * @since 2023-12-13 比较字典排序
             */
            if (ord($s[$left]) < ord($s[$right])) {
                $s[$right] = $s[$left];
            } else {
                $s[$left] = $s[$right];
            }
        } else {
        }

        /**
         * @since 2023-12-13 向中间移动
         */
        $left++;
        $right--;
    }


    return [$s, $counts];
}


$const = makeSmallestPalindrome("jngingj");

// function test()
// {
//     return "ceshi";
// }
// var_dump($const);

