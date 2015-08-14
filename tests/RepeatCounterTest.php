<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_RepeatCounter_noWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $search_word = "";
            $string_to_search = "any string";

            $result = $test_RepeatCounter->countRepeats($search_word, $string_to_search);

            $this->assertEquals("No search word given.", $result);
        }

        function test_RepeatCounter_noSearchString()
        {
            $test_RepeatCounter = new RepeatCounter;
            $search_word = "word";
            $string_to_search = "";

            $result = $test_RepeatCounter->countRepeats($search_word, $string_to_search);

            $this->assertEquals("No string was given to search.", $result);
        }

        function test_RepeatCounter_a()
        {
            $test_RepeatCounter = new RepeatCounter;
            $search_word = "a";
            $string_to_search = "a";

            $result = $test_RepeatCounter->countRepeats($search_word, $string_to_search);

            $this->assertEquals(1, $result);
        }

        function test_RepeatCounter_word()
        {
            $test_RepeatCounter = new RepeatCounter;
            $search_word = "word";
            $string_to_search = "Is word in this string?";

            $result = $test_RepeatCounter->countRepeats($search_word, $string_to_search);

            $this->assertEquals(1, $result);
        }

        function test_RepeatCounter_multipleWord()
        {
            $test_RepeatCounter = new RepeatCounter;
            $search_word = "word";
            $string_to_search = "word word word and another word for this string.";

            $result = $test_RepeatCounter->countRepeats($search_word, $string_to_search);

            $this->assertEquals(4, $result);
        }

        function test_RepeatCounter_punctuation()
        {
            $test_RepeatCounter = new RepeatCounter;
            $search_word = "word";
            $string_to_search = "word, word, and word!";

            $result = $test_RepeatCounter->countRepeats($search_word, $string_to_search);

            $this->assertEquals(3, $result);
        }

        function test_RepeatCounter_ignoreCase()
        {
            $test_RepeatCounter = new RepeatCounter;
            $search_word = "word";
            $string_to_search = "word, Word, and Word!";

            $result = $test_RepeatCounter->countRepeats($search_word, $string_to_search);

            $this->assertEquals(3, $result);
        }
    }



 ?>
