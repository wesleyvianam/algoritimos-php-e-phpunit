<?php

/*

In this game, the hero moves from left to right. The player rolls the dice and moves the number of spaces indicated by the dice two times.

Create a function for the terminal game that takes the current position of the hero and the roll (1-6) and return the new position

Kata Training: https://www.codewars.com/kata/563a631f7cbbc236cf0000c2/train/php

*/

function move(int $pos, int $roll): int
{
    return $pos + ($roll * 2);
}

echo move(2, 5);