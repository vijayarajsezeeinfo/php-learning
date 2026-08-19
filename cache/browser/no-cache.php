<?php
// Server send panna pora actual data
$data = "Current Employee Data";

// Data-oda fingerprint create pannrom
// Data same-ah irundha → same MD5
// Data change aana → different MD5
$etag = '"' . md5($data) . '"';

// Browser-ku:
// "Indha response-a cache-la store pannalaam,
// but reuse panna munnaadi server-kitta validate pannu"
header("Cache-Control:no-cache");

// Browser-ku current data-oda ETag/version identifier anupprom
header("ETag: $etag");

// Browser previous request-la ETag anuppirukka-nu check pannrom
if(isset($_SERVER["HTTP_IF_NONE_MATCH"])){
    // Browser anuppina ETag
    // Server current ETag-oda same-aa-nu check pannrom
        $clientEtag = $_SERVER["HTTP_IF_NONE_MATCH"];

    if ($clientEtag === $etag) {
        // Data change aagala
        // Browser already cache pannirukkura data-va use pannalaam
        http_response_code(304);
        // Inga PHP execution stop
        exit;
    }
}
// First request OR data changed request
// So actual data browser-ku send pannrom
echo $data;

?>