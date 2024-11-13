<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241113000819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE presence (id INT AUTO_INCREMENT NOT NULL, membre_id INT DEFAULT NULL, reunion_id INT DEFAULT NULL, present TINYINT(1) NOT NULL, date DATETIME NOT NULL, INDEX IDX_6977C7A56A99F74A (membre_id), INDEX IDX_6977C7A54E9B7368 (reunion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE presence ADD CONSTRAINT FK_6977C7A56A99F74A FOREIGN KEY (membre_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE presence ADD CONSTRAINT FK_6977C7A54E9B7368 FOREIGN KEY (reunion_id) REFERENCES reunion (id)');
        $this->addSql('ALTER TABLE detail_reunion DROP FOREIGN KEY FK_3CCF24574E9B7368');
        $this->addSql('ALTER TABLE detail_reunion DROP FOREIGN KEY FK_3CCF24576A99F74A');
        $this->addSql('DROP TABLE detail_reunion');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE detail_reunion (id INT AUTO_INCREMENT NOT NULL, reunion_id INT DEFAULT NULL, membre_id INT DEFAULT NULL, present TINYINT(1) NOT NULL, INDEX IDX_3CCF24574E9B7368 (reunion_id), INDEX IDX_3CCF24576A99F74A (membre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE detail_reunion ADD CONSTRAINT FK_3CCF24574E9B7368 FOREIGN KEY (reunion_id) REFERENCES reunion (id)');
        $this->addSql('ALTER TABLE detail_reunion ADD CONSTRAINT FK_3CCF24576A99F74A FOREIGN KEY (membre_id) REFERENCES membres (id)');
        $this->addSql('ALTER TABLE presence DROP FOREIGN KEY FK_6977C7A56A99F74A');
        $this->addSql('ALTER TABLE presence DROP FOREIGN KEY FK_6977C7A54E9B7368');
        $this->addSql('DROP TABLE presence');
    }
}
