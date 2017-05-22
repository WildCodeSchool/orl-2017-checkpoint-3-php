<?php
namespace TvShow\ManagerBundle\Controller;

use TvShow\ManagerBundle\Entity\TvShow;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Episode controller.
 *
 */
class TvShowController extends Controller
{
    /**
     * Lists all TvShow entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $TvShows = $em->getRepository('TvShowManagerBundle:TvShow')->findAll();

        return $this->render('TvShow/index.html.twig', array(
            'TvShows' => $TvShows,
        ));
    }

    /**
     * Creates a new TvShow entity.
     *
     */
    public function newAction(Request $request)
    {
        $Tvshow = new TvShow();
        $form = $this->createForm('TvShow\ManagerBundle\Form\TvShowType', $TvShow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($TvShow);
            $em->flush();

            return $this->redirectToRoute('TvShow_show', array('id' => $TvShow->getId()));
        }

        return $this->render('TvShow/new.html.twig', array(
            'TvShow' => $TvShow,
            'form' => $form->createView(),
        ));
    }


    /**
     * Finds and displays a TvShow entity.
     *
     */
    public function showAction(TvShow $TvShow)
    {
        $deleteForm = $this->createDeleteForm($TvShow);

        return $this->render('TvShow/show.html.twig', array(
            'TvShow' => $TvShow,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TvShow entity.
     *
     */
    public function editAction(Request $request, TvShow $TvShow)
    {
        $deleteForm = $this->createDeleteForm($TvShow);
        $editForm = $this->createForm('TvShow\ManagerBundle\Form\TvShowType', $TvShow);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('TvShow_edit', array('id' => $TvShow->getId()));
        }

        return $this->render('TvShow/edit.html.twig', array(
            'TvShow' => $TvShow,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TvShow entity.
     *
     */
    public function deleteAction(Request $request, TvShow $TvShow)
    {
        $form = $this->createDeleteForm($TvShow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($TvShow);
            $em->flush();
        }

        return $this->redirectToRoute('TvShow_index');
    }

    /**
     * Creates a form to delete a TvShow entity.
     *
     * @param TvShow $TvShow The TvShow entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TvShow $TvShow)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('TvShow_delete', array('id' => $TvShow->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }


}