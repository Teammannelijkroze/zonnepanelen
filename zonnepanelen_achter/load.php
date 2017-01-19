<?php

/**
 * Created by PhpStorm.
 * User: svenvdz
 * Date: 9-12-2016
 * Time: 10:22
 */
class load
{
    function __construct()
    {
    }

    function kwartier($url)
    {
        $response = file_get_contents($url);
        $json = json_decode($response, true);
        foreach ($json["powerDetails"]["meters"] as $meter){
            foreach($meter["values"] as $item){
                echo $item["date"]. " " .$item["value"]."<br>";
            }
        }
    }

    function dag($url){
        $response = file_get_contents($url);
        $json = json_decode($response, true);
        foreach($json["energy"]["values"] as $item){
            echo $item["date"] . " " . $item["value"]."<br>";
        }
    }

    function maand($url){
        $response = file_get_contents($url);
        $json = json_decode($response, true);
        foreach($json["energy"]["values"] as $item){
            echo $item["date"] . " " . $item["value"]."<br>";
        }
    }
}