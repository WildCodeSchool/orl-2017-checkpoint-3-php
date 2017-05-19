<?php

namespace TvShowManagerBundle\Controller;

use TvShowManagerBundle\Entity\TvShow;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tvshow controller.
 *
 * @Route("tvshow")
 */
class TvShowController extends Controller
{
    /**
     * Lists all tvShow entities.
     *
     * @Route("/", name="tvshow_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tvShows = $em->getRepository('TvShowManagerBundle:TvShow')->findAll();

        return $this->render('tvshow/index.html.twig', array(
            'tvShows' => $tvShows,
        ));
    }

    /**
     * Creates a new tvShow entity.
     *
     * @Route("/new", name="tvshow_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tvShow = new Tvshow();
        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType', $tvShow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvShow);
            $em->flush();

            return $this->redirectToRoute('tvshow_show', array('id' => $tvShow->getId()));
        }

        return $this->render('tvshow/new.html.twig', array(
            'tvShow' => $tvShow,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tvShow entity.
     *
     * @Route("/{id}", name="tvshow_show")
     * @Method("GET")
     */
    public function showAction(TvShow $tvShow)
    {
        $deleteForm = $this->createDeleteForm($tvShow);

        return $this->render('tvshow/show.html.twig', array(
            'tvShow' => $tvShow,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tvShow entity.
     *
     * @Route("/{id}/edit", name="tvshow_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TvShow $tvShow)
    {
        $deleteForm = $this->createDeleteForm($tvShow);
        $editForm = $this->createForm('TvShowManagerBundle\Form\TvShowType', $tvShow);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tvshow_edit', array('id' => $tvShow->getId()));
        }

        return $this->render('tvshow/edit.html.twig', array(
            'tvShow' => $tvShow,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tvShow entity.
     *
     * @Route("/{id}", name="tvshow_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TvShow $tvShow)
    {
        $form = $this->createDeleteForm($tvShow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tvShow);
            $em->flush();
        }

        return $this->redirectToRoute('tvshow_index');
    }

    /**
     * Creates a form to delete a tvShow entity.
     *
     * @param TvShow $tvShow The tvShow entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TvShow $tvShow)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tvshow_delete', array('id' => $tvShow->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
