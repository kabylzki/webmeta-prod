<?php

namespace WebMeta\CommonBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * MembreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MembreRepository extends EntityRepository
{
    
        /**
     * Récupère une liste de membre d'une équipe
     * @param int $idEquipe id de l'équipe
     * @return array
     */
    public function findAllMembreEquipe($id_equipe) {
        
        return $this->getEntityManager()
                        ->createQuery(
            'SELECT c
            FROM WebMetaCommonBundle:Membre m, WebMetaCommonBundle:Compte c
            WHERE m.id = c.id
            AND m.id_equipe = :idEquipe
            ORDER BY c.pseudo ASC')->setParameter('idEquipe', $id_equipe)->getResult();
                 
    }

}