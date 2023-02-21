<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public $timestamps = false;

    public function referentiel()
    {
        return $this->belongsTo(Referentiel::class,);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
