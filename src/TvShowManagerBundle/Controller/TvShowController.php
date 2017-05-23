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
use TvShowManagerBundle\Entity\TvShow;
use TvShowManagerBundle\Form\TvShowType;

/**
 * @Route("/tvshow")
 */
class TvShowController extends Controller
{
    /**
     * @Route("/list", name="list_tvshow")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tvShows = $em->getRepository(TvShow::class)->findAll();

        return $this->render(':tvShow:list.html.twig', [
            'tvShows' => $tvShows,
        ]);
    }

    /**
     * @Route("/show/{id}", name="show_tvshow")
     */
    public function showAction(TvShow $tvShow)
    {
//        $em = $this->getDoctrine()->getManager();
//        $tvShow = $em->getRepository(TvShow::class)->find($id);

        return $this->render(':tvShow:show.html.twig', [
            'tvShow' => $tvShow,
        ]);
    }

    /**
     * @Route("/add", name="add_tvshow")
     */
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $tvShow = new TvShow;
        $form = $this->createForm(TvShowType::class, $tvShow);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($tvShow);
            $em->flush();
            return $this->redirectToRoute('list_tvshow');
        }

        return $this->render(':tvShow:add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/edit/{id}", name="edit_tvshow")
     */
    public function editAction(TvShow $tvShow, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(TvShowType::class, $tvShow);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('edit_tvshow', ['id'=>$tvShow->getId()]);
        }

        return $this->render(':tvShow:edit.html.twig', [
            'form' => $form->createView(),
            'tvShow' => $tvShow,
        ]);
    }

    /**
     * @Route("/delete/{id}", name="delete_tvshow")
     * @Method("POST")
     */
    public function deleteAction(TvShow $tvShow)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($tvShow);
        $em->flush();

        return $this->redirectToRoute('list_tvshow');
    }

}
