<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //sovrascriviamo nome tabella se serve
    // protected $table = 'libri';

    //questi sono i nomi delle colonne in db che posso modificare
    protected $fillable = [
        'title',
        'original_title',
        'nationality',
        'date',
        'vote'
    ];

    public $timestamps = false;
}
