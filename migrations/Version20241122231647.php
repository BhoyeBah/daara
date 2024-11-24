<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241122231647 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reunion_membres (reunion_id INT NOT NULL, membres_id INT NOT NULL, INDEX IDX_C03B89E14E9B7368 (reunion_id), INDEX IDX_C03B89E171128C5C (membres_id), PRIMARY KEY(reunion_id, membres_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reunion_membres ADD CONSTRAINT FK_C03B89E14E9B7368 FOREIGN KEY (reunion_id) REFERENCES reunion (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reunion_membres ADD CONSTRAINT FK_C03B89E171128C5C FOREIGN KEY (membres_id) REFERENCES membres (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reunion_membres DROP FOREIGN KEY FK_C03B89E14E9B7368');
        $this->addSql('ALTER TABLE reunion_membres DROP FOREIGN KEY FK_C03B89E171128C5C');
        $this->addSql('DROP TABLE reunion_membres');
    }
}
