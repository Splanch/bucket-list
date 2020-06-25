<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IdeaController extends Controller
{
    /**
     * @Route("/list",name="list" )
     */
    public function list()
    {

        return $this->render('/default/list.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/detail/{id}",name="detail")
     */
    public function detail($id)
    {

        return $this->render('/default/detail.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}