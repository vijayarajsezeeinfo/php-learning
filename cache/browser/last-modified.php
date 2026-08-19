<?php

$file = "employee.json";

$lastModified = filemtime($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $lastModified) . " GMT");

if (isset($_SERVER["HTTP_IF_MODIFIED_SINCE"])) {

    $clientTime = strtotime($_SERVER["HTTP_IF_MODIFIED_SINCE"]);

    if ($clientTime >= $lastModified) {
        http_response_code(304);
        exit;
    }
}

$data = file_get_contents($file);

echo $data;

?>