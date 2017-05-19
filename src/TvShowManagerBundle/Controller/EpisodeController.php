<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 19/05/17
 * Time: 10:21
 */

namespace checkpoint\TvShowManagerBundle\Controller;

use TvShowManagerBundle\TvShowManagerBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use checkpoint\TvShowManagerBundle\Entity\Episode;



/**
 * Episode controller
 * @Route("/episodes")
 */
class EpisodeController extends Controller
{

    /**
     * Lists all episodes entities.
     *
     * @Route("/", name="EpisodeList")
     * @Method("GET")
     */
    public function indexAll()
    {
        $em = $this->getDoctrine()->getManager();

        $episodes = $em->getRepository(Episode::class)->findAll();

        return $this->render('index.html.twig', array(
            'episodes' => $episodes,
        ));
    }

    /**
     * @Route("/new", name="newEpisode")
     * @Method({"GET", "POST"})
     */

    public function newEpisode(Request $request)
    {
        $episode = new Episode();
        $form = $this->createForm('TvShowManagerBundle\Form\EpisodeType', $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();

            return $this->redirectToRoute('brandNewEpisode', array('id' => $episode->getId()));
        }

        return $this->render('new.html.twig', array(
            'episode' => $episode,
            'form' => $form->createView(),
        ));
    }
    /**
     * @Route("/{id}", name="brandNewEpisode")
     * @Method({"GET"})
     */
    public function showAction(Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);

        return $this->render('show.html.twig', array(
            'episode' => $episode,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     *
     * @Route("/{id}/edit", name="editEpisode")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);
        $editForm = $this->createForm('TvShowManagerBundle\Form\EpisodeType', $episode);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('EpisodeList', array('id' => $episode->getId()));
        }

        return $this->render('edit.html.twig', array(
            'episode' => $episode,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     *
     * @Route("/{id}", name="deleteEpisode")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Episode $episode)
    {
        $form = $this->createDeleteForm($episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($episode);
            $em->flush();
        }

        return $this->redirectToRoute('EpisodeList');
    }

    /**
     *
     * @param Episode $episode
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Episode $episode)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deletesEpisode', array('id' => $episode->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}