<?php
// $key="AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw";
// $latitude = '40.6781784';
// $longitude = '-73.9441579';
// $url="https://maps.google.com/maps/api/geocode/json?latlng=$latitude,$longitude&key=$key";
// $geocode = file_get_contents($url);
// $json = json_decode($geocode);
// // $address = $json->results[0]->formatted_address;
// print_r($json);

function getaddress($lat,$lng)
  {
    $geocode = "https://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lng&sensor=false&key=AIzaSyCmrYazlsa3Db44wrcCnA9KeYI_0c2l6yw";
    echo $geocode;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $geocode);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $output = json_decode($response);
    $dataarray = get_object_vars($output);
    if ($dataarray['status'] != 'ZERO_RESULTS' && $dataarray['status'] != 'INVALID_REQUEST') {
        if (isset($dataarray['results'][0]->formatted_address)) {

            $address = $dataarray['results'][0]->formatted_address;

        } else {
            $address = 'Not Found';

        }
    } else {
        $address = 'Not Found';
    }

    return $address;
  }

$lat= 26.449923; //latitude
  $lng= 80.331871; //longitude
  $address= getaddress($lat,$lng);
  if($address)
  {
    echo $address;
  }
  else
  {
    echo "Not found";
  }



$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,"http://ip-api.com/json");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);

if($result->status=='success'){
    // print_r($result);
}