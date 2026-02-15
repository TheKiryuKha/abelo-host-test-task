<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreatePostMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $this->table('posts')
            ->addColumn('title', 'string', ['limit' => 10])
            ->addColumn('description', 'string', ['limit' => 20])
            ->addColumn('text', 'string', ['limit' => 100])
            ->addColumn('views', 'integer', ['default' => 0])
            ->addColumn('image_id', 'integer', ['null' => true, 'signed' => false])
            ->addForeignKey('image_id', 'images', 'id')
            ->create();
    }
}
