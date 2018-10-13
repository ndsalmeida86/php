<?php

class utils {

public function __construct() { /* Nothing by now... */ }

    public function array_sort(&$data) {
        sort($data);
    }

    public function array_index($data, $value) {
        for ($i = 0, $length = count($data); $i < $length; $i++) {
            if ($data[$i] === $value) return $i;
        }

        return -1;
    }

    public function array_search($data, $value) {
        return array_search($value, $data);
    }

    public function array_filter($data, $value) {
        return array_filter($data, function($element) use ($value) {
            return $element === $value;
        });
    }

    public function array_splice(&$array_numeric, $value) {
        array_splice($array_numeric, $this->array_index($array_numeric, $value), 1);
    }
}

$ut = new utils;

$array_numeric = array(4, 9, 1, 2, 7);
echo 'Original Array:<br>';
var_dump($array_numeric);

echo '<br><br>Sorted Array:<br>';
$ut->array_sort($array_numeric);
var_dump($array_numeric);

$value = 0;
echo '<br><br>Value ' . $value . ' Index:<br>';
$result = $ut->array_index($array_numeric, $value);
var_dump($result);
echo '<br>';
$result = $ut->array_search($array_numeric, $value);
var_dump($result);

$value = 7;
echo "<br><br>Array Filtered Value {$value}:<br>";
$result = $ut->array_filter($array_numeric, $value);
var_dump($result);

$value = 2;
echo "<br><br>Array Splice Value {$value}:<br>";
$ut->array_splice($array_numeric, $value);
var_dump($array_numeric);

?>