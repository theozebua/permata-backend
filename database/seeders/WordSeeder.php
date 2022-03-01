<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Word::create([
            'source' => 'Amsal 1 : 7',
            'text' => 'Takut akan TUHAN adalah permulaan pengetahuan, tetapi orang bodoh menghina hikmat dan didikan.',
        ]);

        Word::create([
            'source' => 'Amsal 1 : 7',
            'text' => 'Takut akan TUHAN adalah permulaan pengetahuan, tetapi orang bodoh menghina hikmat dan didikan.',
        ]);

        Word::create([
            'source' => 'Amsal 1 : 7',
            'text' => 'Takut akan TUHAN adalah permulaan pengetahuan, tetapi orang bodoh menghina hikmat dan didikan.',
        ]);

        Word::create([
            'source' => 'Amsal 1 : 7',
            'text' => 'Takut akan TUHAN adalah permulaan pengetahuan, tetapi orang bodoh menghina hikmat dan didikan.',
        ]);

        Word::create([
            'source' => 'Amsal 1 : 7',
            'text' => 'Takut akan TUHAN adalah permulaan pengetahuan, tetapi orang bodoh menghina hikmat dan didikan.',
        ]);
    }
}
