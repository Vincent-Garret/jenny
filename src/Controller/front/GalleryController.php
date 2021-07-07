<?php


namespace App\Controller\front;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function gallery(){
        return $this->render('front/gallery.html.twig');
    }
}