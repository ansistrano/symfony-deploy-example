<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

final class Version20200225215904 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Creates symfony_demo_tag table';
    }

    public function up(Schema $schema) : void
    {
        $symfonyDemoTag = $schema->createTable('symfony_demo_tag');
        $symfonyDemoTag->addColumn('id', Types::INTEGER, ['notnull' => true])->setAutoincrement(true);
        $symfonyDemoTag->addColumn('name', Types::STRING, ['length' => 255, 'notnull' => true]);
        $symfonyDemoTag->setPrimaryKey(['id']);
        $symfonyDemoTag->addUniqueIndex(['name'], 'UNIQ_4D5855405E237E06');
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('symfony_demo_tag');
    }
}
