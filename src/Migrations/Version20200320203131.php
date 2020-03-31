<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200320203131 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_88BDF3E992FC23A8 ON app_user');
        $this->addSql('DROP INDEX UNIQ_88BDF3E9A0D96FBF ON app_user');
        $this->addSql('DROP INDEX UNIQ_88BDF3E9C05FB297 ON app_user');
        $this->addSql('ALTER TABLE app_user DROP username_canonical, DROP email_canonical, DROP enabled, DROP salt, DROP last_login, DROP confirmation_token, DROP password_requested_at, DROP roles, CHANGE username username VARCHAR(25) NOT NULL, CHANGE email email VARCHAR(254) NOT NULL, CHANGE password password VARCHAR(64) NOT NULL, CHANGE is_active is_active TINYINT(1) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_88BDF3E9F85E0677 ON app_user (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_88BDF3E9E7927C74 ON app_user (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_88BDF3E9F85E0677 ON app_user');
        $this->addSql('DROP INDEX UNIQ_88BDF3E9E7927C74 ON app_user');
        $this->addSql('ALTER TABLE app_user ADD username_canonical VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD email_canonical VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD enabled TINYINT(1) NOT NULL, ADD salt VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD last_login DATETIME DEFAULT NULL, ADD confirmation_token VARCHAR(180) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD password_requested_at DATETIME DEFAULT NULL, ADD roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE username username VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(180) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE is_active is_active TINYINT(1) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_88BDF3E992FC23A8 ON app_user (username_canonical)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_88BDF3E9A0D96FBF ON app_user (email_canonical)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_88BDF3E9C05FB297 ON app_user (confirmation_token)');
    }
}
