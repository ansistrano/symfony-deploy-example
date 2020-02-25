<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200225220012 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Creates table symfony_demo_user';
    }

    public function up(Schema $schema) : void
    {
        $symfonyDemoUser = $schema->createTable('symfony_demo_user');
        $symfonyDemoUser->addColumn('id', Types::INTEGER, ['notnull' => true])->setAutoincrement(true);
        $symfonyDemoUser->addColumn('full_name', Types::STRING, ['length' => 255, 'notnull' => true]);
        $symfonyDemoUser->addColumn('username', Types::STRING, ['length' => 255, 'notnull' => true]);
        $symfonyDemoUser->addColumn('email', Types::STRING, ['length' => 255, 'notnull' => true]);
        $symfonyDemoUser->addColumn('password', Types::STRING, ['length' => 255, 'notnull' => true]);
        $symfonyDemoUser->addColumn('roles', Types::JSON, ['notnull' => true]);
        $symfonyDemoUser->setPrimaryKey(['id']);
        $symfonyDemoUser->addUniqueIndex(['email'], 'UNIQ_8FB094A1E7927C74');
        $symfonyDemoUser->addUniqueIndex(['username'], 'UNIQ_8FB094A1F85E0677');
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('symfony_demo_user');
    }
}
