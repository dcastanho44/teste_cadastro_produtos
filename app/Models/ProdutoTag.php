<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoTag extends Model
{
    protected $table = 'produto_tags';
    protected $fillable = ['produto_id', 'tags_id'];
}
