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
}