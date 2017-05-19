<?php
/**
 * Created by PhpStorm.
 * User: HaGii
 * Date: 19/05/2017
 * Time: 10:32
 */

namespace TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TvShowManagerBundle\Entity\TvShow;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TvShowController extends Controller
{

    /**
     * @Route("/tvshow")
     */
    public function listAllAction()
    {
        $em =$this->getDoctrine()->getManager();
        $series = $em->getRepository('TvShowManagerBundle:TvShow')->findAll();
        return $this->render('TvShowManagerBundle:Default:index.html.twig', array('series'=>$series));
    }

    /**
     * @Route("/tvshow/{id}", name ="tvShowList")
     */
    public function showTvAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $serie = $em->getRepository('TvShowManagerBundle:TvShow')->find($id);
        return $this->render('TvShowManagerBundle:Default:tvshow.html.twig', array ('serie'=>$serie));
    }

    /**
     * @Route("/tvshow/add")
     */
    public function addTvShowAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $serie = new TvShow();
        $form = $this->createForm(TvShowType::class, $serie);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serie);
            $em->flush();


            return $this->redirectToRoute('/tvshow', array('id'=>$serie->getid()));
        }
        return $this->render('TvShowManagerBundle:admin:addTvShow.html.twig', array(
            'form' => $form->createView()
        ));
    }

}