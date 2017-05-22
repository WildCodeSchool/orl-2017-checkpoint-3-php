<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 22/05/17
 * Time: 14:49
 */

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use TvShowManagerBundle\Entity\TvShow;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TvShowController extends DefaultController
{
    /**
     * @Route("/tvshow")
     */
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')
            ->findAll();
        return $this->render('TvShowManagerBundle:Default:list.html.twig', ['tvshows' => $tvshow]);
    }

//    /**
//     * @Route("tvshow/deleteshow/{idtvshow}")
//     */
//    public function deleteAction($idtvshow)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $tvshow = $em->getRepository('TvShowManagerBundle:TvShow')->find($idtvshow);
//        $em->remove($tvshow);
//        $em->flush();
//        return $this->render('TvShowManagerBundle:Default:list.html.twig', ['tvshow' => $tvshow]);
//    }
//
//}

    /**
     * @Route("/add")
     */
    public function addAction(Request $request)
    {
        $tvshow = new TvShow();
        $form = $this->createFormBuilder($tvshow)
            ->add('name', TextType::class)
            ->add('type', TextType::class)
            ->add('url', TextType::class)
            ->add('year', TextType::class)
            ->add('Save', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvshow);
            $em->flush();
            return $this->render('TvShowManagerBundle:Default:list.html.twig', ['tvshows' => $tvshow]);
        }

        return $this->render('TvShowManagerBundle:Default:add.html.twig', array('form' => $form->createView(),
        ));
    }
}