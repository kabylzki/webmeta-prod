<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebMeta\CommonBundle\Entity\ResultatRepository")
 */
class Resultat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTournoi", type="integer")
     */
    private $idTournoi;

    /**
     * @var integer
     *
     * @ORM\Column(name="idGagnant", type="integer")
     */
    private $idGagnant;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTournoi
     *
     * @param integer $idTournoi
     * @return Resultat
     */
    public function setIdTournoi($idTournoi)
    {
        $this->idTournoi = $idTournoi;

        return $this;
    }

    /**
     * Get idTournoi
     *
     * @return integer 
     */
    public function getIdTournoi()
    {
        return $this->idTournoi;
    }

    /**
     * Set idGagnant
     *
     * @param integer $idGagnant
     * @return Resultat
     */
    public function setIdGagnant($idGagnant)
    {
        $this->idGagnant = $idGagnant;

        return $this;
    }

    /**
     * Get idGagnant
     *
     * @return integer 
     */
    public function getIdGagnant()
    {
        return $this->idGagnant;
    }
}
