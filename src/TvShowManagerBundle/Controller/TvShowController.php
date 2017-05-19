<?php
/**
 * Created by PhpStorm.
 * User: wilder10
 * Date: 19/05/17
 * Time: 10:22
 */

namespace TvShowManagerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TvShowManagerBundle\Entity\TvShow;
use TvShowManagerBundle\Form\TvShowType;


/**
 * @Route("/tvshow")
 */

class TvShowController extends Controller
{
    /**
     * @Route("/", name="serie_list")
     * Affichage de la liste des series par ordre decroissant des dates
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $series = $em->getRepository('TvShowManagerBundle:TvShow')->findBy([],['year' => 'DESC']);
        $params = [
            'series' => $series,
        ];
        return $this->render('TvShowManagerBundle:TvShow:index.html.twig', $params);
    }

    /**
     * @route("/new", name="serie_new")
     * cree une nouvelle serie tv
     */
    public function newAction(Request $request)
    {
        $serie = new TvShow();
        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType', $serie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('serie_list');
        }

        $params = [
            'form' => $form->createView(),
        ];
        return $this->render('TvShowManagerBundle:TvShow:new.html.twig', $params);
    }

    /**
     * @route("/view/{id}", name="serie_view")
     * Affiche la fiche concernee
     */
    public function viewAction($id)
    {

    }

    /**
     * @route("/edit/{id}", name="serie_edit")
     * Edite la fiche concernee
     */
    public function editAction($id)
    {

    }

    /**
     * @route("/delete/{id}", name="serie_delete")
     * Supprime la fiche concernee
     */
    public function deleteAction($id)
    {

    }

}