<?php
/**
 * Created by PhpStorm.
 * User: francois
 * Date: 19/05/2017
 * Time: 10:37
 */

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
class EpisodeController extends Controller
{
    /**
     * Lists tous les épisoodes.
     *
     * @Route("/episodes")
     * @Method("GET")
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $episodes = $em->getRepository('TvShowManagerBundle:Episode')->findAll();

        return $this->render('TvShowManagerBundle:Default:episodes.html.twig', array(
            'episodes' => $episodes,
        ));

    }
}