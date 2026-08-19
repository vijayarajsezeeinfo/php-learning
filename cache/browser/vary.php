<?php

header("Cache-Control: public, max-age=60");
header("Vary: Accept-Language");

$language = $_SERVER["HTTP_ACCEPT_LANGUAGE"] ?? "en";

if (str_starts_with($language, "ta")) {
    echo "வணக்கம் விஜய்";
} else {
    echo "Hello Vijay";
}

?>