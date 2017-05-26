<?php
class RepeatCounter
{
  function toLower($this_string)
  {
    return $lowerSentence = strtolower($this_string);
  }

  function splitString($lowerSentence)
  {
    return $split_str= explode(" ",$lowerSentence);
  }

  function wordCount($split_str,$word)
  {
    $counter = 0;
    for ($i=0; $i < count($split_str) ; $i++) {
      if ($split_str[$i]== $word) {
        $counter++;
      }
    }
    return $counter;
  }

}
?>
