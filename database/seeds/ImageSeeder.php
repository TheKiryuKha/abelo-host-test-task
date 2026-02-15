<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class ImageSeeder extends AbstractSeed
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
                'path' => '/storage/images/image1.jpeg'
            ],
            [
                'path' => '/storage/images/image2.jpeg'
            ],
            [
                'path' => '/storage/images/image3.jpeg'
            ],
        ];

        $this->table('images')
            ->insert($data)
            ->saveData();
    }
}
