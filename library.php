<?php
    use Codenixsv\CoinGeckoApi\CoinGeckoClient;
    $client = new CoinGeckoClient();

    function getData($client){
        $data = $client->coins()->getList();
        $coins = $data;
        $symbolArray = [];
        foreach ($data as $d => $value) {
            $symbol = $value['symbol'];
            if($symbol == "btc" || $symbol == "BTC"){
                $id = $value["id"];
                $price = $client->simple()->getPrice($id, 'usd');
            }     
        }
        var_dump($price);
        // echo ($price['bitcoin']['usd']);
    }

    getData($client);
?>