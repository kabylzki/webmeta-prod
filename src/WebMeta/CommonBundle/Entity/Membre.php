<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebMeta\CommonBundle\Entity\MembreRepository")
 */
class Membre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="id_equipe", type="integer")
     */
    private $id_equipe;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_recrutement", type="datetime")
     */
    private $date_recrutement;   
    
    /**
     * Set id
     * @param integer $id
     * @return Membre 
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }
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
     * Set status
     *
     * @param string $status
     * @return Membre
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set id_equipe
     *
     * @param integer $idEquipe
     * @return Membre
     */
    public function setIdEquipe($idEquipe)
    {
        $this->id_equipe = $idEquipe;

        return $this;
    }

    /**
     * Get id_equipe
     *
     * @return integer 
     */
    public function getIdEquipe()
    {
        return $this->id_equipe;
    }
    
    /**
     * Set date_recrutement
     *
     * @param date $date_recrutement
     * @return Membre
     */
    public function setDateRecrutement($date_recrutement) {
        $this->date_recrutement = $date_recrutement;

        return $this;
    }

    /**
     * Get date_recrutement
     *
     * @return timestamp 
     */
    public function getDateRecrutement() {
        return $this->date_recrutement;
    }
}
