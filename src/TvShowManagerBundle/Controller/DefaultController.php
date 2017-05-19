<?php

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TvShowManagerBundle\Entity\TvShow;
use TvShowType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('TvShowManagerBundle:Default:index.html.twig');
    }

    /**
     * @Route("/tvshow", name="tvshow")
     */
    public function listTvShowAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tvShows = $em->getRepository('TvShowManagerBundle:TvShow')
            ->findAll();

        return $this->render('TvShowManagerBundle:Default:listTvShows.html.twig', ['tvshows'=>$tvShows]);

    }

    /**
     * @Route("/tvshow/ajout", name="ajoutTVS")
     */
    public function ajouterTvShowAction(Request $request)
    {
        $tvshow = new TvShow();

        $form = $this->createForm(TvShowType::class, $tvshow);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvshow);
            $em->flush();

            return $this->redirectToRoute('tvshow');
        }

        return $this->render('TvShowManagerBundle:Default:ajoutTvShows.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/tvshow/{id}", name="ficheTVS")
     */
    public function afficherTvShowAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')
            ->find($id);

        return $this->render('TvShowManagerBundle:Default:ficheTvShow.html.twig', ['tvshow'=>$tvshow]);

    }

    /**
     * @Route("/tvshow/modifier/{id}", name="modificationTVS")
     * @param Request $request
     * @param TvShow $tvshow
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function modifierTvShowAction(Request $request, TvShow $tvshow)
    {
        $editForm = $this->createForm('src\TvShowManagerBundle\Form\TvShowType', $tvshow);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('modificationTVS', array('id' => $flight->getId()));
        }

        return $this->render('TvShowManagerBundle:Default:ficheTvShow.html.twi', array(
            'tvshow' => $tvshow,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * @Route("/tvshow/suppression/{id}", name="suppressionTVS")
     */
    public function supprimerTvShowAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')->find($id);

        $em->remove($tvshow);

        $em->flush();

        return $this->render('TvShowManagerBundle:Default:suppressionTvShow.html.twig', ['tvshow'=>$tvshow]);

    }
}
