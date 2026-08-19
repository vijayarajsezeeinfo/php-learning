<?php

$cacheFile = "employee.json";
$ttl = 30;

if(file_exists($cacheFile)){
 $cacheAge = time() - filemtime($cacheFile);
 if($cacheAge<$ttl){
    echo "CACHE HIT";
    echo "<br>";
    $data = file_get_contents($cacheFile);
 } else{
    echo "CACHE EXPIRED";
    echo "<br>";
    // Normally inga API / DB call varum
    $employee = [
        "name"=>"Vijay",
        "role"=>"Developer"
    ];

    $data=json_encode($employee);
    file_put_contents($cacheFile,$data);
 }
    
}else{
    echo "CACHE MISS";
    echo "<br>";

    // Normally inga API / DB call varum
    $employee = [
        "name"=>"Vijay",
        "role"=>"Developer"
    ];

    $data=json_encode($employee);
    file_put_contents($cacheFile,$data);
}
print_r(json_decode($data, true));
?>