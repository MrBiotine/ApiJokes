<?php

namespace App\HttpClient;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class JokeHttpClient
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getRandomJoke ()
    {
        $response = $this->client->request('GET', 'https://v2.jokeapi.dev/joke/Any?lang=fr&amount=10', [
            'verify_peer' => false,
        ]);
        return $response->toArray();
    }
} 