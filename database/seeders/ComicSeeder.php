<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $dcComic = new Comic();
            $dcComic->title = $comic['title'];
            $dcComic->description = $comic['description'];
            $dcComic->thumb = $comic['thumb'];
            $dcComic->price = $comic['price'];
            $dcComic->series = $comic['series'];
            $dcComic->sale_date = $comic['sale_date'];
            $dcComic->type = $comic['type'];
            $dcComic->save();
        }
    }
}