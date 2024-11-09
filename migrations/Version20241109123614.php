<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241109123614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE presence DROP FOREIGN KEY FK_6977C7A56F8C0AC4');
        $this->addSql('ALTER TABLE presence DROP FOREIGN KEY FK_6977C7A571128C5C');
        $this->addSql('ALTER TABLE presence DROP FOREIGN KEY FK_6977C7A54E9B7368');
        $this->addSql('ALTER TABLE reunion DROP FOREIGN KEY FK_5B00A4826F8C0AC4');
        $this->addSql('ALTER TABLE reunion DROP FOREIGN KEY FK_5B00A48294F4A9D2');
        $this->addSql('ALTER TABLE reunion DROP FOREIGN KEY FK_5B00A482A625A0FD');
        $this->addSql('DROP TABLE presence');
        $this->addSql('DROP TABLE reunion');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE presence (id INT AUTO_INCREMENT NOT NULL, reunion_id INT DEFAULT NULL, membres_id INT DEFAULT NULL, dahiras_id INT DEFAULT NULL, status TINYINT(1) NOT NULL, INDEX IDX_6977C7A571128C5C (membres_id), INDEX IDX_6977C7A56F8C0AC4 (dahiras_id), INDEX IDX_6977C7A54E9B7368 (reunion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reunion (id INT AUTO_INCREMENT NOT NULL, themes_id INT DEFAULT NULL, encadreur_id INT DEFAULT NULL, dahiras_id INT DEFAULT NULL, date DATETIME NOT NULL, lieu VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, sujet_abordes LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, decisionprise LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_5B00A4826F8C0AC4 (dahiras_id), INDEX IDX_5B00A48294F4A9D2 (themes_id), INDEX IDX_5B00A482A625A0FD (encadreur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE presence ADD CONSTRAINT FK_6977C7A56F8C0AC4 FOREIGN KEY (dahiras_id) REFERENCES dahiras (id)');
        $this->addSql('ALTER TABLE presence ADD CONSTRAINT FK_6977C7A571128C5C FOREIGN KEY (membres_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE presence ADD CONSTRAINT FK_6977C7A54E9B7368 FOREIGN KEY (reunion_id) REFERENCES reunion (id)');
        $this->addSql('ALTER TABLE reunion ADD CONSTRAINT FK_5B00A4826F8C0AC4 FOREIGN KEY (dahiras_id) REFERENCES dahiras (id)');
        $this->addSql('ALTER TABLE reunion ADD CONSTRAINT FK_5B00A48294F4A9D2 FOREIGN KEY (themes_id) REFERENCES themes (id)');
        $this->addSql('ALTER TABLE reunion ADD CONSTRAINT FK_5B00A482A625A0FD FOREIGN KEY (encadreur_id) REFERENCES encadreur (id)');
    }
}
