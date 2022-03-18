<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220318072905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mtg_set (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(25) NOT NULL, name VARCHAR(150) NOT NULL, release_date DATE NOT NULL, online_only TINYINT(1) DEFAULT NULL, created DATETIME NOT NULL, updated DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mtg_subtype (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, created DATETIME NOT NULL, updated DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mtg_supertype (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, created DATETIME NOT NULL, updated DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mtg_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, created DATETIME NOT NULL, updated DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE mtg_set');
        $this->addSql('DROP TABLE mtg_subtype');
        $this->addSql('DROP TABLE mtg_supertype');
        $this->addSql('DROP TABLE mtg_type');
    }
}
