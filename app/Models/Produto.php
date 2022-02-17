<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $fillable = ['name'];

    public function tags (){
        return $this->belongsToMany(Produto::class, "produto_tags", "produto_id", "tag_id");
    }
}
