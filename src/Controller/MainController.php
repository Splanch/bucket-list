<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/",name="home")
     */
    public function home()
    {

        return $this->render('/default/home.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route ("/about", name="about")
     */
    public function aboutUs(){
        $file= '../src/Controller/team.json';

        $data=file_get_contents($file);

        $team =json_decode($data);

        return $this->render('default/aboutUs.html.twig',[
            "team"=>$team,
        ]);
    }
}
