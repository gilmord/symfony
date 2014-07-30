<?php
// src/Blogger/BlogBundle/Controller/CommentController.php

namespace Bash\BashBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bash\NodesBundle\Entity\Comment;
use Bash\NodesBundle\Form\CommentType;

/**
 * Comment controller.
 */
class CommentController extends Controller
{
    public function newAction($id)
    {
        $blog = $this->getBlogId($id);

        $comment = new Comment();
        $comment->setBlogId($blog);
        $form   = $this->createForm(new CommentType(), $comment);

        return $this->render('BashBashBundle:Comment:form.html.twig', array(
            'comment' => $comment,
            'form'   => $form->createView()
          ));
    }

    public function createAction($id)
    {
        $quote = $this->getBlogId($id);
//
        $comment  = new Comment();
        $comment->setBlogId($quote);
        $request = $this->get('request_stack')->getCurrentRequest();
        $form    = $this->createForm(new CommentType(), $comment);
        $form->submit($request->request->get($form->getName()));
//
        if ($form->isValid()) {
            $comment->setUser('Gabriel');
            $em = $this->getDoctrine()
              ->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirect($this->generateUrl('BashBashBundle_post', array(
                  'id' => $comment->getBlogId()->getId()))
            );
        }

        return $this->render('BashBashBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
          ));

    }

    protected function getBlogId($id)
    {
        $em = $this->getDoctrine()
          ->getManager();

        $quote = $em->getRepository('BashNodesBundle:Quote')->find($id);

        if (!$quote) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $quote;
    }

}