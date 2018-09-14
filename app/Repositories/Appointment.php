<?php

namespace App\Repositories;
use GuzzleHttp\Client;

class Appointment{

    public function all(){
        return $this->get('appointment');
    }

    public function find($id){
        return $this->get("appointment/{$id}");
    }

    public function get($url){
        $client = new Client([
            'base_uri' => 'http://localhost:8000/api/v1/appointment',
            'timeout'  => 2.0,
            'verify' => false,
        ]);
        $reponse = $client->request('GET', $url);
        return json_decode($reponse->getBody()->getContents());
    }
}