<?php


namespace App\Controller\front;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function  contact()
    {
        var_dump($_GET);
        return $this->render('front/contact.html.twig');
    }
}