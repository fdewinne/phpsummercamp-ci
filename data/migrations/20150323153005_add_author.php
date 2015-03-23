<?php

use Phinx\Migration\AbstractMigration;

class AddAuthor extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $table = $this->table('post');
        $table->addColumn('author', 'string')
              ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $table = $this->table('post');
        $table->removeColumn('author', 'string')
              ->save();
    }
}