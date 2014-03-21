<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PageRepository extends EntityRepository {
    
    /**
     * Récupère une liste de page selon une catégorie
     * @param int $unIdCategorie
     * @return array
     */
    public function findAllPageByCategorie($unIdCategorie = null) {
        
        if ($unIdCategorie != null) {
            return $this->getEntityManager()
                            ->createQuery(
                'SELECT p
                FROM WebMetaCommonBundle:Page p
                WHERE p.id_categorie = :id_cat')->setParameter('id_cat', $unIdCategorie)->getResult();
        } else {
            return $this->getEntityManager()
                            ->createQuery(
                'SELECT p
                FROM WebMetaCommonBundle:Page p')->getResult();
        }
                 
    }

}
