<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211014134406 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE conference ADD CONSTRAINT conference_slug_key UNIQUE (slug)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE conference DROP CONSTRAINT conference_slug_key');
    }
}
