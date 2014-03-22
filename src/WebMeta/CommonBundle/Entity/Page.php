<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebMeta\CommonBundle\Entity\PageRepository")
 */
class Page {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom_lien", type="string", length=255)
     */
    private $nom_lien;

    /**
     * @var string
     *
     * @ORM\Column(name="url_alias", type="string", length=255)
     */
    private $url_alias;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_categorie", type="string", length=255)
     */
    private $nom_categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=5000)
     */
    private $contenu;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="date_publication", type="datetime")
     */
    private $date_publication;

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
     * @return Page
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
     * Set nom_lien
     *
     * @param string $nom_lien
     * @return Page
     */
    public function setNomLien($nom_lien) {
        $this->nom_lien = $nom_lien;

        return $this;
    }

    /**
     * Get nom_lien
     *
     * @return string 
     */
    public function getNomLien() {
        return $this->nom_lien;
    }
    

    /**
     * Set url_alias
     *
     * @param string $urlAlias
     * @return Page
     */
    public function setUrlAlias($urlAlias) {
        $this->url_alias = $urlAlias;

        return $this;
    }

    /**
     * Get url_alias
     *
     * @return string 
     */
    public function getUrlAlias() {
        return $this->url_alias;
    }

    /**
     * Set nom_categorie
     *
     * @param string $nomCategorie
     * @return Page
     */
    public function setNomCategorie($nomCategorie) {
        $this->nom_categorie = $nomCategorie;

        return $this;
    }

    /**
     * Get nomCategorie
     *
     * @return string 
     */
    public function getNomCategorie() {
        return $this->nom_categorie;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Page
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
     * Set date_publication
     *
     * @param date $date_publication
     * @return Page
     */
    public function setDatePublication($date_publication) {
        $this->date_publication = $date_publication;

        return $this;
    }

    /**
     * Get date_publication
     *
     * @return date
     */
    public function getDatePublication() {
        return $this->date_publication;
    }

}
