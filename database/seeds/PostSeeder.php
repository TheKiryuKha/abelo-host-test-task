<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed
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
                'title' => 'Lorem1',
                'description' => 'Lorem Ipsum1',
                'text' => 'Lorem Ipsum Dolorem bla bla bla 1',
                'image_id' => 1
            ],
            [
                'title' => 'Lorem2',
                'description' => 'Lorem Ipsum2',
                'text' => 'Lorem Ipsum Dolorem bla bla bla 2',
                'image_id' => 2
            ],
            [
                'title' => 'Lorem3',
                'description' => 'Lorem Ipsum3',
                'text' => 'Lorem Ipsum Dolorem bla bla bla 3',
                'image_id' => 3
            ],
        ];

        $this->table('posts')
            ->insert($data)
            ->saveData();

        $data = [
            [
                'post_id' => 1,
                'category_id' => 1
            ],
            [
                'post_id' => 1,
                'category_id' => 2
            ],
            [
                'post_id' => 1,
                'category_id' => 3
            ],
            [
                'post_id' => 1,
                'category_id' => 4
            ],
            [
                'post_id' => 2,
                'category_id' => 2
            ],
            [
                'post_id' => 3,
                'category_id' => 1
            ],
            [
                'post_id' => 3,
                'category_id' => 4
            ],
        ];

        $this->table('post_category')
            ->insert($data)
            ->saveData();
    }
}
