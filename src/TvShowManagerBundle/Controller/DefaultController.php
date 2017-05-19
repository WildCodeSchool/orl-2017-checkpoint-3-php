<?php

namespace TvShowManagerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use TvShowManagerBundle\Entity\TvShow;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('TvShowManagerBundle:Default:index.html.twig');
    }

    /**
     * @Route("/tvshow")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $series = $em->getRepository('TvShowManagerBundle:TvShow')->findAll();
        $episodes = $em->getRepository('TvShowManagerBundle:Episode')->findAll();


        return $this->render('TvShowManagerBundle:Default:show.html.twig',['series'=>$series,
                                                                            'episodes'=>$episodes]);
    }

    /**
     * @Route("/ajoutserie")
     */
    public function createAction(Request $request)
    {
        $serie = new TvShow();
        $formBuilder = $this->createFormBuilder($serie);

        $formBuilder
            ->add('name',         TextType::class)
            ->add('type',         TextType::class)
            ->add('url',          TextType::class)
            ->add('year',         IntegerType::class)
            ->add('save',         SubmitType::class)
            ;

        $form = $formBuilder->getForm();

        // Hydrate notre objet avec la donnée du formulaire
        $form->handleRequest($request);

        // Si method POST et si le form est valid
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('TvShowManagerBundle:Default:ajout.html.twig', array('form' => $form->createView()));
    }
}
