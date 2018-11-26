<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181124172933 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE adminstrador');
        $this->addSql('DROP TABLE clientes');
        $this->addSql('ALTER TABLE empresa CHANGE nome nome VARCHAR(255) NOT NULL, CHANGE telefone telefone VARCHAR(255) DEFAULT NULL, CHANGE endereco endereco VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE adminstrador (id INT NOT NULL, email TEXT DEFAULT NULL COLLATE latin1_swedish_ci, senha TEXT DEFAULT NULL COLLATE latin1_swedish_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clientes (id INT AUTO_INCREMENT NOT NULL, fk_id INT DEFAULT NULL, nome TEXT DEFAULT NULL COLLATE latin1_swedish_ci, email TEXT DEFAULT NULL COLLATE latin1_swedish_ci, INDEX fk_id (fk_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE clientes ADD CONSTRAINT clientes_ibfk_1 FOREIGN KEY (fk_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE empresa CHANGE nome nome TEXT NOT NULL COLLATE latin1_swedish_ci, CHANGE telefone telefone TEXT DEFAULT NULL COLLATE latin1_swedish_ci, CHANGE endereco endereco TEXT DEFAULT NULL COLLATE latin1_swedish_ci');
    }
}
