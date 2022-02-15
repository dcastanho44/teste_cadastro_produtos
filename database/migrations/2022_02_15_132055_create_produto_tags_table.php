<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('produto_id')->unique('produto_id');
            $table->unsignedBigInteger('tags_id');
            $table->timestamps();

            //constraint
            $table->foreign('produto_id')->references('id')->on('produto');
            $table->foreign('tags_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_tags');
    }
}
