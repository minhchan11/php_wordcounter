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

    function test_toLowerWord()
    {
      $testCounter = new RepeatCounter();
      $sentence = "HeLLO";

      $expected = "hello";
      $actual = $testCounter->toLower($sentence);

      $this->assertEquals($expected,$actual);
    }

    function test_splitString()
    {
      $testCounter = new RepeatCounter();
      $sentence = "Hello How Are You ?";
      $lowerCase = $testCounter->toLower($sentence);

      $expected = array("hello","how","are","you","?");
      $actual = $testCounter->splitString($lowerCase);

      $this->assertEquals($expected,$actual);
    }

    function test_wordCounter()
    {
      $testCounter = new RepeatCounter();
      $sentence = "Hello How Are You ?";
      $lowerCase = $testCounter->toLower($sentence);
      $split = $testCounter->splitString($lowerCase);

      $expected = 1;
      $actual = $testCounter->wordCount($split,"hello");

      $this->assertEquals($expected,$actual);
    }
  }
 ?>
