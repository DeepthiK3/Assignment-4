<!DOCTYPE html>
<html>
<body>

<?php
echo strlen("A string is a sequence of characters")."<br>"; //Length of a string
echo str_word_count("Hello world how are you!")."<br>"; //counts the number of words in a string
echo strrev("Hello MadaM ")."<br>"; //reverses a string
echo strpos("Hello world!", "world")."<br>"; //searches for a specific text within a string
echo str_replace("world", "Dolly", "Hello world!")."<br>"; // replaces some characters with some other characters in a string
?> 
</body>
</html>