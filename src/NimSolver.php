<?php

/*
  There is a heap of stones on the table, each time one of you take turns to remove 1 to 3 stones.
  The one who removes the last stone will be the winner.
  You will always take the first turn. Write a function using PHP to determine whether you can win the game given the number of stones in the heap.
  Please use composer and make sure that your dependencies support PHP 5.5.9 and includes unit tests.

*/

class NimSolver {
  public static function canWin($numStones) {

    if(!is_numeric($numStones)) {
      throw new InvalidArgumentException('The number of stones must be numeric!');
    }
    if($numStones < 0) {
      throw new UnexpectedValueException('The number of stones cannot be negative!');
    }

    return !(($numStones % 4) == 0);
  }
}
