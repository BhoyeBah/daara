<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241107115059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE presence (id INT AUTO_INCREMENT NOT NULL, reunion_id INT DEFAULT NULL, membres_id INT DEFAULT NULL, status TINYINT(1) NOT NULL, INDEX IDX_6977C7A54E9B7368 (reunion_id), INDEX IDX_6977C7A571128C5C (membres_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE presence ADD CONSTRAINT FK_6977C7A54E9B7368 FOREIGN KEY (reunion_id) REFERENCES reunion (id)');
        $this->addSql('ALTER TABLE presence ADD CONSTRAINT FK_6977C7A571128C5C FOREIGN KEY (membres_id) REFERENCES membres (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE presence DROP FOREIGN KEY FK_6977C7A54E9B7368');
        $this->addSql('ALTER TABLE presence DROP FOREIGN KEY FK_6977C7A571128C5C');
        $this->addSql('DROP TABLE presence');
    }
}
