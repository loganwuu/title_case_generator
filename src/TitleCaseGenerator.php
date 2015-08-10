<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $lowercase_words = strtolower($input_title);
            $new_array_of_words = explode(" ", $lowercase_words);
            $output_titlecased = array();
            $special_words = array("on", "the", "to", "from");
            foreach ($new_array_of_words as $word) {
                if (in_array($word, $special_words) && $word != $new_array_of_words[0]) {
                    array_push($output_titlecased, $word);
                } else {
                    array_push($output_titlecased, ucfirst($word));
                }
            }
            return implode(" ", $output_titlecased);
        }
    }
?>
