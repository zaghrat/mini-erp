<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230625130439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tax (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vat_company DROP FOREIGN KEY FK_B0AFE390979B1AD6');
        $this->addSql('ALTER TABLE vat_company DROP FOREIGN KEY FK_B0AFE390B5B63A6B');
        $this->addSql('DROP TABLE vat_company');
        $this->addSql('ALTER TABLE vat ADD company_id INT NOT NULL');
        $this->addSql('ALTER TABLE vat ADD CONSTRAINT FK_84B32233979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
        $this->addSql('CREATE INDEX IDX_84B32233979B1AD6 ON vat (company_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vat_company (vat_id INT NOT NULL, company_id INT NOT NULL, INDEX IDX_B0AFE390B5B63A6B (vat_id), INDEX IDX_B0AFE390979B1AD6 (company_id), PRIMARY KEY(vat_id, company_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE vat_company ADD CONSTRAINT FK_B0AFE390979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vat_company ADD CONSTRAINT FK_B0AFE390B5B63A6B FOREIGN KEY (vat_id) REFERENCES vat (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('DROP TABLE tax');
        $this->addSql('ALTER TABLE vat DROP FOREIGN KEY FK_84B32233979B1AD6');
        $this->addSql('DROP INDEX IDX_84B32233979B1AD6 ON vat');
        $this->addSql('ALTER TABLE vat DROP company_id');
    }
}
