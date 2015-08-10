<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = strtolower($input_title);
            $new_array_of_words = explode(" ", $input_array_of_words);
            $output_titlecased = array();
            foreach ($new_array_of_words as $word) {
                array_push($output_titlecased, ucfirst($word));
            if (in_array("On", $output_titlecased)) {
                
                }
            }
            return implode(" ", $output_titlecased);
        }
    }

?>
