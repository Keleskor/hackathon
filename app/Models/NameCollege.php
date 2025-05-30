<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameCollege extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "address",
        "tel",
        "site",
        "logo"
    ];

    public function professions(){
        return $this->hasMany(Profession::class);
    }
}
