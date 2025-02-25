<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use HasFactory;
    use CrudTrait;
    use SoftDeletes;

    protected $table = 'genres';

    protected $fillable = [
        'name',
        'alias'
    ];

    /**
     * Отношения с фильмами
     */
    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'film_genres', 'genre_id', 'film_id');
    }

}
