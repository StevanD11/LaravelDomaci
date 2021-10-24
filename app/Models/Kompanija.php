<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Zaposleni;

class Kompanija extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresa',
    ];


    public function zaposleni()
    {
        return $this->hasMany(Zaposleni::class);
    }
}
