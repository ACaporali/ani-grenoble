<?php

namespace AniGrenoble\AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends EntityRepository
{
  public function getCategorie($categorie){
		$qb = $this->createQueryBuilder('cat');

    $qb->where('cat.nom = :catName')
		->setParameter('catName', $categorie);

		return $qb;
	}
}