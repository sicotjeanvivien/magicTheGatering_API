<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220314071614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mtg_set_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, created DATETIME NOT NULL, updated DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mtg_set ADD mtg_set_type_id INT DEFAULT NULL, CHANGE updated updated DATETIME on update CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE mtg_set ADD CONSTRAINT FK_4697F5EB8E28CAB5 FOREIGN KEY (mtg_set_type_id) REFERENCES mtg_set_type (id)');
        $this->addSql('CREATE INDEX IDX_4697F5EB8E28CAB5 ON mtg_set (mtg_set_type_id)');
        $this->addSql('ALTER TABLE mtg_subtype CHANGE updated updated DATETIME on update CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE mtg_supertype CHANGE updated updated DATETIME on update CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE mtg_type CHANGE updated updated DATETIME on update CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mtg_set DROP FOREIGN KEY FK_4697F5EB8E28CAB5');
        $this->addSql('DROP TABLE mtg_set_type');
        $this->addSql('DROP INDEX IDX_4697F5EB8E28CAB5 ON mtg_set');
        $this->addSql('ALTER TABLE mtg_set DROP mtg_set_type_id, CHANGE updated updated DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE mtg_subtype CHANGE updated updated DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE mtg_supertype CHANGE updated updated DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE mtg_type CHANGE updated updated DATETIME DEFAULT NULL');
    }
}
