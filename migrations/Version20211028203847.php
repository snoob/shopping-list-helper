<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211028203847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (name VARCHAR(32) NOT NULL, position INT NOT NULL, PRIMARY KEY(name))');
        $this->addSql('CREATE TABLE product (name VARCHAR(32) NOT NULL, category_id VARCHAR(32) NOT NULL, position INT NOT NULL, PRIMARY KEY(name))');
        $this->addSql('CREATE INDEX IDX_D34A04AD12469DE2 ON product (category_id)');
        $this->addSql('CREATE TABLE shopping_list (name VARCHAR(64) NOT NULL, date_created TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, input TEXT NOT NULL, output TEXT NOT NULL, PRIMARY KEY(name))');
        $this->addSql('COMMENT ON COLUMN shopping_list.date_created IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (name) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE product DROP CONSTRAINT FK_D34A04AD12469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE shopping_list');
    }
}
