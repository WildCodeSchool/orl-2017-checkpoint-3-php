<?php

namespace wcs\TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/tvshow")
     */
    public function tvshowAction()
    {
        $tvShowList = $this->getDoctrine()
            ->getRepository('TvShowManagerBundle:TvShow')
            ->findAll();
        return $this->render('TvShowManagerBundle:tvshow:tvshow.html.twig', array('series' => $tvShowList));
    }
    /**
     * @Route("/tvshow/add")
     */
    public function tvshowAddAction()
    {
        return $this->render('TvShowManagerBundle:tvshow:add.html.twig');
    }
    /**
     * @Route("/tvshow/delete/{id}")
     */
    public function tvshowDeleteAction($id)
    {
        $tvShowList = $this->getDoctrine()
            ->getRepository('TvShowManagerBundle:TvShow')
            ->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($tvShowList);
        $em->flush();
        return $this->redirectToRoute('/tvshow');
    }
    /**
     * @Route("/tvshow/edit/{id}")
     */
    public function tvshowEditAction()
    {
        return $this->render('TvShowManagerBundle:tvshow:edit.html.twig');
    }
}
