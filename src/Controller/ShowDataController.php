<?php

namespace Mm2000\ShowDataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShowDataController extends AbstractController 
{


    #[Route('/showData')]
    public function index(): Response
    {
        return $this->render('@ShowData/showData.html.twig', [
            'test' => 'test'
        ]);
    }











}