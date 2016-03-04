<?php
// src/Blogger/BlogBundle/Controller/PageController.php

//namespace Blogger\BlogBundle\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
namespace BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BlogBundle:Page:index.html.twig');
    }
    
    public function registerAction()
    {
        return $this->render('BlogBundle:Page:register.html.twig');
    }
    
    public function loginAction()
    {
        return $this->render('BlogBundle:Page:login.html.twig');
    }
    
    public function profileAction()
    {
        // Load the stuff to connect
        $securityContext = $this->container->get('security.authorization_checker');
        if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->render('BlogBundle:Page:profile.html.twig');
        }
        else {
            return $this->render('BlogBundle:Page:login.html.twig');
        }
    }
}