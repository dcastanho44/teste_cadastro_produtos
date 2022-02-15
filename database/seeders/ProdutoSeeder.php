<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produto = new Produto();
        $produto->name = 'Cadeira Gamer';
        $produto->save();
        
        Produto::create([
            'name' => 'Monitor Gamer'
        ]);


    }
}
