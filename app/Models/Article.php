<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category', 'description'];

    static public function getRecord()
    {
        $return = self::select('articles.*')->get();
        return $return;
    }
    
}
