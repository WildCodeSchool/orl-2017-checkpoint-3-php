<?php

namespace QR\TvShowManagerBundle\Controller;

use QR\TvShowManagerBundle\Entity\TvShow;
use QR\TvShowManagerBundle\Form\TvShowType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EpisodeController extends Controller
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
            return $this->redirectToRoute('homepage');
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
            return $this->redirectToRoute('homepage');
        }

        return $this->render('QRTvShowManagerBundle:TvShow:form.html.twig', ['form' => $form->createView()]);
    }
    public function deleteAction(TvShow $tvShow)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($tvShow);
        $em->flush();
        return $this->redirectToRoute('homepage');
    }
    public function readAction(TvShow $tvShow)
    {
        return $this->render('QRTvShowManagerBundle:Episode:read.html.twig', ['tvShows' => $tvShow]);
    }
}
