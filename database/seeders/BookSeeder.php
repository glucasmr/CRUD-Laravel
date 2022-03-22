<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ModelBook;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=>'Exemplo seed 1',
            'pages'=>'10',
            'price'=>'10.10',
            'id_user'=>'1'
        ]);

        $book->create([
            'title'=>'Exemplo seed 2',
            'pages'=>'20',
            'price'=>'20.10',
            'id_user'=>'2'
        ]);

        $book->create([
            'title'=>'Exemplo seed 3',
            'pages'=>'30',
            'price'=>'30.10',
            'id_user'=>'3'
        ]);
    }
}
