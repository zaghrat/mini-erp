<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230619230333 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vat (id INT AUTO_INCREMENT NOT NULL, value DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vat_company (vat_id INT NOT NULL, company_id INT NOT NULL, INDEX IDX_B0AFE390B5B63A6B (vat_id), INDEX IDX_B0AFE390979B1AD6 (company_id), PRIMARY KEY(vat_id, company_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vat_company ADD CONSTRAINT FK_B0AFE390B5B63A6B FOREIGN KEY (vat_id) REFERENCES vat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vat_company ADD CONSTRAINT FK_B0AFE390979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vat_company DROP FOREIGN KEY FK_B0AFE390B5B63A6B');
        $this->addSql('ALTER TABLE vat_company DROP FOREIGN KEY FK_B0AFE390979B1AD6');
        $this->addSql('DROP TABLE vat');
        $this->addSql('DROP TABLE vat_company');
    }
}
