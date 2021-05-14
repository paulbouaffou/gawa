<?php

namespace App\Entity;

use App\Repository\ArticleWikiRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleWikiRepository::class)
 */
class ArticleWiki
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $name;

    public function getId(): ?int
    {
        return $this->id;
    }
}
