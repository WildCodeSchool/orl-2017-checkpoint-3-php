<?php
/**
 * Created by PhpStorm.
 * User: HaGii
 * Date: 19/05/2017
 * Time: 10:32
 */

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TvShowController extends Controller
{

    /**
     * @Route("/tvshow")
     */
    public function listAllAction()
    {
        $em =$this->getDoctrine()->getManager():
        $series = $em->getRepository('TvShowManagerBundle:TvShow')->findAll();
        return $this->render('TvShowManagerBundle:Default:index.html.twig', array('series'=>$series));
    }

}