<?php

namespace App\Repository;

use App\Entity\ArticleMaleCiv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ArticleMaleCiv|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleMaleCiv|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleMaleCiv[]    findAll()
 * @method ArticleMaleCiv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleMaleCivRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleMaleCiv::class);
    }

       /**
     * @return ArticleMaleCiv[] Returns an array of ArticleMaleCiv objects
     */

    public function listAllArticleMale(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM article_male_civ 
            WHERE statut != "noArticleWikipedia"
            ORDER BY page ASC';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();
    }

    /**
     * @return ArticleMaleCiv[] Returns an array of ArticleMaleCiv objects
     */

    public function listArticleMaleCreate(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM article_male_civ 
            WHERE statut = "noArticleWikipedia"
            ORDER BY page ASC';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();
    }

    /**
     * @return ArticleMaleCiv[] Returns an array of ArticleMaleCiv objects
     */

    public function listArticleMaleImprove(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM article_male_civ 
            WHERE statut = "yesArticleWikipediaWithProblem"
            ORDER BY page ASC';

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();
    }

    // /**
    //  * @return ArticleMaleCiv[] Returns an array of ArticleMaleCiv objects
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
    public function findOneBySomeField($value): ?ArticleMaleCiv
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
