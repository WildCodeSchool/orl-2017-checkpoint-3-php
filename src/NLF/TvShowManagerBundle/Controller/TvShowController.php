<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 19/05/17
 * Time: 10:34
 */

namespace NLF\TvShowManagerBundle\Controller;


use NLF\TvShowManagerBundle\Entity\TvShow;
use NLF\TvShowManagerBundle\Form\TvShowType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TvShowController extends Controller
{
    public function addAction(Request $req, TvShow $editTvShow = null)
    {
        $tvshow = new TvShow();
        if ($editTvShow !== null) {
            $formTv = $this->createForm(TvShowType::class, $editTvShow);
            $formTv->handleRequest($req);
            if ($formTv->isSubmitted() && $formTv->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($editTvShow);
                $em->flush();
                $formTv = $this->createForm(TvShowType::class, $tvshow);
            }
        } else {
            $formTv = $this->createForm(TvShowType::class, $tvshow);
            $formTv->handleRequest($req);
            if ($formTv->isSubmitted() && $formTv->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($tvshow);
                $em->flush();
            }
        }

        return $this->render('NLFTvShowManagerBundle:Default:addTvShow.html.twig', array(
            'formtv' => $formTv->createView(),
            'alltvshow' => $this->showAllAction()
        ));
    }

    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();

        $allTv = $em->getRepository('NLFTvShowManagerBundle:TvShow')->findAll();
        return $allTv;
    }

    public function deleteAction(TvShow $tvShow)
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($tvShow);
        $em->flush();
        return $this->redirectToRoute('nlf_tv_show_manager_add_tvshow');
    }
}