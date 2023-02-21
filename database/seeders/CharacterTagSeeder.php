<?php

namespace Database\Seeders;

use App\Models\CharacterTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CharacterTag::create([
            'name' => 'Miku',
            'color' => '#ff0000',
        ]);
        CharacterTag::create([
            'name' => 'Rin',
            'color' => '#00ff00',
        ]);
        CharacterTag::create([
            'name' => 'Luka',
            'color' => '#0000ff',
        ]);
        CharacterTag::create([
            'name' => 'Len',
            'color' => '#ffff00',
        ]);
        CharacterTag::create([
            'name' => 'Kaito',
            'color' => '#00ffff',
        ]);
        CharacterTag::create([
            'name' => 'Meiko',
            'color' => '#ff00ff',
        ]);
        CharacterTag::create([
            'name' => 'Gumi',
            'color' => '#ff8000',
        ]);
        CharacterTag::create([
            'name' => 'IA',
            'color' => '#ff0080',
        ]);
    }
}
