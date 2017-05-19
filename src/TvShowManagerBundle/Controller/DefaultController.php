<?php

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TvShowManagerBundle\Entity\TvShow;

class DefaultController extends Controller
{


    /**
     * @Route("/tvshow", name="tvshow_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tvshows = $em->getRepository('TvShowManagerBundle:TvShow')->findAll();

        return $this->render('TvShowManagerBundle:Default:tvshowlist.html.twig',array('tvshows'=>$tvshows));
    }

    /**
     * @Route("/tvshow/new" , name="tvshow_new")
     */
    public function addAction(Request $request)
    {

        $tvshow = new TvShow();
        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType',$tvshow);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvshow);
            $em->flush();

//            return $this->redirectToRoute('tvshow_edit', array('id' => $tvshow->getId()));
        }

        return $this->render('TvShowManagerBundle:Default:tvshownew.html.twig',array(
            'tvshow'=>$tvshow,
            'form'=>$form->createView(),
        ));
    }

    /**
     * @Route("/tvshow/edit/{id}", name="tvshow_edit")
     */
    public function editAction(TvShow $tvShow)
    {
        $em = $this->getDoctrine()->getManager();

        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')->findoneBy($id);
        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType',$tvshow);



        return $this->render('TvShowManagerBundle:Default:tvshowedit.html.twig', array(
            'tvshow' => $tvshow,
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/tvshow/delete/{id}")
     */
    public function deleteAction()
    {
        return $this->render('TvShowManagerBundle:Default:tvshowlist.html.twig');
    }




}
