<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 19/05/17
 * Time: 10:59
 */

namespace TvShowManagerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use TvShowManagerBundle\Entity\TvShow;
use Symfony\Component\HttpFoundation\Request;

class TvShowController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/tvshow", name="tvshow")
     */
    public function tvShowAction()
    {
        $em = $this->getDoctrine()->getManager();
        $series = $em->getRepository('TvShowManagerBundle:TvShow')
            ->findAll();
        return $this->render('TvShowManagerBundle:TvShow:tvshow.html.twig', ['series'=>$series]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/addTvShow")
     */
    public function addShowAction(Request $request)
    {
        $tvshow = new TvShow();
        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType', $tvshow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             $em = $this->getDoctrine()->getManager();
             $em->persist($tvshow);
             $em->flush();
            return $this->redirectToRoute('tvshow');
        }
        return $this->render('TvShowManagerBundle:TvShow:addTvShow.html.twig', ['form'=>$form->createView()]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/editTvShow")
     */
    public function addShowAction(Request $request)
    {
        $tvshow = new TvShow();
        $form = $this->createForm('TvShowManagerBundle\Form\TvShowType', $tvshow);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvshow);
            $em->flush();
            return $this->redirectToRoute('tvshow');
        }
        return $this->render('TvShowManagerBundle:TvShow:addTvShow.html.twig', ['form'=>$form->createView()]);
    }
}