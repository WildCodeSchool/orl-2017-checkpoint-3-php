<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 19/05/17
 * Time: 10:34
 */

namespace NLF\TvShowManagerBundle\Controller;


use NLF\TvShowManagerBundle\Entity\Episode;
use NLF\TvShowManagerBundle\Form\EpisodeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EpisodeController extends Controller
{
    public function addAction(Request $req, Episode $editEpisode = null)
    {
        $episode = new Episode();
        if ($editEpisode !== null) {
            $formEpisode = $this->createForm(EpisodeType::class, $editEpisode);
            $formEpisode->handleRequest($req);
            if ($formEpisode->isSubmitted() && $formEpisode->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($editEpisode);
                $em->flush();
                $formEpisode = $this->createForm(EpisodeType::class, $episode);
            }
        } else {
            $formEpisode = $this->createForm(EpisodeType::class, $episode);
            $formEpisode->handleRequest($req);
            if ($formEpisode->isSubmitted() && $formEpisode->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($episode);
                $em->flush();
            }
        }


        return $this->render('NLFTvShowManagerBundle:Default:addEpisode.html.twig', array(
            'formepisode' => $formEpisode->createView(),
            'allepisode' => $this->showAllAction()
        ));
    }

    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();

        $allEpisode = $em->getRepository('NLFTvShowManagerBundle:Episode')->findAll();
        return $allEpisode;
    }

    public function showByTvShowAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $episode = $em->getRepository('NLFTvShowManagerBundle:Episode')->findByTvShow($id);
        return $episode;
    }

    public function deleteAction(Episode $episode)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($episode);
        $em->flush();
        return $this->redirectToRoute('nlf_tv_show_manager_add_episode');
    }

}