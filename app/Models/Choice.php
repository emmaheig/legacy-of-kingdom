<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [
        'chapter_id',
        'content',
        'next_chapter_id',
    ];

    /**
     * Relation : Un choix appartient à un chapitre.
     */
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    /**
     * Relation : Un choix peut renvoyer vers un chapitre suivant.
     */
    public function nextChapter()
    {
        return $this->belongsTo(Chapter::class, 'next_chapter_id');
    }

}
