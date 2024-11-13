<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241112232430 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail_reunion DROP sujet_abordes, DROP decisionsprises');
        $this->addSql('ALTER TABLE reunion ADD sujetaborde LONGTEXT NOT NULL, ADD decisionprise LONGTEXT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detail_reunion ADD sujet_abordes LONGTEXT NOT NULL, ADD decisionsprises LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE reunion DROP sujetaborde, DROP decisionprise');
    }
}
