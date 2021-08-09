<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210806135208 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX page ON article_female_civ');
        $this->addSql('DROP INDEX statut ON article_female_civ');
        $this->addSql('ALTER TABLE article_female_civ CHANGE page page VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX page ON article_male_civ');
        $this->addSql('DROP INDEX page ON article_wiki');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_female_civ CHANGE page page VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE UNIQUE INDEX page ON article_female_civ (page)');
        $this->addSql('CREATE INDEX statut ON article_female_civ (statut)');
        $this->addSql('CREATE UNIQUE INDEX page ON article_male_civ (page)');
        $this->addSql('CREATE UNIQUE INDEX page ON article_wiki (page)');
    }
}
