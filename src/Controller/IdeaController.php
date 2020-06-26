<?php

namespace App\Controller;

use App\Entity\Idea;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IdeaController extends Controller
{
    /**
     * @Route("/list",name="idea_list" )
     */
    public function list()
    {
        $ideaRepo = $this->getDoctrine()->getRepository(Idea::class);
        $ideas = $ideaRepo->findBy(['isPublished'=>true],['dateCreated'=>'DESC']);


        return $this->render('/idea/list.html.twig', [
           "ideas"=>$ideas
        ]);
    }

    /**
     * @Route("/detail/{id}",name="idea_detail")
     */
    public function detail($id)
    {

        $ideaRepo = $this->getDoctrine()->getRepository(Idea::class);
        $idea= $ideaRepo->find($id);
        return $this->render('/idea/detail.html.twig', [
            'idea'=>$idea
        ]);
    }
}