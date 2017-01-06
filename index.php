<?php
/*
 * Demo to use Factory class to create Automobile objects
 */

include 'AutomobileFactory.php';

$x5 = AutomobileFactory::create('BMW', 'X5');
echo $x5->getMake(); //outputs "BMW"
