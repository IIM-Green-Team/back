<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201214230858 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE get_data_dataset ADD get_data_api_id INT NOT NULL');
        $this->addSql('ALTER TABLE get_data_dataset ADD CONSTRAINT FK_2CFDCA9B6DDFC2F8 FOREIGN KEY (get_data_api_id) REFERENCES get_data_api (id)');
        $this->addSql('CREATE INDEX IDX_2CFDCA9B6DDFC2F8 ON get_data_dataset (get_data_api_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE get_data_dataset DROP FOREIGN KEY FK_2CFDCA9B6DDFC2F8');
        $this->addSql('DROP INDEX IDX_2CFDCA9B6DDFC2F8 ON get_data_dataset');
        $this->addSql('ALTER TABLE get_data_dataset DROP get_data_api_id');
    }
}
