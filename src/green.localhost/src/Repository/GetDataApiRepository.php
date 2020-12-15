<?php

namespace App\Repository;

use App\Entity\GetDataApi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GetDataApi|null find($id, $lockMode = null, $lockVersion = null)
 * @method GetDataApi|null findOneBy(array $criteria, array $orderBy = null)
 * @method GetDataApi[]    findAll()
 * @method GetDataApi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GetDataApiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GetDataApi::class);
    }

    // /**
    //  * @return GetDataApi[] Returns an array of GetDataApi objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GetDataApi
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
