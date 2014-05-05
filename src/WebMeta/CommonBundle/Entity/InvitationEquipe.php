<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvitationEquipe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebMeta\CommonBundle\Entity\InvitationEquipeRepository")
 */
class InvitationEquipe
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
     * @ORM\Column(name="id_equipe", type="integer")
     */
    private $id_equipe;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_compte", type="integer")
     */
    private $id_compte;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="demandeur", type="string", length=255)
     */
    private $demandeur;


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
     * Set id_equipe
     *
     * @param integer $idEquipe
     * @return Invitation_Equipe
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
     * Set id_compte
     *
     * @param integer $idCompte
     * @return Invitation_Equipe
     */
    public function setIdCompte($idCompte)
    {
        $this->id_compte = $idCompte;

        return $this;
    }

    /**
     * Get id_compte
     *
     * @return integer 
     */
    public function getIdCompte()
    {
        return $this->id_compte;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Invitation_Equipe
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

    /**
     * Set demandeur
     *
     * @param string $demandeur
     * @return Invitation_Equipe
     */
    public function setDemandeur($demandeur)
    {
        $this->demandeur = $demandeur;

        return $this;
    }

    /**
     * Get demandeur
     *
     * @return string 
     */
    public function getDemandeur()
    {
        return $this->demandeur;
    }
}
