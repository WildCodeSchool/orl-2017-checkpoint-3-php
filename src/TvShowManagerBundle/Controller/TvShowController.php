<?php
/**
 * Created by PhpStorm.
 * User: francois
 * Date: 19/05/2017
 * Time: 11:19
 */

namespace TvShowManagerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\Request;
use TvShowManagerBundle\Entity\TvShow;

class TvShowController extends Controller
{
    /**
     * Lists tous les épisodes.
     *
     * @Route("/tvshow")
     * @Method("GET")
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')->findAll();

        return $this->render('TvShowManagerBundle:Default:tvshow.html.twig', array(
            'tvshows' => $tvshow,
        ));
    }



    /**
     * Creates a new TvShow.
     *
     * @Route("/new")
     * @Method({"GET", "POST"})
     */
    public function addAction()
    {

        $tvshow = new TvShow();    // On crée un objet TvShow

        $formBuilder = $this->createFormBuilder($tvshow); // On crée le FormBuilder

        // On ajoute les champs de l'entité artiste que l'on veut à notre formulaire
        $formBuilder
            ->add('name',         TextType::class)
            ->add('type ',    TextType::class)
            ->add('url',      TextType::class)

        ;

         // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        // createView() permet à la vue d’afficher le formulaire
        return $this->render('TvShowManagerBundle:Default:addtvshow.html.twig', array(
            'form' => $form->createView(),
        ));
    }






}