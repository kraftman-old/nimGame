<?php

  namespace kraftman\nim\tests\unit;

  use phpunit\framework\TestCase;
  use kraftman\nim\NimSolver;

  class TestNim extends TestCase
  {

    public function testInvalidArguments()
    {
      $this->setExpectedException(\InvalidArgumentException::class);
      NimSolver::canWin('string');
      $this->assertTrue(true);

    }

    public function testNegativeValueThrowsError()
    {
      $this->setExpectedException(\UnexpectedValueException::class);
      NimSolver::canWin(-1);
    }

    public function valuesProvider()
    {
      return [
        [0, false],
        [3, true],
        [4, false],
        [8, false],
        [9, true]
      ];
    }

    /**
    * @dataProvider valuesProvider
    */
    public function testFunctionality($value, $expected)
    {
      $this->assertEquals($expected, NimSolver::canWin($value));
    }

  }
