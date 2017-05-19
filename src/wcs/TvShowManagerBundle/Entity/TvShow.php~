<?php

namespace wcs\TvShowManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TvShow
 *
 * @ORM\Table(name="tv_show")
 * @ORM\Entity(repositoryClass="wcs\TvShowManagerBundle\Repository\TvShowRepository")
 */
class TvShow
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;
    // ...

    /**
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="category")
     */
    private $episode;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return TvShow
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return TvShow
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return TvShow
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return TvShow
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->episode = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add episode
     *
     * @param \wcs\TvShowManagerBundle\Entity\Episode $episode
     *
     * @return TvShow
     */
    public function addEpisode(\wcs\TvShowManagerBundle\Entity\Episode $episode)
    {
        $this->episode[] = $episode;

        return $this;
    }

    /**
     * Remove episode
     *
     * @param \wcs\TvShowManagerBundle\Entity\Episode $episode
     */
    public function removeEpisode(\wcs\TvShowManagerBundle\Entity\Episode $episode)
    {
        $this->episode->removeElement($episode);
    }

    /**
     * Get episode
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpisode()
    {
        return $this->episode;
    }
}
