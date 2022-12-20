<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221220192728 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message ALTER body DROP NOT NULL');
        $this->addSql('ALTER TABLE message ALTER created TYPE TIMESTAMP(0) USING created::timestamp(0) WITH TIME ZONE');
        $this->addSql('ALTER TABLE message ALTER created DROP DEFAULT');
        $this->addSql('ALTER TABLE message ALTER updated TYPE TIMESTAMP(0) USING updated::timestamp(0) WITH TIME ZONE');
        $this->addSql('ALTER TABLE message ALTER updated DROP DEFAULT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE message ALTER body SET NOT NULL');
        $this->addSql('ALTER TABLE message ALTER created TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE message ALTER created DROP DEFAULT');
        $this->addSql('ALTER TABLE message ALTER updated TYPE TIMESTAMP(0) WITHOUT TIME ZONE');
        $this->addSql('ALTER TABLE message ALTER updated DROP DEFAULT');
    }
}
