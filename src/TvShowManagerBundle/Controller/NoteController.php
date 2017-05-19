<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 19/05/17
 * Time: 11:01
 */

namespace TvShowManagerBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class NoteController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/note")
     */
    public function noteAction()
    {
        return $this->render('TvShowManagerBundle:Note:note.html.twig');
    }
}