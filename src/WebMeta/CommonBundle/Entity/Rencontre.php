<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rencontre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebMeta\CommonBundle\Entity\RencontreRepository")
 */
class Rencontre
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
     * @ORM\Column(name="idequipe1", type="integer")
     */
    private $idequipe1;

    /**
     * @var integer
     *
     * @ORM\Column(name="idequipe2", type="integer")
     */
    private $idequipe2;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTournoi", type="integer")
     */
    private $idTournoi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="phase",type="string", length=255)
     */
    private $phase;

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
     * Set idequipe1
     *
     * @param integer $idequipe1
     * @return Rencontre
     */
    public function setIdequipe1($idequipe1)
    {
        $this->idequipe1 = $idequipe1;

        return $this;
    }

    /**
     * Get idequipe1
     *
     * @return integer 
     */
    public function getIdequipe1()
    {
        return $this->idequipe1;
    }

    /**
     * Set idequipe2
     *
     * @param integer $idequipe2
     * @return Rencontre
     */
    public function setIdequipe2($idequipe2)
    {
        $this->idequipe2 = $idequipe2;

        return $this;
    }

    /**
     * Get idequipe2
     *
     * @return integer 
     */
    public function getIdequipe2()
    {
        return $this->idequipe2;
    }

    /**
     * Set idTournoi
     *
     * @param integer $idTournoi
     * @return Rencontre
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
     * Set date
     *
     * @param \DateTime $date
     * @return Rencontre
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set phase
     *
     * @param string $phase
     * @return Rencontre
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * Get phase
     *
     * @return string
     */
    public function getPhase()
    {
        return $this->phase;
    }
}
