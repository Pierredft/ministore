<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240110110130 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE telephone (id INT AUTO_INCREMENT NOT NULL, marque VARCHAR(100) NOT NULL, modele VARCHAR(100) NOT NULL, couleur VARCHAR(30) NOT NULL, memoire VARCHAR(5) NOT NULL, prix VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user CHANGE mail mail VARCHAR(180) NOT NULL, CHANGE telephone telephone VARCHAR(10) NOT NULL, CHANGE num_voie num_voie VARCHAR(10) NOT NULL, CHANGE num_rue num_rue VARCHAR(100) NOT NULL, CHANGE ville ville VARCHAR(100) NOT NULL, CHANGE code_postal code_postal VARCHAR(10) NOT NULL, CHANGE pays pays VARCHAR(100) NOT NULL, CHANGE roles roles JSON NOT NULL, CHANGE fav_livraison fav_livraison VARCHAR(20) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6495126AC48 ON user (mail)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE telephone');
        $this->addSql('DROP INDEX UNIQ_8D93D6495126AC48 ON user');
        $this->addSql('ALTER TABLE user CHANGE mail mail VARCHAR(255) NOT NULL, CHANGE telephone telephone VARCHAR(255) NOT NULL, CHANGE num_voie num_voie VARCHAR(255) NOT NULL, CHANGE num_rue num_rue VARCHAR(255) NOT NULL, CHANGE ville ville VARCHAR(255) NOT NULL, CHANGE code_postal code_postal VARCHAR(255) NOT NULL, CHANGE pays pays VARCHAR(255) NOT NULL, CHANGE roles roles VARCHAR(255) NOT NULL, CHANGE fav_livraison fav_livraison TINYINT(1) DEFAULT NULL');
    }
}
