<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebMeta\CommonBundle\Entity\MessageRepository")
 */
class Message {

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
     * @ORM\Column(name="id_expediteur", type="integer")
     */
    private $id_expediteur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_receveur", type="integer")
     */
    private $id_receveur;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=2000)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expedition", type="datetime")
     */
    private $date_expedition;

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
    public function getId() {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Message
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set id_expediteur
     *
     * @param integer $id_expediteur
     * @return Message
     */
    public function setIdExpediteur($id_expediteur) {
        $this->id_expediteur = $id_expediteur;

        return $this;
    }

    /**
     * Get id_expediteur
     *
     * @return integer 
     */
    public function getIdExpediteur() {
        return $this->id_expediteur;
    }

    /**
     * Set id_receveur
     *
     * @param integer $idReceveur
     * @return Message
     */
    public function setIdReceveur($idReceveur) {
        $this->id_receveur = $idReceveur;

        return $this;
    }

    /**
     * Get id_receveur
     *
     * @return integer 
     */
    public function getIdReceveur() {
        return $this->id_receveur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Message
     */
    public function setContenu($contenu) {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu() {
        return $this->contenu;
    }

    /**
     * Set $date_expedition
     *
     * @param date $date_expedition
     * @return Compte
     */
    public function setDateExpedition($date_expedition) {
        $this->date_expedition = $date_expedition;

        return $this;
    }

    /**
     * Get date_expedition
     *
     * @return timestamp 
     */
    public function getDateExpedition() {
        return $this->date_expedition;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut() {
        return $this->statut;
    }

    /**
     * Set $statut
     *
     * @param string $statut
     * @return Message
     */
    public function setStatut($statut) {
        $this->statut = $statut;

        return $this;
    }
    
    
    

}
