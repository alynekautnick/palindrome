<?php
    $text = $_POST["inputText"];

    $palindrome = true;
    $textLen = strlen($text);
    $x = 0;
    $y = $textLen - 1;

    while ($palindrome && $x < $y) {
        if ($text[$x] != $text[$y]) {
            $palindrome = false;
        }
        else {
            $x++;
            $y--;
        }
    }

    if ($palindrome) {
        echo "It is a palindrome!";
    }
    else {
        echo "It is not a palindrome!";
    }








    /*
    ABABA
    */
?>
