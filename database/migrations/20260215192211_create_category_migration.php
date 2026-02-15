<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateCategoryMigration extends AbstractMigration
{
    public function change(): void
    {
        $this->table('categories')
            ->addColumn('name', 'string', ['limit' => 10])
            ->addColumn('description', 'string', ['limit' => 30])
            ->create();
    }
}
