<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210408210154 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Create tables category, product and shopping_list';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE shopping_list (name VARCHAR(64) NOT NULL, date_created DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', input LONGTEXT NOT NULL, output LONGTEXT NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (name VARCHAR(32) NOT NULL, position INT NOT NULL, PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (name VARCHAR(32) NOT NULL, category_id VARCHAR(32) NOT NULL, position INT NOT NULL, INDEX IDX_1F1B251E12469DE2 (category_id), PRIMARY KEY(name)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_1F1B251E12469DE2 FOREIGN KEY (category_id) REFERENCES category (name)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_1F1B251E12469DE2');
        $this->addSql('DROP TABLE shopping_list');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE product');
    }
}
