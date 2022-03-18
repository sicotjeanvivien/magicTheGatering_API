<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220314065104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mtg_subtype (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, created DATETIME NOT NULL, updated DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mtg_supertype (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, created DATETIME NOT NULL, updated DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mtg_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, created DATETIME NOT NULL, updated DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mtg_set CHANGE updated updated DATETIME on update CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE mtg_subtype');
        $this->addSql('DROP TABLE mtg_supertype');
        $this->addSql('DROP TABLE mtg_type');
        $this->addSql('ALTER TABLE mtg_set CHANGE updated updated DATETIME DEFAULT NULL');
    }
}
