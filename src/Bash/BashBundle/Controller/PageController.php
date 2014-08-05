<?php
// src/Bash/BashBundle/Controller/PageController.php

namespace Bash\BashBundle\Controller;

//use Bash\BashBundle\Form\QuoteForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Bash\NodesBundle\Entity\Quote;
use Bash\NodesBundle\Entity\Comment;
use Bash\NodesBundle\Entity\Govnokod;
use Bash\BashBundle\Form\AddForm;
use Bash\NodesBundle\Entity\User;
use Bash\NodesBundle\Form\QuoteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class PageController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function recentAction($id)
    {
        $perPage = 20;
        $firstResult = $perPage * ($id - 1);
        $em = $this->getDoctrine()
          ->getManager();

        $quotes = $em->createQueryBuilder()
          ->select('b')
          ->from('Bash\NodesBundle\Entity\Quote', 'b')
          ->addOrderBy('b.id', 'DESC')
          ->setFirstResult($firstResult)
          ->setMaxResults($perPage)
          ->getQuery()
          ->getResult();

        $a = array();
        foreach ($quotes as $quote) {

            $qId = $quote->getId();

            $qb = $em->createQueryBuilder('c')
              ->select('COUNT(c.blog_id)')
              ->from('Bash\NodesBundle\Entity\Comment', 'c')
              ->where('c.blog_id = :quote')
              ->setParameter('quote', $qId)
              ->getQuery();


            $total = $qb->getSingleScalarResult();
            $a[$qId] = $total;
        }

        $recordsCount = $em->createQueryBuilder('p')
          ->select('COUNT(p.id)')
          ->from('Bash\NodesBundle\Entity\Quote', 'p')
          ->addOrderBy('p.id', 'DESC')
          ->getQuery();
        $totalcount = $recordsCount->getSingleScalarResult();

        $arr = array();
        $count = ceil(($totalcount) / $perPage);
        for ($i = 1; $i <= $count; $i++) {
            $arr[] = $i;
        }
        $last = count($arr);

        return $this->render(
          'BashBashBundle:Page:recent.html.twig',
          array(
            'quotes' => $quotes,
            'total' => $a,
            'id' => $id,
            'pager' => array(
              'count' => $count,
              'last' => $last,
              'arr' => $arr
            )
          )
        );


    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function bestAction()
    {
        return $this->render('BashBashBundle:Page:best.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function randomAction()
    {

        $em = $this->getDoctrine()
          ->getManager();

        $quotes = $em->createQueryBuilder()
          ->select('b')
          ->from('Bash\NodesBundle\Entity\Quote', 'b')
          ->addOrderBy('b.subject', 'ASC')
          ->setFirstResult(rand(0, count((array) $em) - 1))
          ->setMaxResults(10)
          ->getQuery()
          ->getResult();

        $a = array();
        foreach ($quotes as $quote) {

            $qId = $quote->getId();

            $qb = $em->createQueryBuilder('c')
              ->select('COUNT(c.blog_id)')
              ->from('Bash\NodesBundle\Entity\Comment', 'c')
              ->where('c.blog_id = :quote')
              ->setParameter('quote', $qId)
              ->getQuery();


            $total = $qb->getSingleScalarResult();
            $a[$qId] = $total;
        }

        return $this->render(
          'BashBashBundle:Page:random.html.twig',
          array(
            'quotes' => $quotes,
            'total' => $a
          )
        );


        //  return $this->render('BashBashBundle:Page:random.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function govnokodAction()
    {
        return $this->render('BashBashBundle:Page:govnokod.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addquoteAction()
    {
        return $this->render('BashBashBundle:Page:addquote.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addcodeAction()
    {
        return $this->render('BashBashBundle:Page:addcode.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function myquotesAction()
    {
        $usr = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()
          ->getManager();

        $qb = $em->createQueryBuilder('c')
          ->select('c')
          ->from('Bash\NodesBundle\Entity\Quote', 'c')
          ->where('c.author = :author')
          ->addOrderBy('c.created', 'DESC')
          ->setParameter('author', $usr->getUsername())
          ->getQuery()
          ->getResult();

        return $this->render(
          'BashBashBundle:Page:myquotes.html.twig',
          array(
            'quotes' => $qb,
            'user' => $usr->getUsername()
          )
        );


    }






    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function rssAction()
    {
        return $this->render('BashBashBundle:Page:rss.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function postAction($id)
    {
        $usr = $this->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $quote = $em->getRepository('Bash\NodesBundle\Entity\Quote')->find($id);

        if (!$quote) {
            throw $this->createNotFoundException('404');
        }

        $comments = $em->getRepository('Bash\NodesBundle\Entity\Comment', array('id' => $id))
          ->getCommentsForBlog($quote->getId());

        return $this->render(
          'BashBashBundle:Page:post.html.twig',
          array(
            'quote' => $quote,
            'comment' => $comments,
            'you_are' => $usr->getUsername(),
          )
        );
    }

    public function userAction($user)
    {


        $em = $this->getDoctrine()
          ->getManager();

        $qb = $em->createQueryBuilder('q')
          ->select('q.created')
          ->from('Bash\BashBundle\Entity\User', 'q')
          ->where('q.username = :user')
          ->setParameter('user', $user)
          ->getQuery()
          ->getOneOrNullResult();

        if (!$qb) {
            throw $this->createNotFoundException('No such user');

        } else {

            return $this->render(
              'BashBashBundle:Page:user.html.twig',
              array(
                'user' => $user,
                'time' => $qb

              )
            );

        }


    }

    public function editAction($id,  Request $request)
    {
        $usr = $this->get('security.context')->getToken()->getUser();

       // $request = $this->get('request_stack')->getCurrentRequest();

        $em = $this->getDoctrine()->getManager();
        $quote = $em->getRepository('Bash\NodesBundle\Entity\Quote')->find($id);
        if (!$quote) {
            throw $this->createNotFoundException(
              'No news found for id ' . $id
            );
        }

        $form = $this->createFormBuilder($quote)
          ->add('subject', 'textarea')
          ->add('file', 'file', array('required' => false))
          ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('BashBashBundle_post',  array(
                  'id' => $quote->getId()
                )));
        }

        //$build['form'] = $form->createView();

        return $this->render(
          'BashBashBundle:Quote:edit.html.twig',
          array(
            'user' => $usr->getUsername(),
            'form' => $form->createView(),
            'quote' => $quote,
            'id' => $id,

          )
        );
    }

    public function dellAction($id, Request $request) {

        $usr = $this->get('security.context')->getToken()->getUser();

        $em = $this->getDoctrine()->getManager();
        $quote = $em->getRepository('Bash\NodesBundle\Entity\Quote')->find($id);
        if (!$quote) {
            throw $this->createNotFoundException(
              'No news found for id ' . $id
            );
        }

        $form = $this->createFormBuilder($quote)
          ->add('delete', 'submit', array('attr'=> array('class' => 'form-submit', 'id' => 'edit-submit')))
          ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->remove($quote);
            $em->flush();
            return $this->redirect($this->generateUrl('BashBashBundle_recent',  array(
                  'id' => 1
                )));
        }

        return $this->render(
          'BashBashBundle:Quote:dell.html.twig',
          array(
            'id' => $id,
            'user' => $usr->getUsername(),
            'quote' => $quote,
            'form' => $form->createView(),
          )
        );
    }


}















