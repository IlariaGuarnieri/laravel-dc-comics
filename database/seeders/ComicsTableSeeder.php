<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // qui prendo i dati da config dove ho salvato i comics
        $comics = config('comics');
        foreach($comics as $comic){
            $new_comic = new Comic();
        }
    }
}
