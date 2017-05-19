<?php

namespace TvShowManagerBundle\Controller;

use TvShowManagerBundle\Entity\TvShow;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Flight controller.
 *
 */
class TvShowController extends Controller
{


    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tvshows = $em->getRepository('TvShowManagerBundle:TvShow')->findAll();

        return $this->render('tvshow/index.html.twig', array(
            'tvshows' => $tvshows,
        ));
    }

    /**
     * Creates a new flight entity.
     *
     */
    public function newAction(Request $request)
    {
        $tvshow = new TvShow();
        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType', $tvshow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvshow);
            $em->flush($tvshow);

            return $this->redirectToRoute('tvshow_show', array('id' => $tvshow->getId()));
        }

        return $this->render('tvshow/new.html.twig', array(
            'tvshow' => $tvshow,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a flight entity.
     *
     */
    public function showAction(TvShow $tvshow)
    {
        $deleteForm = $this->createDeleteForm($tvshow);

        return $this->render('tvshow/show.html.twig', array(
            'tvshow' => $tvshow,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing flight entity.
     *
     */
    public function editAction(Request $request, TvShow $tvshow)
    {
        $deleteForm = $this->createDeleteForm($tvshow);
        $editForm = $this->createForm('TvShowManagerBundle\Form\TvShowType', $tvshow);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tvshow_edit', array('id' => $tvshow->getId()));
        }

        return $this->render('tvshow/edit.html.twig', array(
            'tvshow' => $tvshow,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a flight entity.
     *
     */
    public function deleteAction(Request $request, TvShow $tvshow)
    {
        $form = $this->createDeleteForm($tvshow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tvshow);
            $em->flush($tvshow);
        }

        return $this->redirectToRoute('tvshow_index');
    }

    /**
     * Creates a form to delete a flight entity.
     *
     * @param Flight $flight The flight entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TvShow $tvshow)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tvshow_delete', array('id' => $tvshow->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
}