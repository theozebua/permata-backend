<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Buku 1',
            'slug' => 'buku-1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'image' => 'https://via.placeholder.com/300x300',
        ]);

        Book::create([
            'title' => 'Buku 2',
            'slug' => 'buku-2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'image' => 'https://via.placeholder.com/300x300',
        ]);

        Book::create([
            'title' => 'Buku 3',
            'slug' => 'buku-3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'image' => 'https://via.placeholder.com/300x300',
        ]);

        Book::create([
            'title' => 'Buku 4',
            'slug' => 'buku-4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'image' => 'https://via.placeholder.com/300x300',
        ]);

        Book::create([
            'title' => 'Buku 5',
            'slug' => 'buku-5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'image' => 'https://via.placeholder.com/300x300',
        ]);
    }
}
