<?php

namespace BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BlogBundle\Entity\Article;
use BlogBundle\Form\ArticleType;
use BlogBundle\Form\RechercheType;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{
    /**
     * Lists all Article entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('BlogBundle:Article')->findAll();
        $comments = $em->getRepository('BlogBundle:Comment')->findAll();

        return $this->render('article/index.html.twig', array(
            'articles' => $articles,
            'comments' => $comments,
        ));
    }

    /**
     * Creates a new Article entity.
     *
     */
    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm('BlogBundle\Form\ArticleType', $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_show', array('id' => $article->getId()));
        }

        return $this->render('article/new.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Article entity.
     *
     */
    public function showAction(Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $comments = $em->getRepository('BlogBundle:Comment')->findAll();

        return $this->render('article/show.html.twig', array(
            'article' => $article,
            'comments' => $comments,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('BlogBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_edit', array('id' => $article->getId()));
        }

        return $this->render('article/edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Article entity.
     *
     */
    public function deleteAction(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('article_index');
    }

    /**
     * Creates a form to delete a Article entity.
     *
     * @param Article $article The Article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    public function rechercheAction()
        
    {
        $form= $this->createForm(new RechercheType());

         return $this->render('article/recherche.html.twig', array(
           'form'=>$form->createView(),
        ));
    }
    
    public function rechercheTraitementAction()
    {
        
        $form= $this->createForm(new RechercheType());
        
        if($this->get('request')->getMethod()=='POST')
        {
            $form->bind($this->get('request'));
            $em = $this->getDoctrine()->getManager();
            
            $articles = $em->getRepository('BlogBundle:Article')->recherche($form['recherche']->getData());

           // echo $form['recherche']->getData();
            
            
            
            
        }
        
       //pour le test die();
        $em = $this->getDoctrine()->getManager();
        
        return $this->render('article/index.html.twig', array(
            'articles' => $articles,
        ));
        
        
    }
}