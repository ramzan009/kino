<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory;
    use SoftDeletes;
    use CrudTrait;

    protected $table = 'authors';

    protected $fillable = [
        'name'
    ];

    /**
     * Отношения с фильмами
     */
    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'films_authors', 'author_id', 'film_id');
    }
}
