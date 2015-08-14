<?php

    class RepeatCounter
    {
        function countRepeats($search_word, $string_to_search)
        {

            //makes sure that the user gave input for both $search_word and $string_to_search
            if ( $search_word == "") {
                return "No search word given.";
            } elseif ( $string_to_search == "") {
                return "No string was given to search.";
            }

            /*Initializes a counter variable to keep track of the number of times $search_word
            is in $string_to_search*/
            $counter = 0;

            /*Takes out anything that is not a number or a letter(either case) but leaves spaces between words. trim() removes any whitespace that may have been left at the beginning or end of the string*/
            $string_to_search = trim(preg_replace( "/[^0-9a-z]+/i", " ", $string_to_search));


            //turn to lower case
            $search_word_lower = strtolower($search_word);
            $string_to_search_lower = strtolower($string_to_search);

            //Turn string into am array
            $string_array = explode(" ", $string_to_search_lower);

            /*Loops through the array comparing all values to the search_word. If search_word is found, the counter is incremented by 1*/

            foreach($string_array as $value){

                if ( $search_word_lower == $value) {
                    $counter++;
                }
            }

            return $counter;
        }
    }




 ?>
