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
     * @var integer
     *
     * @ORM\Column(name="idPerdant", type="integer")
     */
    private $idPerdant;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRencontre", type="integer")
     */
    private $idRencontre;


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

    /**
     * Set idPerdant
     *
     * @param integer $idPerdant
     * @return Resultat
     */
    public function setIdPerdant($idPerdant)
    {
        $this->idPerdant = $idPerdant;

        return $this;
    }

    /**
     * Get idPerdant
     *
     * @return integer 
     */
    public function getIdPerdant()
    {
        return $this->idPerdant;
    }

    /**
     * Set idRencontre
     *
     * @param integer $idRencontre
     * @return Resultat
     */
    public function setIdRencontre($idRencontre)
    {
        $this->idRencontre = $idRencontre;

        return $this;
    }

    /**
     * Get idRencontre
     *
     * @return integer 
     */
    public function getIdRencontre()
    {
        return $this->idRencontre;
    }
}
