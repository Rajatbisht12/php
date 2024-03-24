<?php
    $url = "https://api.coindesk.com/v1/bpi/currentprice.json";

    $client = new \GuzzleHttp\Client();

    function getApiData($client, $url){
        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody());
        return $data;
    }

    function getPrice($data){
        $price = $data->bpi->USD->rate;
        
        return $price;
    }


    $data = getApiData($client, $url);
    $price = getPrice($data);
    echo $price;
?>