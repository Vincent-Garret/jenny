<?php

namespace App\Controller\front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("home", name="home")
     */
    public function home()
    {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $url = "https";
        }
        else{
            $url = "http";
        }
        $url .= "://";
        $url .= $_SERVER['HTTP_HOST'];
        $url .= $_SERVER['REQUEST_URI'];

        return $this->render('front/home.html.twig',[
            'url' => $url
        ]);
    }
}