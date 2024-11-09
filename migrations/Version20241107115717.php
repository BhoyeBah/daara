<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241107115717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE presence ADD dahiras_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE presence ADD CONSTRAINT FK_6977C7A56F8C0AC4 FOREIGN KEY (dahiras_id) REFERENCES dahiras (id)');
        $this->addSql('CREATE INDEX IDX_6977C7A56F8C0AC4 ON presence (dahiras_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE presence DROP FOREIGN KEY FK_6977C7A56F8C0AC4');
        $this->addSql('DROP INDEX IDX_6977C7A56F8C0AC4 ON presence');
        $this->addSql('ALTER TABLE presence DROP dahiras_id');
    }
}
