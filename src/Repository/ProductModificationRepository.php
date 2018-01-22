<?php

namespace App\Repository;

use App\Entity\ProductModification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ProductModificationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProductModification::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('p')
            ->where('p.something = :value')->setParameter('value', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
