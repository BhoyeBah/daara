<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241021184252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reunion (id INT AUTO_INCREMENT NOT NULL, themes_id INT DEFAULT NULL, encadreur_id INT DEFAULT NULL, dahiras_id INT DEFAULT NULL, date DATETIME NOT NULL, lieu VARCHAR(255) NOT NULL, sujet_abordes LONGTEXT NOT NULL, decision VARCHAR(255) NOT NULL, decisionprise LONGTEXT NOT NULL, INDEX IDX_5B00A48294F4A9D2 (themes_id), INDEX IDX_5B00A482A625A0FD (encadreur_id), INDEX IDX_5B00A4826F8C0AC4 (dahiras_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reunion ADD CONSTRAINT FK_5B00A48294F4A9D2 FOREIGN KEY (themes_id) REFERENCES themes (id)');
        $this->addSql('ALTER TABLE reunion ADD CONSTRAINT FK_5B00A482A625A0FD FOREIGN KEY (encadreur_id) REFERENCES encadreur (id)');
        $this->addSql('ALTER TABLE reunion ADD CONSTRAINT FK_5B00A4826F8C0AC4 FOREIGN KEY (dahiras_id) REFERENCES dahiras (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reunion DROP FOREIGN KEY FK_5B00A48294F4A9D2');
        $this->addSql('ALTER TABLE reunion DROP FOREIGN KEY FK_5B00A482A625A0FD');
        $this->addSql('ALTER TABLE reunion DROP FOREIGN KEY FK_5B00A4826F8C0AC4');
        $this->addSql('DROP TABLE reunion');
    }
}
