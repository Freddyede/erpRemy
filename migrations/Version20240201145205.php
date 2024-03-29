<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240201145205 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_settings_user (user_settings_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_7FE3D2EF08F511D (user_settings_id), INDEX IDX_7FE3D2EA76ED395 (user_id), PRIMARY KEY(user_settings_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_settings_user ADD CONSTRAINT FK_7FE3D2EF08F511D FOREIGN KEY (user_settings_id) REFERENCES user_settings (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_settings_user ADD CONSTRAINT FK_7FE3D2EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_settings DROP FOREIGN KEY FK_5C844C5A76ED395');
        $this->addSql('DROP INDEX IDX_5C844C5A76ED395 ON user_settings');
        $this->addSql('ALTER TABLE user_settings DROP user_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_settings_user DROP FOREIGN KEY FK_7FE3D2EF08F511D');
        $this->addSql('ALTER TABLE user_settings_user DROP FOREIGN KEY FK_7FE3D2EA76ED395');
        $this->addSql('DROP TABLE user_settings_user');
        $this->addSql('ALTER TABLE user_settings ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_settings ADD CONSTRAINT FK_5C844C5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_5C844C5A76ED395 ON user_settings (user_id)');
    }
}
