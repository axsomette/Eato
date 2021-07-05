<?php

namespace App\Repository;

use App\Entity\Restaurateurs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Restaurateurs|null find($id, $lockMode = null, $lockVersion = null)
 * @method Restaurateurs|null findOneBy(array $criteria, array $orderBy = null)
 * @method Restaurateurs[]    findAll()
 * @method Restaurateurs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RestaurateursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Restaurateurs::class);
    }

    // /**
    //  * @return Restaurateurs[] Returns an array of Restaurateurs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Restaurateurs
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
