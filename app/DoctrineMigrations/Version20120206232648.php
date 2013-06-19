<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20120206232648 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE cuenta ADD oficina_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE cuenta ADD CONSTRAINT FK_31C7BFCF8A8639B7 FOREIGN KEY (oficina_id) REFERENCES oficina_entidad(id)");
        $this->addSql("CREATE INDEX IDX_31C7BFCF8A8639B7 ON cuenta (oficina_id)");
        $this->addSql("ALTER TABLE cuenta_audit ADD oficina_id INT DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE cuenta DROP FOREIGN KEY FK_31C7BFCF8A8639B7");
        $this->addSql("DROP INDEX IDX_31C7BFCF8A8639B7 ON cuenta");
        $this->addSql("ALTER TABLE cuenta DROP oficina_id");
        $this->addSql("ALTER TABLE cuenta_audit DROP oficina_id");
    }
}