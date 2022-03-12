<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'title' => 'Event A',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'start' => '2022-03-07',
            'time' => date('H:i:s')
        ]);

        Event::create([
            'title' => 'Event B',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'start' => '2022-03-11',
            'time' => date('H:i:s')
        ]);

        Event::create([
            'title' => 'Event C',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'start' => '2022-03-16',
            'time' => date('H:i:s')
        ]);

        Event::create([
            'title' => 'Event D',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'start' => '2022-03-21',
            'time' => date('H:i:s')
        ]);

        Event::create([
            'title' => 'Event E',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempora sequi beatae voluptate rem nulla repellendus possimus quos officiis. Rerum vitae similique impedit, animi ut dolore alias, illo nam reiciendis optio fuga labore harum quaerat illum id! Facere alias maxime laboriosam dolorum necessitatibus temporibus sequi ducimus! Quasi assumenda magnam magni?',
            'start' => '2022-03-27',
            'time' => date('H:i:s')
        ]);
    }
}
