<?php
  require_once "src/RepeatCounter.php";

  class WordcountTest extends PHPUnit_Framework_TestCase
  {
    function test_toLowerSentence()
    {
      $testCounter = new RepeatCounter();
      $sentence = "Hello How Are You?";

      $expected = "hello how are you?";
      $actual = $testCounter->toLower($sentence);

      $this->assertEquals($expected,$actual);
    }
  }
 ?>
