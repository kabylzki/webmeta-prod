<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebMeta\CommonBundle\Entity\InvitationRepository")
 */
class Invitation
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
     * @ORM\Column(name="idCreateur", type="integer")
     */
    private $idCreateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="idInvite", type="integer")
     */
    private $idInvite;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTournoi", type="integer")
     */
    private $idTournoi;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;


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
     * Set idCreateur
     *
     * @param integer $idCreateur
     * @return Invitation
     */
    public function setIdCreateur($idCreateur)
    {
        $this->idCreateur = $idCreateur;

        return $this;
    }

    /**
     * Get idCreateur
     *
     * @return integer 
     */
    public function getIdCreateur()
    {
        return $this->idCreateur;
    }

    /**
     * Set idInvite
     *
     * @param integer $idInvite
     * @return Invitation
     */
    public function setIdInvite($idInvite)
    {
        $this->idInvite = $idInvite;

        return $this;
    }

    /**
     * Get idInvite
     *
     * @return integer 
     */
    public function getIdInvite()
    {
        return $this->idInvite;
    }

    /**
     * Set idTournoi
     *
     * @param integer $idTournoi
     * @return Invitation
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
     * Set statut
     *
     * @param string $statut
     * @return Invitation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
