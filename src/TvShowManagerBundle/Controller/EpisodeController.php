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

class EpisodeController extends Controller
{
    /**
     * @Route("/episode/{id}")
     */
    public function showEpisodes($id)
    {
        $em = $this->getDoctrine()->getManager();
        $episode = $em->getRepository('TvShowManagerBundle:Episode')
            ->findAll($id);
        return $this->render('TvShowManagerBundle:Default:episodes.html.twig',array('episode'=>$episode));
    }

}