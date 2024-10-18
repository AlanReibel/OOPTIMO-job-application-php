<?php

namespace app\services;

use GuzzleHttp\Client;

class PostService
{
    public function getPosts()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        return json_decode($response->getBody(), true);
    }
}
