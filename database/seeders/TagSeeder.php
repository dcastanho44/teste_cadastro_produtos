<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produto = new Tag();
        $produto->name = 'Acessórios Gamer';
        $produto->save();
        
        Tag::create([
            'name' => 'Móveis'
        ]);
    }
}
