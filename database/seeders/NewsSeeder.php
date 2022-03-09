<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => 'Warta 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => '2022-03-06',
        ]);

        News::create([
            'title' => 'Warta 2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => '2022-03-13',
        ]);

        News::create([
            'title' => 'Warta 3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => '2022-03-20',
        ]);

        News::create([
            'title' => 'Warta 4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => '2022-03-27',
        ]);

        News::create([
            'title' => 'Warta 5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => '2022-04-03',
        ]);
    }
}
