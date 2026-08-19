<?php

header("Expires: " . gmdate("D, d M Y H:i:s", time() + 30) . " GMT");
echo "Current server time: " . date("H:i:s");

?>