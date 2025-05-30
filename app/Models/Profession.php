<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;

    protected $fillable = [
        "profession",
        "qualification",
        "profession_code",
        "qualification_code",
        "term",
        "name_college_id",
    ];

    public function nameCollege(){
        return $this->belongsTo(NameCollege::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
