<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'title',
        'content',

 ];
    /**
     * Relation : Un chapitre peut avoir plusieurs choix.
     */
    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

}
