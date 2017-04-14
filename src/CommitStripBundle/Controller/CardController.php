<?php

namespace CommitStripBundle\Controller;

use CommitStripBundle\Entity\Card;
use CommitStripBundle\Entity\Story;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CardController extends Controller
{
    /**
     * @Route("/story/{id}", name="story")
     */
    public function indexAction(Card $card)
    {
        $em = $this->getDoctrine()->getManager();
        $card = $em->getRepository('CommitStripBundle:Card')->findOneBy(['story'=> $card->getStory()->getId(), 'nbcard'=>$card->getNbcard()]);

        $prevCard = $em->getRepository('CommitStripBundle:Card')->findOneBy(['story'=> $card->getStory()->getId(), 'nbcard'=>$card->getNbcard()-1]);
        $nextCard = $em->getRepository('CommitStripBundle:Card')->findOneBy(['story'=> $card->getStory()->getId(), 'nbcard'=>$card->getNbcard()+1]);

        $stories  = $em->getRepository('CommitStripBundle:Story')->findAll();
        return $this->render('CommitStripBundle:Default:index.html.twig', ['stories'=>$stories, 'card'=> $card, 'prevCard'=>$prevCard, 'nextCard'=>$nextCard]);
    }

    /**
     * @Route("/story-card/{id}", name="storyName")
     */
    public function storyAction(Story $story)
    {
        $em = $this->getDoctrine()->getManager();

        $card = $em->getRepository('CommitStripBundle:Card')->findOneBy(['story'=> $story->getId(), 'nbcard'=>1]);

        return $this->redirectToRoute('story', ['id'=>$card->getId()]);
    }


}
