<?php
/* 
    Write a PHP program to find the length of the last word in a string.
    Input : PHP Exercises
*/
function length_of_last_word($s)
{
      
        if (strlen(trim($s)) == 0)
        {
            return "Blank String";
        }
        
        $words = explode(' ', $s);
        
        if (sizeof($words) >1)
        return strlen(substr($s, strrpos($s, ' ') + 1));
        else
        return "Single word";
        
        
}
print_r(length_of_last_word("PHP ExercisesIs Best")."\n"."<br>");
// print_r(length_of_last_word("PHP")."\n"."<br>");
// print_r(length_of_last_word("")."\n"."<br>");
// print_r(length_of_last_word("  ")."\n"."<br>");