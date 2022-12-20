<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221220191538 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message ALTER title DROP NOT NULL');
        $this->addSql('ALTER TABLE message ALTER "from" TYPE INT USING ("from"::integer)');
        $this->addSql('ALTER TABLE message ALTER "from" DROP DEFAULT');
        $this->addSql('ALTER TABLE message ALTER "to" TYPE INT USING ("to"::integer)');
        $this->addSql('ALTER TABLE message ALTER "to" DROP DEFAULT');
        $this->addSql('ALTER TABLE message ALTER created TYPE TIMESTAMP(0) USING created::timestamp(0) WITH TIME ZONE');
        $this->addSql('ALTER TABLE message ALTER created DROP DEFAULT');
        $this->addSql('ALTER TABLE message ALTER updated TYPE TIMESTAMP(0) USING updated::timestamp(0) WITH TIME ZONE');
        $this->addSql('ALTER TABLE message ALTER updated DROP DEFAULT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE message ALTER title SET NOT NULL');
        $this->addSql('ALTER TABLE message ALTER "from" TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE message ALTER "from" DROP DEFAULT');
        $this->addSql('ALTER TABLE message ALTER "to" TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE message ALTER "to" DROP DEFAULT');
        $this->addSql('ALTER TABLE message ALTER created TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE message ALTER created DROP DEFAULT');
        $this->addSql('ALTER TABLE message ALTER updated TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE message ALTER updated DROP DEFAULT');
    }
}
