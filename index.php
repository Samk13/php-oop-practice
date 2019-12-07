<?php 
$arr = array('sdfasdf',354.354,53,53,354);
$str = 'sdfasdf';
$double = 54.5454;
$non;

print_r($test1);
echo '<br><h1>is array</h1><br>';
echo is_array($arr) ? '<h1>💯</h1>' : "<h1>❌❌</h1>";
echo '<br><h1>is bool</h1><br>';
echo is_bool($arr) ? '<h1>💯</h1>' : "<h1>❌❌</h1>";
echo is_array($arr) ? '<h1>💯</h1>' : "<h1>❌❌</h1>";
echo '<br><h1>is countable </h1><br>';
echo is_countable($arr) ? '<h1>💯</h1>' : "<h1>❌❌</h1>";
echo is_double($double) ? '<h1>💯</h1>' : "<h1>❌❌</h1>";

var_dump(is_double($double));
echo '<br>';
var_dump(is_int($double));
echo '<br>';
var_dump(is_null($double) && is_numeric($double));
var_dump(is_scalar($arr));
var_dump(isset($non));
echo isset($non) ? '<h1>YES</h1>' : "<h1>NO</h1>";

    // if(isset($arr)){
    //     return print_r(serialize($arr));
    // }

// fillArray function made by Sam
function fillArray($depth, $max){
    static $seed;
    if (is_null($seed)){
        $seed = array('a', 2, 'c', 4, 'e', 6, 'g', 8, 'i', 10);
    }
    if ($depth < $max){
        $node = array();
        foreach ($seed as $key){
            $node[$key] = fillArray( $depth + 1, $max );
        }
        return $node;
    }
    return 'empty';
}

function testSpeed($testArray, $iterations = 100){

    $json_time = array();
    $serialize_time = array();
    $test_start = microtime(true);

    for ($x = 1; $x <= $iterations; $x++){
        $start = microtime(true);
        json_encode($testArray);
        $json_time[] = microtime(true) - $start;

        $start = microtime(true);
        serialize($testArray);
        $serialize_time[] = microtime(true) - $start;
    }

    $test_lenght = microtime(true) - $test_start;
    $json_average = array_sum($json_time) / count($json_time);
    $serialize_average = array_sum($serialize_time) / count($serialize_time);

    $result = "PHP serialized in ".$serialize_average." seconds average<br>";
    $result .= "JSON encoded in ".$json_average." seconds average<br>";

    if ($json_average < $serialize_average){
        $result .= "json_encode() was roughly ".number_format( ($serialize_average / $json_average - 1 ) * 100, 2 )."% faster than serialize()<br>";
    } else if ( $serializeTime < $jsonTime ){
        $result .= "serialize() was roughly ".number_format( ($json_average / $serialize_average - 1 ) * 100, 2 )."% faster than json_encode()<br>";
    } else {
        $result .= "No way!<br>";
    }

    $result .= "Test took ".$test_lenght." seconds with ".$iterations." iterations.";

    return $result;

}

// Change the number of iterations (250) to lower if you exceed your maximum execution time
echo testSpeed(fillArray(0, 5), 250);


?>
