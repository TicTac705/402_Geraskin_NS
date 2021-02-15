<?php

namespace App;

require_once "../vendor/autoload.php";

$stack = new Stack(10);

$stack->push("1", 3, 4, 6, true);

var_dump($stack->pop());

var_dump($stack->top());

var_dump($stack->isEmpty());

$stack1 = $stack->copy();

var_dump($stack1);

echo $stack;