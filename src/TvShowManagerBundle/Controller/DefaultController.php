<?php

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TvShowManagerBundle\Entity\Episode;
use TvShowManagerBundle\Entity\TvShow;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use TvShowManagerBundle\Form\TvShowType;

class DefaultController extends Controller
{
    /**
     * @Route("/tvshow")
     */
    public function tvshowAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $show = new TvShow();
        $formBuilder = $this->createFormBuilder($show);

        $formBuilder
            ->add('name',         TextType::class)
            ->add('type',    TextType::class)
            ->add('url',         TextType::class)
            ->add('year',         IntegerType::class)
            ->add('add',         SubmitType::class)
        ;

        $form = $formBuilder->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($show);
            $em->flush();

        }


        return $this->render('TvShowManagerBundle:Default:tvshow.html.twig', array('form' => $form->createView(),));

    }

    /**
     * @Route("/episode")
     */
    public function episodeAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $episode = new Episode();
        $formBuilder = $this->createFormBuilder($episode);

        $formBuilder
            ->add('name',         TextType::class)
            ->add('season',    IntegerType::class)
            ->add('number',         IntegerType::class)
            ->add('note',         IntegerType::class)
            ->add('Tvshow',         TvShowType::class)
            ->add('add',         SubmitType::class)
        ;

        $form = $formBuilder->getForm();

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($episode);
            $em->flush();

        }

        return $this->render('TvShowManagerBundle:Default:episode.html.twig', array('form' => $form->createView(),));

    }

    /**
     * @Route("/note")
     */
    public function noteAction()
    {

        return $this->render('TvShowManagerBundle:Default:note.html.twig');

    }
}
