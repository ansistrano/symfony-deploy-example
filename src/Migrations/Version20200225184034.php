<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

final class Version20200225184034 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Creates database';
    }

    public function up(Schema $schema) : void
    {
        $symfonyDemoComment = $schema->createTable('symfony_demo_comment');
        $symfonyDemoComment->addColumn('id', Types::INTEGER, ['notnull' => true])->setAutoincrement(true);
        $symfonyDemoComment->addColumn('post_id', Types::INTEGER, ['notnull' => true]);
        $symfonyDemoComment->addColumn('author_id', Types::INTEGER, ['notnull' => true]);
        $symfonyDemoComment->addColumn('content', Types::TEXT, ['notnull' => true]);
        $symfonyDemoComment->addColumn('published_at', Types::DATETIME_MUTABLE, ['notnull' => true]);
        $symfonyDemoComment->addIndex(['author_id'], 'IDX_53AD8F83F675F31B');
        $symfonyDemoComment->addIndex(['post_id'], 'IDX_53AD8F834B89032C');
        $symfonyDemoComment->setPrimaryKey(['id']);
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('symfony_demo_comment');
    }
}
