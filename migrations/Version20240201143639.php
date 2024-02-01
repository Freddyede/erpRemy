<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240201143639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_settings ADD text_color VARCHAR(6) DEFAULT NULL, ADD bg_color VARCHAR(6) DEFAULT NULL, ADD navbar_bg_color VARCHAR(6) DEFAULT NULL, ADD navbar_color VARCHAR(6) DEFAULT NULL, ADD sidebar_bg_color VARCHAR(6) DEFAULT NULL, ADD sidebar_color VARCHAR(6) DEFAULT NULL, ADD footer_bg_color VARCHAR(6) DEFAULT NULL, ADD footer_color VARCHAR(6) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_settings DROP text_color, DROP bg_color, DROP navbar_bg_color, DROP navbar_color, DROP sidebar_bg_color, DROP sidebar_color, DROP footer_bg_color, DROP footer_color');
    }
}
