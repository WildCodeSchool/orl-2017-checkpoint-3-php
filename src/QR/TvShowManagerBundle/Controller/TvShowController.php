<?php

namespace QR\TvShowManagerBundle\Controller;

use QR\TvShowManagerBundle\Entity\TvShow;
use QR\TvShowManagerBundle\Form\TvShowType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TvShowController extends Controller
{
    private function getTvShows()
    {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('QRTvShowManagerBundle:TvShow')->findAll();
    }
    public function addAction(Request $request)
    {
        $tvShow = new TvShow();
        $form = $this->createForm(TvShowType::class, $tvShow);

        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($form->getData());
            $em->flush();
            return $this->redirectToRoute('qr_tv_show_manager_tvShow_read');
        }

        return $this->render('QRTvShowManagerBundle:TvShow:form.html.twig', ['form' => $form->createView()]);
    }
    public function updateAction(TvShow $tvShow,Request $request)
    {
        $form = $this->createForm(TvShowType::class, $tvShow);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('qr_tv_show_manager_tvShow_read');
        }

        return $this->render('QRTvShowManagerBundle:TvShow:form.html.twig', ['form' => $form->createView()]);
    }
    public function deleteAction(TvShow $tvShow)
    {
        $em = $this->getDoctrine()->getManager();
        foreach ($tvShow->getEpisodes() as $episode){
            $em->remove($episode);
            $em->flush();
        }
        $em->remove($tvShow);
        $em->flush();
        return $this->redirectToRoute('qr_tv_show_manager_tvShow_read');
    }
    public function readAction()
    {
        $tvShows = $this->getTvShows();
        return $this->render('QRTvShowManagerBundle:TvShow:read.html.twig', ['tvShows' => $tvShows]);
    }
}
