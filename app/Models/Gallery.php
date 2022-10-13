<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'category',
    ];

    public function category(){
        return $this->hasOne(Category::class,"id","category_id");
    }
}
