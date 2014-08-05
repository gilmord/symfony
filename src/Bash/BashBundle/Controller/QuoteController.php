<?php
// src/Blogger/BlogBundle/Controller/CommentController.php

namespace Bash\BashBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bash\NodesBundle\Entity\Quote;
use Bash\NodesBundle\Form\QuoteType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Comment controller.
 */
class QuoteController extends Controller
{
    public function newAction()
    {
        $quote = new Quote();
        $form   = $this->createForm(new QuoteType(), $quote);

        return $this->render('BashBashBundle:Quote:form.html.twig', array(
            'quote' => $quote,
            'form'   => $form->createView()
          ));
    }

    public function createAction()
    {

//
        $quote = new Quote();
        $request = $this->get('request_stack')->getCurrentRequest();
        $form    = $this->createForm(new QuoteType(), $quote);
        $form->submit($request->request->get($form->getName()));
//
        if ($form->isValid()) {

            //$quote->upload();
            $usr= $this->get('security.context')->getToken()->getUser();

            $quote->setAuthor($usr->getUsername());
            $em = $this->getDoctrine()
              ->getManager();

            $em->persist($quote);
            $em->flush();

            return $this->redirect($this->generateUrl('BashBashBundle_recent',  array(
              'id' => 1
         )));
        }



    }
    public function aquotesAction($author)
    {
        $usr = $this->get('security.context')->getToken()->getUser();


//        if ($usr->getUsername() == $author) {
//            return $this->render('BashBashBundle:Page:aquotes.html.twig');
//        }
//        else {


        $em = $this->getDoctrine()
          ->getManager();

        $qb = $em->createQueryBuilder('c')
          ->select('c')
          ->from('Bash\NodesBundle\Entity\Quote', 'c')
          ->where('c.author = :author')
          ->addOrderBy('c.created', 'DESC')
          ->setParameter('author', $author)
          ->getQuery()
          ->getResult();

        return $this->render(
          'BashBashBundle:Page:aquotes.html.twig',
          array(
            'quotes' => $qb,
            'author' => $author
          )
        );


        // }


    }


}