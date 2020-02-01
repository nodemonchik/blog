<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/twig", name="twig")
     */
    public function helloTwig()
    {
        $message = 'Test React app!';
        return $this->render('hello/index.html.twig', [
            'message' => $message,
        ]);
    }
}
