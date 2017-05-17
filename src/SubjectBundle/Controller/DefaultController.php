<?php

namespace SubjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('SubjectBundle:Default:index.html.twig');
    }

    /**
     * @Route("/algo", name="algo")
     */
    public function algoAction()
    {
        return $this->render('SubjectBundle:Default:algo.html.twig');
    }

    /**
     * @Route("/sf3", name="sf3")
     */
    public function sf3Action()
    {
        return $this->render('SubjectBundle:Default:sf3.html.twig');
    }

}
