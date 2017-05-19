<?php
/**
 * Created by PhpStorm.
 * User: wilder1
 * Date: 19/05/17
 * Time: 10:52
 */

namespace TvShowManagerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TvShowManagerBundle\Entity\Episode;


class EpisodeController extends Controller
{

    /**
     * @Route("/episode/{id}")
     */
    public function showEpisodeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $episode = $em->getRepository('TvShowManagerBundle:Episode')->find($id);
        return $this->render('TvShowManagerBundle:Episode:show.html.twig',
            [
                'episode' => $episode,
            ]);
    }


    /**
     * @Route("/episodes/{tvshow_id}")
     */
    public function listEpisodeAction($TvShow_id) //ici je ne sais plus si je dois écrire tvshow ou TvShow ou encore tvSHow, même si c'est une variable.
    {
        $em = $this->getDoctrine()->getManager();
        $episode = $em->getRepository('TvSHowBundle:Episode')->find($TvShow_id);

        return $this->render('TvShowManagerBundle:Episode:list.html.twig', [
            'episodes' => $TvShow_id,
        ]);
    }


    /**
     *
     * @Route("add-episode/{name}/{type}/{year}/{url}")
     *
     */
    public function addEpisodeAction($name, $season, $number, $note, $tvShow)
    {
        $em = $this->getDoctrine()->getManager();
        $episode = new Episode();
        $episode->setName($name);
        $episode->setSeason($season);
        $episode->setNumber($number);
        $episode->setNote($note);

        $tvShow = $em->getRepository('TvShowManagerBundle:TvShow')->find(1);

        $episode->setTvShow($tvShow);
        $em->persist($episode);
        $em->flush();
        return $this->render('TvShowManagerBundle:Episode:add.html.twig',
            [
                'episode' => $episode,
            ]);
    }


    /**
     *
     *@Route("/change-episode/{idEpisode}/{idtvShow}")
     *
     */
    public function changeEpisodeAction($idEpisode, $idtvShow)
    {
        $em = $this->getDoctrine()->getManager();
        $episode = $em->getRepository('TvShowManagerBundle:Episode')->find($idEpisode);
        $tvShow = $em->getRepository('TvShowManagerBundle:TvShow')->find($idtvShow);
        return $this->render('TvShowManagerBundle:Episode:update.html.twig',
            [
                'episode' => $episode,
            ]);

    }

    /**
     *
     * @Route("delete-episode/{id}")
     *
     */
    public function deleteEpisodeAction( Episode $episode)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($episode);
        $em->flush();

        return $this->render('TvShowManagerBundle:Episode:delete.html.twig',
        [
        'episode' => $episode,
        ]);
            
    }

}
