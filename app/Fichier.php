<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    /**
     * Get the user that uploaded the file.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
