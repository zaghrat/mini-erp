<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231011212355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE supplier_order (id INT AUTO_INCREMENT NOT NULL, supplier_id INT NOT NULL, company_id INT NOT NULL, internal_reference VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', pre_tax_amount DOUBLE PRECISION NOT NULL, vat_amount DOUBLE PRECISION NOT NULL, total_amount DOUBLE PRECISION NOT NULL, status VARCHAR(255) NOT NULL, external_reference VARCHAR(255) DEFAULT NULL, delivery_date DATE DEFAULT NULL, INDEX IDX_2C3291B22ADD6D8C (supplier_id), INDEX IDX_2C3291B2979B1AD6 (company_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE supplier_order ADD CONSTRAINT FK_2C3291B22ADD6D8C FOREIGN KEY (supplier_id) REFERENCES supplier (id)');
        $this->addSql('ALTER TABLE supplier_order ADD CONSTRAINT FK_2C3291B2979B1AD6 FOREIGN KEY (company_id) REFERENCES company (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE supplier_order DROP FOREIGN KEY FK_2C3291B22ADD6D8C');
        $this->addSql('ALTER TABLE supplier_order DROP FOREIGN KEY FK_2C3291B2979B1AD6');
        $this->addSql('DROP TABLE supplier_order');
    }
}
