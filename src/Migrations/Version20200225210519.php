<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

final class Version20200225210519 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Creates table symfony_demo_post_tag';
    }

    public function up(Schema $schema) : void
    {
        $symfonyDemoPostTag = $schema->createTable('symfony_demo_post_tag');
        $symfonyDemoPostTag->addColumn('post_id', Types::INTEGER, ['notnull' => true]);
        $symfonyDemoPostTag->addColumn('tag_id', Types::INTEGER, ['notnull' => true]);
        $symfonyDemoPostTag->setPrimaryKey(['post_id', 'tag_id']);
        $symfonyDemoPostTag->addIndex(['tag_id'], 'IDX_6ABC1CC4BAD26311');
        $symfonyDemoPostTag->addIndex(['post_id'], 'IDX_6ABC1CC44B89032C');
    }

    public function down(Schema $schema) : void
    {
        $schema->dropTable('symfony_demo_post_tag');
    }
}
