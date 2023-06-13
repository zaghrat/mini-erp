<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230611220900 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE measuring_unit (name VARCHAR(255) NOT NULL, company_id INT NOT NULL, INDEX IDX_A522667D979B1AD6 (company_id), PRIMARY KEY(name, company_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE measuring_unit ADD CONSTRAINT FK_A522667D979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE measuring_unit DROP FOREIGN KEY FK_A522667D979B1AD6');
        $this->addSql('DROP TABLE measuring_unit');
    }
}
