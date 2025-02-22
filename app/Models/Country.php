<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use HasFactory;
    use CrudTrait;
    use SoftDeletes;

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'alias'
    ];

    /**
     * Отношения с фильмами
      */
    public function film(): HasMany
    {
      return $this->hasMany(Film::class ,'country_id', 'id');
    }
}
