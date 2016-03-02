<?php
// src/Blogger/BlogBundle/Controller/PageController.php

//namespace Blogger\BlogBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
namespace BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//j'ai rajouté ces 2 lignes aorès l'ajout de l'entité "Enquiry" et le fichier "EnquiryType"
use BlogBundle\Entity\Enquiry;
use BlogBundle\Form\EnquiryType;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Page:index.html.twig');
    }
    
    public function contactAction()
    {
        
            $enquiry = new Enquiry();
            $form = $this->createForm(new EnquiryType(), $enquiry);

            $request = $this->getRequest();
            if ($request->getMethod() == 'POST') 
            {
               // $form->bindRequest($request);
               $form->bind($request);

                if ($form->isValid()) 
                {
                    // Perform some action, such as sending an email

                    // Redirect - This is important to prevent users re-posting
                    // the form if they refresh the page
                    return $this->redirect($this->generateUrl('BlogBundle_contact'));
                }
            }

            return $this->render('BlogBundle:Page:contact.html.twig', array(
                'form' => $form->createView()
            ));
        
        
        
    }
    
}