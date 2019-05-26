<?php
require "Employee.php";
/*
$vasya = new Employee();
$vasya->name = 'Vasya';
$vasya->age = '25';
$vasya->salary = '1000';

$petya = new Employee();
$petya->name = 'Petya';
$petya->age = '30';
$petya->salary = '2000';

echo  $vasya->salary + $petya->salary;

echo $vasya->getName();
*/
$vasya=new Employee('Vasya', 25, 1000);
$petya=new Employee('Petya', 30, 2000);

echo $vasya->salary;

?>