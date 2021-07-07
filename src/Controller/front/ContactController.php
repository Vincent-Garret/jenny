<?php


namespace App\Controller\front;


use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function  contact(Request $request,
                             EntityManagerInterface $entityManager)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($contact);
            $entityManager->flush();
        }


        return $this->render('front/contact.html.twig', [
            'form' => $form->createView()
        ]);
    }
}