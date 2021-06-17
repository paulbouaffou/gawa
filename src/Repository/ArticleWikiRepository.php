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
    /**
     * @return ArticleWiki[]
     */
    public function findArticleByNumber(int $nombre): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM article_wiki 
            WHERE id <= :nombre
            ';

        $stmt = $conn->prepare($sql);
        $stmt->execute(['nombre' => $nombre]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();
    }

    /**
     * @return ArticleWiki[]
     */
    public function findArticleByLetter($letter): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM article_wiki 
            WHERE name LIKE :letter
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['letter' => $letter.'%']);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAllAssociative();
    }
}
