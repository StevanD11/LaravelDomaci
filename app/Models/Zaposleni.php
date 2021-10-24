<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kompanija;

class Zaposleni extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'adresa',
        'kompanija_id'
    ];

    public function kompanija()
    {
        return $this->belongsTo(Kompanija::class);
    }
}
