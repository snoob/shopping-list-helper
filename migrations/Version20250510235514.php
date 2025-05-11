<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250510235514 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create table recipe';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE recipe (code VARCHAR(64) NOT NULL, name VARCHAR(255) NOT NULL, source VARCHAR(255) NOT NULL, ingredients JSON NOT NULL, PRIMARY KEY(code)) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE recipe');
    }
}
