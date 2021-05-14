<?php

namespace App\Repository;

use App\Entity\ArticleWiki;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArticleWiki|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleWiki|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleWiki[]    findAll()
 * @method ArticleWiki[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleWikiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleWiki::class);
    }

    // /**
    //  * @return ArticleWiki[] Returns an array of ArticleWiki objects
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
    public function findOneBySomeField($value): ?ArticleWiki
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
