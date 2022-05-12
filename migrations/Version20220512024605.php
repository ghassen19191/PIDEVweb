<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220512024605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achat (id INT AUTO_INCREMENT NOT NULL, game_id INT DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_26A98456E48FD905 (game_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE achatt (id INT AUTO_INCREMENT NOT NULL, prix DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE achatt_game (achatt_id INT NOT NULL, game_id INT NOT NULL, INDEX IDX_B4FC99BF98B958A (achatt_id), INDEX IDX_B4FC99BE48FD905 (game_id), PRIMARY KEY(achatt_id, game_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, category VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, release_year DATE NOT NULL, price INT NOT NULL, stock INT NOT NULL, photo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456E48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
        $this->addSql('ALTER TABLE achatt_game ADD CONSTRAINT FK_B4FC99BF98B958A FOREIGN KEY (achatt_id) REFERENCES achatt (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE achatt_game ADD CONSTRAINT FK_B4FC99BE48FD905 FOREIGN KEY (game_id) REFERENCES game (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achatt_game DROP FOREIGN KEY FK_B4FC99BF98B958A');
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456E48FD905');
        $this->addSql('ALTER TABLE achatt_game DROP FOREIGN KEY FK_B4FC99BE48FD905');
        $this->addSql('DROP TABLE achat');
        $this->addSql('DROP TABLE achatt');
        $this->addSql('DROP TABLE achatt_game');
        $this->addSql('DROP TABLE game');
    }
}
