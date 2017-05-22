<?php

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TvShowManagerBundle\Entity\Episode;
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
    public function editAction(Request $request,$id)
    {
        $tvshow = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('TvShowManagerBundle:TvShow')
            ->find($id);

        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType',$tvshow);

        if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('tvshow_list');
        }

        return $this->render('TvShowManagerBundle:Default:tvshowedit.html.twig', array(
            'tvshow' => $tvshow,
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/tvshow/delete/{id}", name="tvshow_delete")
     */
    public function deleteAction(Request $request,$id)
    {
        $em = $this
            ->getDoctrine()
            ->getManager();
        $tvshow = $em
            ->getRepository('TvShowManagerBundle:TvShow')
            ->find($id);

        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType', $tvshow);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->remove($tvshow);
            $em->flush();
            return $this->redirectToRoute('tvshow_list');
        }

        return $this->render('TvShowManagerBundle:Default:tvshowdelete.html.twig', array(
            'tvshow' => $tvshow,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/episode", name="episode_list")
     */
    public function listepisodeAction()
    {
        $em = $this->getDoctrine()->getManager();


        $episodes = $em->getRepository('TvShowManagerBundle:Episode')->findAll();
        foreach ($episodes as $episode) {
            $tvshow = $episode->getTvShow();
        }


        return $this->render('TvShowManagerBundle:Default:episodelist.html.twig',array(
            'episodes'=>$episodes,
            'tvshow'=>$tvshow));
    }

    /**
     * @Route("/episode/tvshow/{id}", name="episode_tvshow_list")
     */
    public function listepisodebytvshowAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')->find($id);
        $episodes = $em->getRepository('TvShowManagerBundle:Episode')->findByTvShow(array('tvshow'=>$tvshow));


        return $this->render('TvShowManagerBundle:Default:episodetvshowlist.html.twig',array(
            'episodes'=>$episodes,
            'tvshow'=>$tvshow));
    }

    /**
     * @Route("/episode/new" , name="episode_new")
     */
    public function addepisodeAction(Request $request)
    {

        $episode = new Episode();
        $form = $this->createForm('TvShowManagerBundle\Form\EpisodeType',$episode);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();

            return $this->redirectToRoute('episode_edit', array('id' => $episode->getId()));
        }

        return $this->render('TvShowManagerBundle:Default:episodenew.html.twig',array(
            'episode'=>$episode,
            'form'=>$form->createView(),
        ));
    }


    /**
     * @Route("/episode/edit/{id}", name="episode_edit")
     */
    public function editepisodeAction(Request $request,$id)
    {
//        $tvshow = $this
//            ->getDoctrine()
//            ->getManager()
//            ->getRepository('TvShowManagerBundle:TvShow')
//            ->find($id);
//
//        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType',$tvshow);
//
//        if($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
//            $this->getDoctrine()->getManager()->flush();
//            return $this->redirectToRoute('tvshow_list');
//        }
//
//        return $this->render('TvShowManagerBundle:Default:tvshowedit.html.twig', array(
//            'tvshow' => $tvshow,
//            'form' => $form->createView(),
//        ));

    }

    /**
     * @Route("/note", name="note")
     */
    public function noteAction()
    {
        $em = $this->getDoctrine()->getManager();


        $episodes = $em->getRepository('TvShowManagerBundle:Episode')->findAll();
        foreach ($episodes as $episode){
            $tvshowName = $episode->getTvShow()->getName();
            $note = $episode->getNote();
            $tab[$tvshowName]=[$note];
        }

        return $this->render('TvShowManagerBundle:Default:note.html.twig',array('tab'=>$tab));
    }






}
