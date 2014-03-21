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
     * @var integer
     *
     * @ORM\Column(name="id_categorie", type="integer", length=11)
     */
    private $id_categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=5000)
     */
    private $contenu;

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
     * Set id_categorie
     *
     * @param integer $idCategorie
     * @return Page
     */
    public function setIdCategorie($idCategorie) {
        $this->id_categorie = $idCategorie;

        return $this;
    }

    /**
     * Get id_categorie
     *
     * @return integer 
     */
    public function getIdCategorie() {
        return $this->id_categorie;
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

}
