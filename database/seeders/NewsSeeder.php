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
            'slug' => 'warta-1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => date('Y-m-d'),
        ]);

        News::create([
            'title' => 'Warta 2',
            'slug' => 'warta-2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => date('Y-m-d'),
        ]);

        News::create([
            'title' => 'Warta 3',
            'slug' => 'warta-3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => date('Y-m-d'),
        ]);

        News::create([
            'title' => 'Warta 4',
            'slug' => 'warta-4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => date('Y-m-d'),
        ]);

        News::create([
            'title' => 'Warta 5',
            'slug' => 'warta-5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'date' => date('Y-m-d'),
        ]);
    }
}
