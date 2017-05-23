<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 23/05/17
 * Time: 09:52
 */

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use TvShowManagerBundle\Entity\Episode;
use TvShowManagerBundle\Form\EpisodeType;

/**
 * @Route("/episode")
 */
class EpisodeController extends Controller
{
    /**
     * @Route("/list", name="list_episode")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $episodes = $em->getRepository(Episode::class)->findAll();

        return $this->render(':episode:list.html.twig', [
            'episodes' => $episodes,
        ]);
    }

    /**
     * @Route("/show/{id}", name="show_episode")
     */
    public function showAction(Episode $episode)
    {
//        $em = $this->getDoctrine()->getManager();
//        $episode = $em->getRepository(Episode::class)->find($id);

        return $this->render(':episode:show.html.twig', [
            'episode' => $episode,
        ]);
    }

    /**
     * @Route("/add", name="add_episode")
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $episode = new Episode;
        $form = $this->createForm(EpisodeType::class, $episode);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($episode);
            $em->flush();
            return $this->redirectToRoute('list_episode');
        }

        return $this->render(':episode:add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit_episode")
     */
    public function editAction(Episode $episode, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(EpisodeType::class, $episode);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('edit_episode', ['id'=>$episode->getId()]);
        }

        return $this->render(':episode:edit.html.twig', [
            'form' => $form->createView(),
            'episode' => $episode,
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete_episode")
     * @Method("POST")
     */
    public function deleteAction(Episode $episode)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($episode);
        $em->flush();

        return $this->redirectToRoute('list_episode');
    }

}
