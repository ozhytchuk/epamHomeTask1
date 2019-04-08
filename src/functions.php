<?php

/*
    Створити змінні $text1='Hello' и $text2='World'.
    За допомогою цих змінних і операції складання рядків вивести на екран фразу «Hello world».
*/
function concatenation($firstWord, $secondWord)
{
    return $firstWord . ' ' . lcfirst($secondWord);
}

/*
    Створити змінну $var і призначити їй значення 'hello'.
    Звертаючись до окремих символів цього рядка – вивести на екран символ 'h', символ 'e', символ 'o'.
*/
function findSymbol($string)
{
    $array = str_split($string);
    $newSting = '';
    foreach ($array as $value) {
        if ($value === 'h' || $value === 'e' || $value == 'o') {
            $newSting .= $value;
        }
    }

    return $newSting;
}

/*
    Якщо змінна $a більша нуля и менша 5-ти, то вивести 'Вірно', інакше вивести 'Невірно'.
    Перевірте роботу скрипта при $a, зі значеннями - 5, 0, -3, 2
*/
function moreOrLess($a)
{
    return ($a > 0 && $a < 5);
}

/*
    Змінна $min має число від 0 до 59. Визначити в яку чверть години потрапляє число,
    відповідно вивести на екран одне з значень: «перша», «друга», «третя»б «четверта».
*/
function getHourQuarter($min)
{
    switch ($min) {
        case ($min >= 0 && $min < 15):
            return 'First';
        case ($min >= 15 && $min < 30):
            return 'Second';
        case ($min >= 30 && $min < 45):
            return 'Third';
        case ($min >= 45 && $min <= 59):
            return 'Fourth';
        default:
            return 'Enter a number from 0 to 59';
    }
}

/*
    В змінній $year збігається рік. Визначте чи є він високосним.
    Рік буде високосним в двох випадках: або він ділиться на 4,
    але при цьому не ділиться на 100, або ділиться на 400.
*/
function isLeapYear($year)
{
    return ((!($year % 4) && ($year % 100)) || (!($year % 400)));
}

/*
    Є рядок з 6-ти чисел (наприклад: 385934). Перевірте, чи сума перших трьох чисел
    дорівнює сумі других трьох чисел. Якщо це так – виведіть 'так' інакше – 'ні'.
*/
function sumNumbers($num)
{
    $firstNum = 0;
    $secondNum = 0;
    $half = (strlen($num) / 2);

    for ($i = 0; $i < $half; $i++) {
        $firstNum += $num[$i];
    }

    for ($j = $half; $j < strlen($num); $j++) {
        $secondNum += $num[$j];
    }

    return ($firstNum === $secondNum);
}

/*
    Compare two strings by comparing the sum of their values (ASCII character code).
    For comparing treat all letters as UpperCase.

    Null-Strings should be treated as if they are empty strings.
    If the string contains other characters than letters, treat the whole string as it would be empty.

    Examples:
    "AD","BC" -> equal
    "AD","DD" -> not equal
    "gf","FG" -> equal
    "zz1","" -> equal
    "ZzZz", "ffPFF" -> equal
    "kl", "lz" -> not equal
    null, "" -> equal

    Your method should return true, if the strings are equal and false if they are not equal.
*/
function asciiCode($firstString, $secondString)
{
    $splitFirstString = str_split($firstString);
    $splitSecondString = str_split($secondString);
    $sumFirstString = 0;
    $sumSecondString = 0;

    foreach ($splitFirstString as $value) {
        if (($value == is_numeric($value)) || ($value == is_numeric((bool)$value))) {
            $sumFirstString = ord('');
        } else {
            $sumFirstString += ord(strtoupper($value));
        }
    }

    foreach ($splitSecondString as $item) {
        if (($item == is_numeric($item)) || ($item == is_numeric((bool)$item))) {
            $sumSecondString = ord('');
        } else {
            $sumSecondString += ord(strtoupper($item));
        }
    }

    return ($sumFirstString === $sumSecondString);
}