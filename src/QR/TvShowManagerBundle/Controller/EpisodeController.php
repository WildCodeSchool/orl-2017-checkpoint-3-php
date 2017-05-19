<?php

namespace QR\TvShowManagerBundle\Controller;

use QR\TvShowManagerBundle\Entity\Episode;
use QR\TvShowManagerBundle\Entity\TvShow;
use QR\TvShowManagerBundle\Form\EpisodeType;
use QR\TvShowManagerBundle\Form\TvShowType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EpisodeController extends Controller
{
    public function addAction(Request $request, TvShow $tvShow)
    {
        $episode = new Episode();
        $form = $this->createForm(EpisodeType::class, $episode);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $data->setTvShow($tvShow);
            $em->persist($data);
            $em->flush();
            return $this->redirectToRoute('qr_tv_show_manager_tvShow_read');
        }

        return $this->render('QRTvShowManagerBundle:Episode:form.html.twig', ['form' => $form->createView()]);
    }
    public function updateAction(Episode $episode,Request $request)
    {
        $form = $this->createForm(EpisodeType::class, $episode);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('qr_tv_show_manager_tvShow_read');
        }

        return $this->render('QRTvShowManagerBundle:Episode:form.html.twig', ['form' => $form->createView()]);
    }
    public function deleteAction(Episode $episode)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($episode);
        $em->flush();
        return $this->redirectToRoute('qr_tv_show_manager_tvShow_read');
    }
    public function readAction(TvShow $tvShow)
    {
        return $this->render('QRTvShowManagerBundle:Episode:read.html.twig', ['tvShow' => $tvShow, 'episodes' => $tvShow->getEpisodes()]);
    }
}
