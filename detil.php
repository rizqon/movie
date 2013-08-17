<?php
include("tmdb_v3.php");

$apikey="b55ac8b4c5f80b569334eb99f250085d";
$tmdb_V3 = new TMDBv3($apikey);


$idMovie=87421;

$cek = $tmdb_V3->movieInfo($idMovie);
$pelinfo = $tmdb_V3->movieTrailer($idMovie);
$cast = $tmdb_V3->movieCast($idMovie);


//echo "<pre>";
//print_r($cek);
//echo "</pre>";
echo "<pre>";
	echo "Original Title: ". $cek['original_title'] . "<br>";
	echo "Original Title: ". $cek['id'] . "<br>";
	echo "Overview: ". $cek['overview'] . "<br>";
	echo "backdrop_path: ". $cek['backdrop_path'] . "<br>";
	echo "poster_path: ". $cek['poster_path'] . "<br>";
	echo "status: ". $cek['status'] . "<br>";
	echo "tagline: ". $cek['tagline'] . "<br>";
	echo "release_date: ". $cek['release_date'] . "<br>";
	echo "title: ". $cek['title'] . "<br>";
	echo "budget: ". $cek['budget'] . "<br>";
	echo "homepage: ". $cek['homepage'] . "<br>";
	echo "popularity: ". $cek['popularity'] . "<br>";
	echo "revenue: ". $cek['revenue'] . "<br>";
	echo "runtime: ". $cek['runtime'] . "<br>";
	echo "popularity: ". $cek['popularity'] . "<br>";
	echo "vote_average: ". $cek['vote_average'] . "<br>";
	echo "vote_count: ". $cek['vote_count'] . "<br>";
	echo "youtube Name: ". $pelinfo['youtube'][0]['name']. "<br>";
	echo "youtube size: ". $pelinfo['youtube'][0]['size'] . "<br>";
	echo "youtube url: http://www.youtube.com/watch?v=". $pelinfo['youtube'][0]['source'];

	print_r($cast);
echo "</pre>";
?>