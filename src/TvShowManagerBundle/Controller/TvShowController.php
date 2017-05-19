<?php
/**
 * Created by PhpStorm.
 * User: jean-baptiste
 * Date: 19/05/17
 * Time: 11:23
 */

namespace TvShowManagerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TvShowController extends Controller
{
    /**
     * @Route("/tvshow/{id}")
     */
    public function showTvShow($id)
    {
        $em = $this->getDoctrine()->getManager();
        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')
            ->findAll($id);
        return $this->render('TvShowManagerBundle:Default:tvshow.html.twig',array('tvshow'=>$tvshow));
    }

}