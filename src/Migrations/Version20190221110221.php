<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190221110221 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE blog_content ADD id_categorie_id INT NOT NULL');
        $this->addSql('ALTER TABLE blog_content ADD CONSTRAINT FK_12338D2A9F34925F FOREIGN KEY (id_categorie_id) REFERENCES blog_categories (id)');
        $this->addSql('CREATE INDEX IDX_12338D2A9F34925F ON blog_content (id_categorie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE blog_content DROP FOREIGN KEY FK_12338D2A9F34925F');
        $this->addSql('DROP INDEX IDX_12338D2A9F34925F ON blog_content');
        $this->addSql('ALTER TABLE blog_content DROP id_categorie_id');
    }
}
