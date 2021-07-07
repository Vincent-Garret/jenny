<?php


namespace App\Controller\front;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShowController extends AbstractController
{
    /**
     * @Route("/show", name="show")
     */
    public function show()
    {
        return $this->render('front/show.html.twig');
    }
}