<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //membuat sample data dari table posts
    $data = [
        ['title' => 'karina over power',
        'content' => 'lorem ipsum'],
        ['title' => 'seminggu belajar laravel',
        'content' => 'lorem ipsum'],
        ['title' => '5 langkah tidak menjadi beban keluarga',
        'content' => 'lorem ipsum']
    ];
    DB :: table ('posts')->insert($data);
    }
}
