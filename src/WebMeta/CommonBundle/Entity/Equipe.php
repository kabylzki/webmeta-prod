<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="WebMeta\CommonBundle\Entity\EquipeRepository")
 */
class Equipe
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique = true)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_compte", type="integer")
     */
    private $id_compte;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=255)
     */
    private $presentation;


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
     * Set nom
     *
     * @param string $nom
     * @return Equipe
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set id_compte
     *
     * @param integer $idCompte
     * @return Equipe
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
     * Set presentation
     *
     * @param string $presentation
     * @return Equipe
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
}
