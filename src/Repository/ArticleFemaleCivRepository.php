<?php

namespace App\Repository;

use App\Entity\ArticleFemaleCiv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArticleFemaleCiv|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleFemaleCiv|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleFemaleCiv[]    findAll()
 * @method ArticleFemaleCiv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleFemaleCivRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleFemaleCiv::class);
    }

    // /**
    //  * @return ArticleFemaleCiv[] Returns an array of ArticleFemaleCiv objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ArticleFemaleCiv
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}