<?php

namespace TvShowManagerBundle\Controller;

use TvShowManagerBundle\Entity\Episode;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Flight controller.
 *
 */
class EpisodeController extends Controller
{


    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $episodes = $em->getRepository('TvShowManagerBundle:Episode')->findAll();

        return $this->render('episode/index.html.twig', array(
            'episodes' => $episodes,
        ));
    }

    /**
     *
     *
     */
    public function newAction(Request $request)
    {
        $episode = new Episode();
        $form = $this->createForm('TvShowManagerBundle\Form\EpisodeType', $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush($episode);

            return $this->redirectToRoute('episode_show', array('id' => $episode->getId()));
        }

        return $this->render('episode/new.html.twig', array(
            'episode' => $episode,
            'form' => $form->createView(),
        ));
    }

    /**
     *
     *
     */
    public function showAction(Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);

        return $this->render('episode/show.html.twig', array(
            'episode' => $episode,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     *
     *
     */
    public function editAction(Request $request, Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);
        $editForm = $this->createForm('TvShowManagerBundle\Form\EpisodeType', $episode);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('episode_edit', array('id' => $episode->getId()));
        }

        return $this->render('episode/edit.html.twig', array(
            'episode' => $episode,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     *
     *
     */
    public function deleteAction(Request $request, Episode $episode)
    {
        $form = $this->createDeleteForm($episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($episode);
            $em->flush($episode);
        }

        return $this->redirectToRoute('episode_index');
    }

    /**
     *
     *
     *
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Episode $episode)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('episode_delete', array('id' => $episode->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}