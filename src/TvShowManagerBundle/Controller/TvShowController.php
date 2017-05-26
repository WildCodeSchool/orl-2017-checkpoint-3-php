<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 19/05/17
 * Time: 10:14
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TvShowController extends Controller
{
    /**
     * @Route("/tvshow")
     */
    public function indexTvShow()
    {
        return $this->render('TvShowManagerBundle:Default:tvshow.html.twig');
    }

    /**
    * @Route("/list)
     */
    public function listShow()
    {
        $em = $this->getDoctrine()->getManager();
        $shows = $em->getRepository(Show::class)->findAll();
        return $this->render(':show:list.html.twig', [
            'shows' => $shows,
        ]);
    }

    /**
     * @Route("/show/{id}")
     */
    public function showShow($id)
    {
        $em = $this->getDoctrine()->getManager();
        $show = $em->getRepository(Show::class)->find($id);
        return $this->render(':show:show.html.twig', [
            'show' => $show,
        ]);
    }
    /**
     * @Route("/add")
     */
    public function addShow()
    {
        $em = $this->getDoctrine()->getManager();

    }
    /**
     * @Route("/edit/{id}")
     */
    public function editShow()
    {
        $em = $this->getDoctrine()->getManager();

    }
    /**
     * @Route("/delete/{id}")
     * @Method("POST")
     */
    public function deleteAction($show)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($show);
        $em->flush();
        return $this->render(':show:list.html.twig');
    }
}