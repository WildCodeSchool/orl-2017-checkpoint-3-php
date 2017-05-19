<?php
namespace QR\TvShowManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NoteController extends Controller
{
    private function getTvShows()
    {
        $em = $this->getDoctrine()->getManager();
        $tvShows = $em->getRepository('QRTvShowManagerBundle:TvShow')->findAll();
        foreach ($tvShows as $tvShow){
            $totalNotes = 0;
            foreach ($tvShow->getEpisodes() as $episode){
                $totalNotes += $episode->getNote();
            }
            $tvShow->note = $totalNotes/count($tvShow->getEpisodes());
        }
        usort($tvShows, array($this, 'sortShows'));
        return $tvShows;
    }
    private function sortShows($a, $b)
    {
        return strcmp($b->note, $a->note);
    }
    public function readAction()
    {
        $tvShows = $this->getTvShows();
        return $this->render('QRTvShowManagerBundle:Note:read.html.twig', ['tvShows' => $tvShows]);
    }

}