<?php
/*
namespace SubjectBundle\DataFixtures\ORM;

use CommitStripBundle\Entity\Card;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCardData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $stories = array(
            array(
                "picture" => "http://wcs-fontainebleau.fr/preprod/checkpoint/chapter_1.png",
                "nbcard" => 1
            ),
            array(
                "picture" => "http://wcs-fontainebleau.fr/preprod/checkpoint/chapter_2.png",
                "nbcard" => 2
            ),
            array(
                "picture" => "http://wcs-fontainebleau.fr/preprod/checkpoint/chapter_3.png",
                "nbcard" => 3
            ),
            array(
                "picture" => "http://wcs-fontainebleau.fr/preprod/checkpoint/chapter_4.png",
                "nbcard" => 4
            ),
        );

        foreach ($stories as $story){
            $card = new Card();
            $card->setPicture($story['picture']);
            $card->setNbpage($story['nbcard']);
            $manager->persist($card);
        }
        $manager->flush();
    }
}
*/