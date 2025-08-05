<?php

namespace App\Controller;

use TelegramBot\Api\BotApi;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/test', methods: ['GET'])]
    public function developTest(): JsonResponse
    {
        return new JsonResponse(['status' => 'error', 'message' => "Designer"], 200);
    }
}