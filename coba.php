<?php
include("tmdb_v3.php");

$apikey="b55ac8b4c5f80b569334eb99f250085d";
$tmdb_V3 = new TMDBv3($apikey);


$idMovie=199373;

$movieInfo = $tmdb_V3->upComing();

echo "Total Halaman: " . $movieInfo['total_pages'] . "<br>";
echo "Total Results: " . $movieInfo['total_results'];

echo "<pre>";
//var_dump($movieInfo);

for($a = 1;$a <= $movieInfo['total_pages']; $a++){
	$movieInfo = $tmdb_V3->upComing($a);
	for($i = 0; $i < count($movieInfo['results']); $i++){
		$grab[] = $movieInfo['results'][$i]['id'] . "<br>";
	}
}

foreach ($grab as $key => $value) {
	echo "data ke $key : ". $value ."<br>";
}

$movieInfo = 0;
echo "</pre>";	
?>