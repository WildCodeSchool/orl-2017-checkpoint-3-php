<?php
/**
 * Created by PhpStorm.
 * User: fanny
 * Date: 19/05/17
 * Time: 10:13
 */

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EpisodeController extends Controller
{
    /**
     * @Route("/episode")
     */
    public function indexEpisode()
    {
        return $this->render('TvShowManagerBundle:Default:episode.html.twig');
    }

    /**
     * @Route("/list)
     */
    public function listEpisode()
    {
        $em = $this->getDoctrine()->getManager();
        $episodes = $em->getRepository(Episode::class)->findAll();
        return $this->render(':episode:list.html.twig', [
            'episodes' => $episodes,
        ]);
    }

    /**
     * @Route("/show/{id}")
     */
    public function showEpisode($id)
    {
        $em = $this->getDoctrine()->getManager();
        $episode = $em->getRepository(Episode::class)->find($id);
        return $this->render(':episode:show.html.twig', [
            'episode' => $episode,
        ]);
    }
    /**
     * @Route("/add")
     */
    public function addEpisode()
    {
        $em = $this->getDoctrine()->getManager();

    }
    /**
     * @Route("/edit/{id}")
     */
    public function editEpisode()
    {
        $em = $this->getDoctrine()->getManager();

    }
    /**
     * @Route("/delete/{id}")
     * @Method("POST")
     */
    public function deleteAction($episode)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($episode);
        $em->flush();
        return $this->render(':episode:list.html.twig');
    }
}