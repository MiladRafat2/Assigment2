<?php

// Task 1: Data Retrieval // retrieve data from API and display response 

$url = "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100"
$response = file_get_contents($url);
echo $response;
print_r($response);

$data = json_decode($response, true);
echo $response;
print_r($response);

// process API response 

if(!$data || !isset($data["results"])){
    die('error fetching data from API')
}
$result = $data["results"];

?>