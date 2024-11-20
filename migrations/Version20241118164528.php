<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241118164528 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE intervenant (id INT AUTO_INCREMENT NOT NULL, membre_id INT DEFAULT NULL, reunion_id INT DEFAULT NULL, dahira_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, INDEX IDX_73D0145C6A99F74A (membre_id), INDEX IDX_73D0145C4E9B7368 (reunion_id), INDEX IDX_73D0145CF5ED07D8 (dahira_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE intervenant ADD CONSTRAINT FK_73D0145C6A99F74A FOREIGN KEY (membre_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE intervenant ADD CONSTRAINT FK_73D0145C4E9B7368 FOREIGN KEY (reunion_id) REFERENCES reunion (id)');
        $this->addSql('ALTER TABLE intervenant ADD CONSTRAINT FK_73D0145CF5ED07D8 FOREIGN KEY (dahira_id) REFERENCES dahiras (id)');
        $this->addSql('DROP TABLE tester_crud');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tester_crud (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE intervenant DROP FOREIGN KEY FK_73D0145C6A99F74A');
        $this->addSql('ALTER TABLE intervenant DROP FOREIGN KEY FK_73D0145C4E9B7368');
        $this->addSql('ALTER TABLE intervenant DROP FOREIGN KEY FK_73D0145CF5ED07D8');
        $this->addSql('DROP TABLE intervenant');
    }
}
