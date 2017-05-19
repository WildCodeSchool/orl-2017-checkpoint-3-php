<?php
/**
 * Created by PhpStorm.
 * User: wilder8
 * Date: 19/05/17
 * Time: 11:04
 */

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

/**
 * Tvshow controller
 */
class TvShowController extends Controller
{
    /**
     * Lists all tvshow entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')->findAll();

        return $this->render('tvshow/index.html.twig', array(
            'tvshows' => $tvshows,
        ));
    }

    /**
     * Creates a new tvshow entity.
     *
     */
    public function newAction(Request $request)
    {
        $tvshow = new TvShow();


    }

}