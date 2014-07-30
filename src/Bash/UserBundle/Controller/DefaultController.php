<?php

namespace Bash\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BashUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
