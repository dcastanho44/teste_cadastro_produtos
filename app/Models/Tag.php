<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name'];
    
    public function produto (){
        return $this->belongsToMany(Produto::class, "produto_tags", "tag_id", "produto_id");
    }
}
