<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241015235420 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE encadreur (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, dahiras_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_43B1C5B9A76ED395 (user_id), INDEX IDX_43B1C5B96F8C0AC4 (dahiras_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE encadreur ADD CONSTRAINT FK_43B1C5B9A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE encadreur ADD CONSTRAINT FK_43B1C5B96F8C0AC4 FOREIGN KEY (dahiras_id) REFERENCES dahiras (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE encadreur DROP FOREIGN KEY FK_43B1C5B9A76ED395');
        $this->addSql('ALTER TABLE encadreur DROP FOREIGN KEY FK_43B1C5B96F8C0AC4');
        $this->addSql('DROP TABLE encadreur');
    }
}
