<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241109132542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE detail_reunion (id INT AUTO_INCREMENT NOT NULL, reunion_id INT DEFAULT NULL, membre_id INT DEFAULT NULL, present TINYINT(1) NOT NULL, INDEX IDX_3CCF24574E9B7368 (reunion_id), INDEX IDX_3CCF24576A99F74A (membre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reunion (id INT AUTO_INCREMENT NOT NULL, encadreur_id INT DEFAULT NULL, theme_id INT DEFAULT NULL, dahiras_id INT DEFAULT NULL, date DATETIME NOT NULL, lieu VARCHAR(255) NOT NULL, INDEX IDX_5B00A482A625A0FD (encadreur_id), INDEX IDX_5B00A48259027487 (theme_id), INDEX IDX_5B00A4826F8C0AC4 (dahiras_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE detail_reunion ADD CONSTRAINT FK_3CCF24574E9B7368 FOREIGN KEY (reunion_id) REFERENCES reunion (id)');
        $this->addSql('ALTER TABLE detail_reunion ADD CONSTRAINT FK_3CCF24576A99F74A FOREIGN KEY (membre_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE reunion ADD CONSTRAINT FK_5B00A482A625A0FD FOREIGN KEY (encadreur_id) REFERENCES encadreur (id)');
        $this->addSql('ALTER TABLE reunion ADD CONSTRAINT FK_5B00A48259027487 FOREIGN KEY (theme_id) REFERENCES themes (id)');
        $this->addSql('ALTER TABLE reunion ADD CONSTRAINT FK_5B00A4826F8C0AC4 FOREIGN KEY (dahiras_id) REFERENCES dahiras (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail_reunion DROP FOREIGN KEY FK_3CCF24574E9B7368');
        $this->addSql('ALTER TABLE detail_reunion DROP FOREIGN KEY FK_3CCF24576A99F74A');
        $this->addSql('ALTER TABLE reunion DROP FOREIGN KEY FK_5B00A482A625A0FD');
        $this->addSql('ALTER TABLE reunion DROP FOREIGN KEY FK_5B00A48259027487');
        $this->addSql('ALTER TABLE reunion DROP FOREIGN KEY FK_5B00A4826F8C0AC4');
        $this->addSql('DROP TABLE detail_reunion');
        $this->addSql('DROP TABLE reunion');
    }
}
