<?php

  use phpunit\framework\TestCase;
  require_once('src/NimSolver.php');

  class TestNim extends TestCase
  {

    public function testInvalidArguments()
    {
      $this->setExpectedException(InvalidArgumentException::class);
      NimSolver::canWin('string');
      $this->assertTrue(true);

    }

    public function testNegativeValueThrowsError()
    {
      $this->setExpectedException(UnexpectedValueException::class);
      NimSolver::canWin(-1);
    }

    public function testFunctionality()
    {
      $this->assertEquals(false, NimSolver::canWin(0));
      $this->assertEquals(true, NimSolver::canWin(3));
      $this->assertEquals(false, NimSolver::canWin(4));
      $this->assertEquals(false, NimSolver::canWin(8));
      $this->assertEquals(true, NimSolver::canWin(9));

    }

  }
