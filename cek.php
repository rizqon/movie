<?php

include("tmdb_v3.php");

$apikey="b55ac8b4c5f80b569334eb99f250085d";
$tmdb_V3 = new TMDBv3($apikey);

$idMovie=149910;
$pelinfo = $tmdb_V3->movieTrailer($idMovie);

echo "<pre>";
var_dump($pelinfo);
echo $pelinfo['youtube'][0]['size'];
echo count($pelinfo['youtube']);
echo "</pre>";
?>