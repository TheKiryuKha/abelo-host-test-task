<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class CategorySeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Lorem1',
                'description' => 'Lorem Ipsum1'
            ],
            [
                'name' => 'Lorem2',
                'description' => 'Lorem Ipsum2'
            ],
            [
                'name' => 'Lorem2',
                'description' => 'Lorem Ipsum2'
            ],
            [
                'name' => 'Lorem3',
                'description' => 'Lorem Ipsum3'
            ],
            [
                'name' => 'Lorem4',
                'description' => 'Lorem Ipsum4'
            ],
            [
                'name' => 'Lorem5',
                'description' => 'Lorem Ipsum5'
            ],
        ];

        $this->table('categories')
            ->insert($data)
            ->saveData();
    }
}
