<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250128062017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE application RENAME INDEX idx_8573dc2ea76ed395 TO IDX_A45BDDC1A76ED395');
        $this->addSql('ALTER TABLE application RENAME INDEX idx_8573dc2edcd6110 TO IDX_A45BDDC1DCD6110');
        $this->addSql('ALTER TABLE stock CHANGE name security VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE application RENAME INDEX idx_a45bddc1a76ed395 TO IDX_8573DC2EA76ED395');
        $this->addSql('ALTER TABLE application RENAME INDEX idx_a45bddc1dcd6110 TO IDX_8573DC2EDCD6110');
        $this->addSql('ALTER TABLE stock CHANGE security name VARCHAR(255) NOT NULL');
    }
}
