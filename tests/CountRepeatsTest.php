<?php

    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {
        function test_countWordRepeat_noWord()
        {
            $test_CountRepeats = new CountRepeats;
            $search_word = "";
            $string_to_search = "any string";

            $result = $test_CountRepeats->countWordRepeat($search_word, $string_to_search);

            $this->assertEquals("No search word given.", $result);
        }

        function test_countWordRepeat_noSearchString()
        {
            $test_CountRepeats = new CountRepeats;
            $search_word = "word";
            $string_to_search = "";

            $result = $test_CountRepeats->countWordRepeat($search_word, $string_to_search);

            $this->assertEquals("No string was given to search.", $result);
        }

        function test_countWordRepeat_a()
        {
            $test_CountRepeats = new CountRepeats;
            $search_word = "a";
            $string_to_search = "a";

            $result = $test_CountRepeats->countWordRepeat($search_word, $string_to_search);

            $this->assertEquals(1, $result);
        }

        function test_countWordRepeat_word()
        {
            $test_CountRepeats = new CountRepeats;
            $search_word = "word";
            $string_to_search = "Is word in this string?";

            $result = $test_CountRepeats->countWordRepeat($search_word, $string_to_search);

            $this->assertEquals(1, $result);
        }

        function test_countWordRepeat_multipleWord()
        {
            $test_CountRepeats = new CountRepeats;
            $search_word = "word";
            $string_to_search = "word word word and another word for this string.";

            $result = $test_CountRepeats->countWordRepeat($search_word, $string_to_search);

            $this->assertEquals(4, $result);
        }

        function test_countWordRepeat_punctuation()
        {
            $test_CountRepeats = new CountRepeats;
            $search_word = "word";
            $string_to_search = "word, word, and word!";

            $result = $test_CountRepeats->countWordRepeat($search_word, $string_to_search);

            $this->assertEquals(3, $result);
        }

        function test_countWordRepeat_ignoreCase()
        {
            $test_CountRepeats = new CountRepeats;
            $search_word = "word";
            $string_to_search = "word, Word, and Word!";

            $result = $test_CountRepeats->countWordRepeat($search_word, $string_to_search);

            $this->assertEquals(3, $result);
        }
    }



 ?>
