<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use GuzzleHttp\Client as GuzzleHttpClient;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;

class Api extends Model
{
    use HasFactory;

      public function getNews($country){
        try{

              $client        = new GuzzleHttpClient();

              $apiRequest    = $client->request('GET', 'http://newsapi.org/v2/top-headlines?country='.$country.'&category=health&apiKey=4e154e3080c440819b437c406c25f290');

              $content       = json_decode($apiRequest->getBody()->getContents(), true);

            return $content['articles'];

             /*
             $url = 'https://newsapi.org/v2/everything?q=covid19&apiKey=d047dbe5c31b47a995f5cb00949f1e4b';
             $reponse = $client->get($url);

             dd($reponse->getStatusCode());
             dd($reponse->getBody());
             return $body = $reponse->getBody();
             */
        } catch(RequestException $e)
        {
          echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
              echo Psr7\str($e->getResponse());
        }
      }

}
    public function getAllNewsCovid(){
      $client        = new GuzzleHttpClient();

      $apiRequest    = $client->request('GET', 'http://newsapi.org/v2/everything?q=covid19&apiKey=d047dbe5c31b47a995f5cb00949f1e4b');

      $content       = json_decode($apiRequest->getBody()->getContents(), true);

    return $content['articles'];
    }

}
