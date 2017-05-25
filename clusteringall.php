<?php 
require('KMeans.php');
require('dataset.php');


$kmeans = new Jacobemerick\KMeans\Kmeans($dataset);
$kmeans->cluster(2); // cluster into two sets

$clustered_data = $kmeans->getClusteredData();
// $clustered_data = [
//     [[1, 1, 3], [1, 2, 1]],
//     [[3, 5, 6], [5, 4, 3], [4, 4, 4]],
//     [[9, 10, 8]],
// ];
$centroids = $kmeans->getCentroids();
// $centroids = [
//     [1, 1.5, 2],
//     [4, 4.33, 4.33],
//     [9, 10, 8],
// ];
json_encode($centroids);

//Clustered Data is a set of clusters, here there are two sets
foreach ($clustered_data as $key => $value) {
	//Walk on the array that contains the two sets
	foreach ($value as $subkey => $subvalue) {
	//If the set is March
		if($subvalue[0]  == 3){
			//Save it to a new array
			$march_set[] = $subvalue;

		}elseif ($subvalue[0]  == 4) {
			//If the set is April
			$april_set[] = $subvalue;

		}
	}
}
json_encode($march_set);				
json_encode($april_set);

$response[0] = $centroids;
$response[1] = $march_set;
$response[2] = $april_set;

echo json_encode($response);

?>