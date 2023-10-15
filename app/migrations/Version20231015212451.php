<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231015212451 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD vat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66B5B63A6B FOREIGN KEY (vat_id) REFERENCES vat (id)');
        $this->addSql('CREATE INDEX IDX_23A0E66B5B63A6B ON article (vat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66B5B63A6B');
        $this->addSql('DROP INDEX IDX_23A0E66B5B63A6B ON article');
        $this->addSql('ALTER TABLE article DROP vat_id');
    }
}
