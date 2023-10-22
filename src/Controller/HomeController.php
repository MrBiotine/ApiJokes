<?php

namespace App\Controller;

use App\HttpClient\JokeHttpClient;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(JokeHttpClient $client): Response
    {
        $jokes = $client->getRandomJoke();
        return $this->render('home/index.html.twig', [
            'listJokes' => $jokes,
        ]);
    }
}
