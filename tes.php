<?php
include("tmdb_v3.php");
$apikey="b55ac8b4c5f80b569334eb99f250085d";
$tmdb_V3 = new TMDBv3($apikey);


$idMovie=87421;

$cek = $tmdb_V3->movieInfo($idMovie);
$pelinfo = $tmdb_V3->movieTrailer($idMovie);
$cast = $tmdb_V3->movieCast($idMovie);
$title = $tmdb_V3->movieTitles($idMovie);
$poster = $tmdb_V3->moviePoster($idMovie);



echo "<pre>";
print_r($cek);
print_r($pelinfo);
print_r($cast);
print_r($title);
print_r($poster);
echo "</pre>";
?>