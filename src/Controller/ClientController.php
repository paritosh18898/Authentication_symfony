<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MessageGenerator;

class ClientController extends AbstractController
{
    #[Route('/client', name: 'app_client')]
    public function index(MessageGenerator $messageGenerator): Response
    {
        $message = $messageGenerator->getHappyMessage(1);
        // dd($message);
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
}

