<?php
/**
 * Created by PhpStorm.
 * User: malik
 * Date: 19/05/17
 * Time: 10:45
 */

namespace TvShowManagerBundle\Controller;


use TvShowManagerBundle\Entity\Episode;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EpisodeController extends Controller
{
    /**
     * Lists all episodes.
     *
     * @Route("/episode")
     */
    public function ListEpisodeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $episodes = $em->getRepository('TvShowManagerBundle:Episode')->findAll();

        return $this->render('TvShowManagerBundle:Default:episode.html.twig', array(
            'episodes' => $episodes,
        ));
    }

    /**
     * @Route("/showepisode/{id}")
     */
    public function showEpisodeAction(Episode $episode)
    {
        $em = $this->getDoctrine()->getManager();

        return $this->render('TvShowManagerBundle:Episode:showepisode.html.twig', ['episode' => $episode]);
    }

    public function addAction()
    {
        $artiste = new Episode();    // On crée un objet

        $formBuilder = $this->createFormBuilder($artiste); // On crée le FormBuilder
        $formBuilder
            ->add('name',         TextType::class)
            ->add('season',       TextType::class)
            ->add('number',       TextType::class)
            ->add('note',               TextType::class)
            ->add('save',         SubmitType::class)
        ;

// À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

// createView() permet à la vue d’afficher le formulaire
        return $this->render('WCSFormBundle:Default:addepisode.html.twig', array(
            'form' => $form->createView(),
        ));
    }




}