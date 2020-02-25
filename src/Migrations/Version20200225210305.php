<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

final class Version20200225210305 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Creates symfony_demo_post';
    }

    public function up(Schema $schema) : void
    {
        $symfonyDemoPost = $schema->createTable('symfony_demo_post');
        $symfonyDemoPost->addColumn('id', Types::INTEGER, ['notnull' => true])->setAutoincrement(true);
        $symfonyDemoPost->addColumn('author_id', Types::INTEGER, ['notnull' => true]);
        $symfonyDemoPost->addColumn('title', Types::STRING, ['length' => 255, 'notnull' => true]);
        $symfonyDemoPost->addColumn('slug', Types::STRING, ['length' => 255, 'notnull' => true]);
        $symfonyDemoPost->addColumn('summary', Types::STRING, ['length' => 255, 'notnull' => true]);
        $symfonyDemoPost->addColumn('content', Types::TEXT, ['notnull' => true]);
        $symfonyDemoPost->addColumn('published_at', Types::DATETIME_MUTABLE, ['notnull' => true]);
        $symfonyDemoPost->setPrimaryKey(['id']);
        $symfonyDemoPost->addIndex(['author_id'], 'IDX_58A92E65F675F31B');
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('symfony_demo_post');
    }
}
